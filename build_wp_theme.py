import os
import re

theme_dir = 'resurs11-theme'
os.makedirs(theme_dir, exist_ok=True)

with open(os.path.join(theme_dir, 'style.css'), 'w', encoding='utf-8') as f:
    f.write('/*\nTheme Name: Resurs 11\nAuthor: AI Assistant\nDescription: Custom theme for Resurs 11\nVersion: 1.0\n*/\n')

with open(os.path.join(theme_dir, 'index.php'), 'w', encoding='utf-8') as f:
    f.write('<?php get_header(); ?>\n<?php get_footer(); ?>\n')

with open('index.html', 'r', encoding='utf-8') as f:
    index_html = f.read()

header_match = re.search(r'(.*?</header>)', index_html, re.DOTALL | re.IGNORECASE)
header_content = header_match.group(1) if header_match else ''

footer_match = re.search(r'(<footer\b.*)', index_html, re.DOTALL | re.IGNORECASE)
footer_content = footer_match.group(1) if footer_match else ''

header_content = re.sub(r'(</head>)', r'<?php wp_head(); ?>\n\1', header_content, flags=re.IGNORECASE)
footer_content = re.sub(r'(</body>)', r'<?php wp_footer(); ?>\n\1', footer_content, flags=re.IGNORECASE)

def update_images(text):
    text = re.sub(r'src=["\']images/', r'src="<?php echo get_template_directory_uri(); ?>/images/', text)
    text = re.sub(r'onerror=["\']this\.src=[\'\"]images/', r'onerror="this.src=\'<?php echo get_template_directory_uri(); ?>/images/', text)
    return text

header_content = update_images(header_content)
footer_content = update_images(footer_content)

with open(os.path.join(theme_dir, 'header.php'), 'w', encoding='utf-8') as f:
    f.write(header_content)

with open(os.path.join(theme_dir, 'footer.php'), 'w', encoding='utf-8') as f:
    f.write(footer_content)

def extract_body(html):
    match = re.search(r'</header>(.*?)<footer\b', html, re.DOTALL | re.IGNORECASE)
    return match.group(1).strip() if match else ''

front_body = extract_body(index_html)
front_body = update_images(front_body)
with open(os.path.join(theme_dir, 'front-page.php'), 'w', encoding='utf-8') as f:
    f.write('<?php get_header(); ?>\n' + front_body + '\n<?php get_footer(); ?>\n')

html_files = [f for f in os.listdir('.') if f.endswith('.html') and f not in ('index.html', 'temp_peleti.html', 'peleti-sun.html', 'eko_page.html', 'peleti_page.html')]
for html_file in html_files:
    with open(html_file, 'r', encoding='utf-8') as f:
        html = f.read()
    
    body_content = extract_body(html)
    body_content = update_images(body_content)
    
    template_name = html_file.replace('.html', '').replace('-', ' ').title()
    
    # Just prefix with page-
    php_filename = 'page-' + html_file.replace('.html', '.php')
        
    with open(os.path.join(theme_dir, php_filename), 'w', encoding='utf-8') as f:
        f.write('<?php\n/* Template Name: ' + template_name + ' */\nget_header();\n?>\n')
        f.write(body_content)
        f.write('\n<?php get_footer(); ?>\n')

print("Theme generated successfully in resurs11-theme folder.")
