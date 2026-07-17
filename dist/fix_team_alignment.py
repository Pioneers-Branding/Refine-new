with open('about.php', 'r') as f:
    content = f.read()

# Replace the grid container
old_grid = '<div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 gs-stagger-bento">'
new_grid = '<div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 items-start gs-stagger-bento">'

content = content.replace(old_grid, new_grid)

with open('about.php', 'w') as f:
    f.write(content)

print("Grid alignment fixed.")
