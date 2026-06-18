with open('includes/home-extras.php', 'r') as f:
    content = f.read()

# Replace the IV Lounge feature image
# We'll replace all instances just in case, it improves the mosaic card too
content = content.replace(
    '/assets/imagesfromsite/IV-Therapy_09.png',
    '/assets/images/services/iv-therapy/inner_beauty_iv_therapy1.jpeg'
)

with open('includes/home-extras.php', 'w') as f:
    f.write(content)

# Let's also check if it's used in services.php
try:
    with open('includes/services.php', 'r') as f:
        services_content = f.read()
    services_content = services_content.replace(
        '/assets/imagesfromsite/IV-Therapy_09.png',
        '/assets/images/services/iv-therapy/inner_beauty_iv_therapy1.jpeg'
    )
    with open('includes/services.php', 'w') as f:
        f.write(services_content)
except:
    pass

print("Image replaced.")
