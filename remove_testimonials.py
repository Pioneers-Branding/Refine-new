import os

# Delete testimonials.php
if os.path.exists('testimonials.php'):
    os.remove('testimonials.php')
    print("Deleted testimonials.php")

# Remove from router.php
with open('router.php', 'r') as f:
    content = f.read()
if "'/testimonials' => 'testimonials.php'," in content:
    content = content.replace("    '/testimonials' => 'testimonials.php',\n", "")
    with open('router.php', 'w') as f:
        f.write(content)
    print("Removed from router.php")

# Remove from header.php
with open('includes/header.php', 'r') as f:
    lines = f.readlines()
with open('includes/header.php', 'w') as f:
    for line in lines:
        if 'href="testimonials"' not in line:
            f.write(line)
        else:
            print("Removed from header.php:", line.strip())

# Remove from footer.php
with open('includes/footer.php', 'r') as f:
    lines = f.readlines()
with open('includes/footer.php', 'w') as f:
    for line in lines:
        if 'href="testimonials"' not in line:
            f.write(line)
        else:
            print("Removed from footer.php:", line.strip())

