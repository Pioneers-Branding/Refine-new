# Fix hero.php padding
with open('includes/hero.php', 'r') as f:
    hero_content = f.read()
hero_content = hero_content.replace(
    '<div class="max-w-[1600px] mx-auto px-6 lg:px-10 pb-6">',
    '<div class="max-w-[1600px] mx-auto px-6 lg:px-10 pb-16 lg:pb-24">'
)
with open('includes/hero.php', 'w') as f:
    f.write(hero_content)

# Fix footer.php padding
with open('includes/footer.php', 'r') as f:
    footer_content = f.read()

footer_content = footer_content.replace(
    '<footer id="footer" class="footer-grand relative bg-brand-deeper text-white overflow-hidden pt-10 lg:pt-28">',
    '<footer id="footer" class="footer-grand relative bg-brand-deeper text-white overflow-hidden pt-16 lg:pt-24">'
)

footer_content = footer_content.replace(
    '<div class="mb-16 border-b border-white/10 pb-16 pt-0 lg:pt-8 px-4 lg:px-16 max-w-[1400px] mx-auto">',
    '<div class="mb-16 border-b border-white/10 pb-16 px-4 lg:px-16 max-w-[1400px] mx-auto">'
)

with open('includes/footer.php', 'w') as f:
    f.write(footer_content)

print("Padding standardized.")
