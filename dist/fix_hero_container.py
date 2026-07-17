with open('includes/page-hero.php', 'r') as f:
    content = f.read()

content = content.replace('max-w-[1400px]', 'max-w-[1600px]')

with open('includes/page-hero.php', 'w') as f:
    f.write(content)

print("Hero container width fixed.")
