const fs = require('fs');
const path = require('path');

function processFile(filePath) {
    let content = fs.readFileSync(filePath, 'utf8');

    const startMarker = '<!-- PRODUCT DETAIL -->';
    const endMarker1 = '<!-- RELATED -->';
    const endMarker2 = '<!-- RELATED PRODUCTS -->';

    let startIndex = content.indexOf(startMarker);
    let endIndex = content.indexOf(endMarker1);
    if (endIndex === -1) endIndex = content.indexOf(endMarker2);

    if (startIndex === -1 || endIndex === -1) return;

    let beforeSection = content.substring(0, startIndex);
    let afterSection = content.substring(endIndex);
    let sectionContent = content.substring(startIndex, endIndex);

    // Image
    const imgStart = sectionContent.indexOf('<div class="rounded-2xl overflow-hidden');
    let imgEnd = sectionContent.indexOf('</div>\n', imgStart);
    if (imgEnd === -1) imgEnd = sectionContent.indexOf('</div>\r\n', imgStart);
    if (imgEnd === -1) imgEnd = sectionContent.indexOf('</div>', imgStart);
    if (imgEnd === -1) return; // safeguard
    const imgHTML = sectionContent.substring(imgStart, imgEnd + 6).trim();

    // Badge
    const badgeStart = sectionContent.indexOf('<span class="inline-block');
    let badgeHTML = '';
    if (badgeStart !== -1) {
        let badgeEnd = sectionContent.indexOf('</span>', badgeStart) + 7;
        badgeHTML = sectionContent.substring(badgeStart, badgeEnd);
    }

    // Title
    const titleStart = sectionContent.indexOf('<h2 class="text-3xl', imgEnd);
    let titleHTML = '';
    let titleEnd = 0;
    if (titleStart !== -1) {
        titleEnd = sectionContent.indexOf('</h2>', titleStart) + 5;
        titleHTML = sectionContent.substring(titleStart, titleEnd).replace(' mb-4', ' mb-6');
    }

    // Description
    const descStart = sectionContent.indexOf('<p class="text-gray-500 text-lg', titleEnd);
    let descHTML = '';
    let descEnd = titleEnd;
    if (descStart !== -1) {
        descEnd = sectionContent.indexOf('</p>', descStart) + 4;
        descHTML = sectionContent.substring(descStart, descEnd).replace(' mb-6', ' mb-8');
    }

    // Table
    let tableContainerStart = sectionContent.indexOf('<div class="bg-white rounded-xl', descEnd);
    let tableInner = '';
    let tableEndOverall = descEnd;
    if (tableContainerStart !== -1 && tableContainerStart < sectionContent.indexOf('<ul')) {
        let tableTitleStart = sectionContent.indexOf('<h3', tableContainerStart);
        if (tableTitleStart === -1) tableTitleStart = tableContainerStart; // fallback
        let tableEnd = sectionContent.indexOf('</table>', tableTitleStart);
        if (tableEnd !== -1) {
            tableEnd += 8;
            if (tableTitleStart !== tableContainerStart) {
                tableInner = sectionContent.substring(tableTitleStart, tableEnd);
            } else {
                // If it doesn't have h3
                tableInner = sectionContent.substring(sectionContent.indexOf('>', tableContainerStart) + 1, tableEnd);
            }
            tableEndOverall = sectionContent.indexOf('</div>', tableEnd) + 6;
        }
    }

    // List
    let listStart = sectionContent.indexOf('<ul class="space-y-3', tableEndOverall);
    let listHTML = '';
    let listEndIdx = tableEndOverall;
    if (listStart !== -1) {
        let listEnd = sectionContent.indexOf('</ul>', listStart) + 5;
        listHTML = sectionContent.substring(listStart, listEnd).replace(' mb-8', '').replace(' mb-6', '');
        listEndIdx = listEnd;
    }

    // Check Out of Stock vs Price
    let isOutOfStock = false;
    let priceBlock = '';
    let outOfStockHTML = '';

    // Usually out of stock is <div class="bg-red-50 ...>
    let oosStart = sectionContent.indexOf('<div class="bg-red-50', listEndIdx);
    let priceStart = sectionContent.indexOf('<div class="grid grid-cols-2 gap-4', listEndIdx);
    
    // We also need to find the buttons
    let btnStart = sectionContent.indexOf('<div class="flex flex-col sm:flex-row gap-4">', listEndIdx);
    if(btnStart === -1) {
        btnStart = sectionContent.indexOf('<div class="flex flex-col sm:flex-row', listEndIdx);
    }

    if (oosStart !== -1 && oosStart < btnStart) {
        isOutOfStock = true;
        let oosInnerStart = sectionContent.indexOf('>', oosStart) + 1;
        let oosEnd = sectionContent.indexOf('</div>\n', oosStart);
        if (oosEnd === -1) oosEnd = sectionContent.indexOf('</div>\r\n', oosStart);
        if (oosEnd === -1) oosEnd = sectionContent.indexOf('</div>', oosInnerStart + 100); 
        // fallback, relying on it being closed before buttons
        let oosHtmlRaw = sectionContent.substring(oosStart, btnStart).trim();
        // remove trailing </div> that matches the parent or self properly
        // Actually, just grab between oosStart and btnStart
        outOfStockHTML = sectionContent.substring(oosStart, btnStart).trim();
        // strip trailing </div> if needed if it leaves mismatched, but wait, oosStart is the whole block.
    } else if (priceStart !== -1 && priceStart < btnStart) {
        priceBlock = sectionContent.substring(priceStart, btnStart).trim();
    }

    // Clean up closing divs if they accidentally grabbed the parent's closed div
    while(priceBlock.endsWith('</div>\n</div>') || priceBlock.endsWith('</div>\r\n</div>')) {
        priceBlock = priceBlock.substring(0, priceBlock.lastIndexOf('</div>')).trim();
    }
    priceBlock = priceBlock.replace('mb-6', 'mb-2'); // remove bottom margin

    while(outOfStockHTML.endsWith('</div>\n</div>') || outOfStockHTML.endsWith('</div>\r\n</div>')) {
        outOfStockHTML = outOfStockHTML.substring(0, outOfStockHTML.lastIndexOf('</div>')).trim();
    }
    outOfStockHTML = outOfStockHTML.replace('mb-6', 'mb-2');

    let btnInnerRaw = '';
    let btnInner = '';
    if (btnStart !== -1) {
        let innerStart = sectionContent.indexOf('>', btnStart) + 1;
        let nextDiv = sectionContent.indexOf('</div>', innerStart);
        let endOfButtons = sectionContent.indexOf('</div>', innerStart);
        btnInnerRaw = sectionContent.substring(innerStart, endOfButtons);
        btnInner = btnInnerRaw.trim();
        
        // Let's strip out `Изчерпано` since the user wants us to ensure styling is cool. 
        // Wait, btnInner already has `Изчерпано` in `<button disabled...`
    }
    
    // Fallback if price is somehow empty and it's not out of stock
    if(!isOutOfStock && priceBlock === '') {
        priceBlock = '<div class="text-gray-500 font-medium my-auto text-center md:text-left pt-2 pb-2">Свържете се с нас за актуални цени</div>';
    }

    // To prevent nesting weirdness, close any opened divs in oos
    // Usually oos has 2 nested divs
    let middleSection = '';
    if (tableInner !== '') {
        middleSection += `
              <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm overflow-x-auto mb-6">
                ${tableInner}
              </div>`;
    }
    if (listHTML !== '') {
        middleSection += `
              <div class="mb-8">
                <h4 class="font-bold text-lg text-brand-dark mb-4">Основни предимства</h4>
                ${listHTML}
              </div>`;
    }

    let newDesign = `<!-- PRODUCT DETAIL -->
      <section class="bg-brand-cream rounded-2xl py-8">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            ${imgHTML}
            <div class="flex flex-col h-full">
              <div class="mb-6">
                ${badgeHTML}
                ${titleHTML}
                ${descHTML}
              </div>
              
              ${middleSection}

              <!-- Цена и бутони -->
              <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm mt-auto">
                ${isOutOfStock ? outOfStockHTML : priceBlock}
                <div class="flex flex-col sm:flex-row gap-4 mt-6">
                  ${btnInner}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      `;

    fs.writeFileSync(filePath, beforeSection + newDesign + afterSection);
    // console.log("Done: ", filePath);
}

// Process HTML files
fs.readdirSync(__dirname).forEach(file => {
    if ((file.startsWith('peleti-') || file.startsWith('ekobriket-') || file.startsWith('vaglishta-')) && file.endsWith('.html')) {
        processFile(path.join(__dirname, file));
    }
});

// Process PHP files
const themeDir = path.join(__dirname, 'resurs11-theme');
fs.readdirSync(themeDir).forEach(file => {
    if ((file.startsWith('page-peleti-') || file.startsWith('page-ekobriket-') || file.startsWith('page-vaglishta-')) && file.endsWith('.php')) {
        processFile(path.join(themeDir, file));
    }
});
