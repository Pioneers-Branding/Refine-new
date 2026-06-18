with open('includes/home-extras.php', 'r') as f:
    content = f.read()

# Replace the padding of the first section
old_str = '<section class="py-16 lg:py-24 relative bg-surface-cool overflow-hidden border-y border-brand/5">'
new_str = '<section class="py-8 lg:py-12 relative bg-surface-cool overflow-hidden border-y border-brand/5">'

content = content.replace(old_str, new_str)

with open('includes/home-extras.php', 'w') as f:
    f.write(content)

print("Spacing fixed.")
