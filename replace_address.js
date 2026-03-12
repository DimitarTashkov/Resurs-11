const fs = require('fs');
const path = require('path');
const p = 'c:\\Users\\mitko\\OneDrive\\Работен плот\\Resurs 11';

// Get all html files
const files = fs.readdirSync(p).filter(f => f.endsWith('.html'));

const target = 'район Панчерево, ул. Околовръстен път No 338';

let totalReplaced = 0;

for (let file of files) {
    const fullPath = path.join(p, file);
    let content = fs.readFileSync(fullPath, 'utf8');
    
    // Replace variants
    let newContent = content.replace(/София,\s*район\s*Панчарево,\s*<br\s*\/?>\s*ул\.\s*Околовръстен\s*път\s*[№N]\s*338/g, target);
    newContent = newContent.replace(/София,\s*район\s*Панчарево,\s*ул\.\s*Околовръстен\s*път\s*[№N]\s*338/g, target);
    newContent = newContent.replace(/ул\.\s*Околовръстен\s*път\s*[№N]\s*338,\s*Панчарево/g, target);
    
    // Check if changed
    if (newContent !== content) {
        fs.writeFileSync(fullPath, newContent, 'utf8');
        totalReplaced++;
        console.log('Replaced in ' + file);
    }
}

console.log('Total files modified: ' + totalReplaced);
