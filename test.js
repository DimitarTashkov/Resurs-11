const fs = require('fs');
let t = fs.readFileSync('index.html', 'utf8');
let matches = t.match(/<a[^>]*href="[^"]*"[^>]*>[\s\S]*?Продукти[\s\S]*?<\/a>/gi);
console.log(matches);
