const fs = require('fs');
const path = require('path');

const themeDir = 'resurs11-theme';
if (!fs.existsSync(themeDir)) {
    fs.mkdirSync(themeDir);
}

fs.writeFileSync(path.join(themeDir, 'style.css'), '/*\nTheme Name: Resurs 11\nAuthor: AI Assistant\nDescription: Custom theme for Resurs 11\nVersion: 1.0\n*/\n', 'utf8');
fs.writeFileSync(path.join(themeDir, 'index.php'), '<?php get_header(); ?>\n<?php get_footer(); ?>\n', 'utf8');

const indexHtml = fs.readFileSync('index.html', 'utf8');

const headerMatch = indexHtml.match(/(.*?<\/header>)/is);
let headerContent = headerMatch ? headerMatch[1] : '';

const footerMatch = indexHtml.match(/(<footer\b.*)/is);
let footerContent = footerMatch ? footerMatch[1] : '';

headerContent = headerContent.replace(/(<\/head>)/i, '<?php wp_head(); ?>\n$1');
footerContent = footerContent.replace(/(<\/body>)/i, '<?php wp_footer(); ?>\n$1');

function updateImages(text) {
    if (!text) return text;
    let res = text.replace(/src=["']images\//ig, 'src="<?php echo get_template_directory_uri(); ?>/images/');
    res = res.replace(/onerror=["']this\.src=['"]images\//ig, 'onerror="this.src=\'<?php echo get_template_directory_uri(); ?>/images/');
    return res;
}

function updateLinks(text) {
    if (!text) return text;
    let res = text.replace(/href=["']index\.html["']/gi, 'href="<?php echo home_url(); ?>"');
    res = res.replace(/href=["']([a-zA-Z0-9_\-]+)\.html["']/gi, 'href="<?php echo home_url(\'/$1/\'); ?>"');
    return res;
}

headerContent = updateImages(headerContent);
headerContent = updateLinks(headerContent);
footerContent = updateImages(footerContent);
footerContent = updateLinks(footerContent);

fs.writeFileSync(path.join(themeDir, 'header.php'), headerContent, 'utf8');
fs.writeFileSync(path.join(themeDir, 'footer.php'), footerContent, 'utf8');

function extractBody(html) {
    const match = html.match(/<\/header>(.*?)<footer\b/is);
    return match ? match[1].trim() : '';
}

let frontBody = extractBody(indexHtml);
frontBody = updateImages(frontBody);
frontBody = updateLinks(frontBody);
fs.writeFileSync(path.join(themeDir, 'front-page.php'), '<?php get_header(); ?>\n' + frontBody + '\n<?php get_footer(); ?>\n', 'utf8');

const files = fs.readdirSync('.');
const skipFiles = ['index.html', 'temp_peleti.html', 'peleti-sun.html', 'eko_page.html', 'peleti_page.html'];

files.forEach(file => {
    if (file.endsWith('.html') && !skipFiles.includes(file)) {
        const html = fs.readFileSync(file, 'utf8');
        let bodyContent = extractBody(html);
        bodyContent = updateImages(bodyContent);
        bodyContent = updateLinks(bodyContent);
        
        const templateName = file.replace('.html', '').replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
        const phpFilename = 'page-' + file.replace('.html', '.php');
        
        fs.writeFileSync(path.join(themeDir, phpFilename), '<?php\n/* Template Name: ' + templateName + ' */\nget_header();\n?>\n' + bodyContent + '\n<?php get_footer(); ?>\n', 'utf8');
    }
});

console.log('Theme generated successfully in resurs11-theme folder.');
