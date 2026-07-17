import re

# Links from user
new_fb = "https://www.facebook.com/refineskinandbodyclinic?rdid=7FBWkw4HlxQOf0lC&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1b4epu5tXm%2F"
new_yt = "https://www.youtube.com/channel/UC7u54E9nKohl8w4MziXB-Zg"
old_fb = "https://www.facebook.com/share/1b4epu5tXm/"
old_yt = "https://www.youtube.com"

# Update header.php
with open('includes/header.php', 'r') as f:
    header_content = f.read()

# Replace Facebook in header
header_content = header_content.replace(old_fb, new_fb)

# Add YouTube to header if missing
if "fa-youtube" not in header_content:
    # Find tiktok line and append youtube right after
    tiktok_line = '<a href="https://www.tiktok.com/discover/refine-skin-and-body-clinic-uganda" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-tiktok"></i></a>'
    yt_line = f'<a href="{new_yt}" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-youtube"></i></a>'
    if tiktok_line in header_content:
        header_content = header_content.replace(tiktok_line, f"{tiktok_line}\n                {yt_line}")

with open('includes/header.php', 'w') as f:
    f.write(header_content)

# Update footer.php
with open('includes/footer.php', 'r') as f:
    footer_content = f.read()

footer_content = footer_content.replace(old_fb, new_fb)
footer_content = footer_content.replace(old_yt, new_yt)

with open('includes/footer.php', 'w') as f:
    f.write(footer_content)

print("Socials updated successfully.")
