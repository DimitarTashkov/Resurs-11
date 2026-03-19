const fs = require('fs');

function replaceFormWithMap(filePath) {
    if (!fs.existsSync(filePath)) return;
    let content = fs.readFileSync(filePath, 'utf8');
    const formRegex = /<form\b[^>]*>[\s\S]*?<\/form>/i;
    if (formRegex.test(content)) {
        content = content.replace(formRegex, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2936.438259648939!2d23.40455507599026!3d42.59737151268393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa87cd2b7b25ad%3A0xe549af4fb8dcad60!2z0KDQtdGB0YPRgNGBIDEx!5e0!3m2!1sbg!2sbg!4v1709400000000!5m2!1sbg!2sbg" class="w-full min-h-[400px] rounded-2xl border-0 h-full" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');
        fs.writeFileSync(filePath, content, 'utf8');
        console.log('Fixed map in', filePath);
    }
}

replaceFormWithMap('kontakti.html');
replaceFormWithMap('za-nas.html');
