const fs = require('fs');
const files = fs.readdirSync('.').filter(f => f.endsWith('.html'));

files.forEach(f => {
  let t = fs.readFileSync(f, 'utf8');
  let o = t;

  // Header Nav: replace <a href="peleti.html" ...>Продукти
  t = t.replace(/<a\s+href="peleti\.html"([^>]*>\s*(?:Продукти)\s*(?:<svg[\s\S]*?<\/svg>\s*)?|>\s*Продукти\s*)<\/a>/gi, '<a href="produkti.html"$1</a>');

  // Breadcrumbs: <a href="peleti.html" ...>Продукти</a>
  t = t.replace(/<a\s+href="peleti\.html"([^>]*>Продукти<\/a>)/gi, '<a href="produkti.html"$1');

  // Any other <a href="peleti.html"...>Продукти</a>
  t = t.replace(/href="peleti\.html"([^>]*>\s*Продукти\s*<\/a>)/gi, 'href="produkti.html"$1');

  if (t !== o) fs.writeFileSync(f, t, 'utf8');
});

console.log("Fixed 'Продукти' links to point to produkti.html");
