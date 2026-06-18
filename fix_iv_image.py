with open('includes/home-extras.php', 'r') as f:
    content = f.read()

# Replace the IV Lounge feature image container
old_html = """                <div class="relative w-full h-[400px] lg:h-[520px] img-reveal-wrapper shadow-2xl rounded-3xl overflow-hidden gs-reveal-img">
                    <div class="img-reveal-overlay"></div>
                    <img src="/assets/images/services/iv-therapy/inner_beauty_iv_therapy1.jpeg" alt="IV Lounge" class="img-parallax object-cover w-full h-full" loading="lazy">
                </div>"""

new_html = """                <div class="relative w-full aspect-[4/3] lg:aspect-[3/2] img-reveal-wrapper shadow-2xl rounded-3xl overflow-hidden gs-reveal-img">
                    <div class="img-reveal-overlay"></div>
                    <img src="/assets/images/services/iv-therapy/inner_beauty_iv_therapy1.jpeg" alt="IV Lounge" class="object-cover w-full h-full" loading="lazy">
                </div>"""

# Just in case the whitespace doesn't match perfectly, I'll replace line by line
content = content.replace('h-[400px] lg:h-[520px]', 'aspect-[4/3] lg:aspect-[3/2]')
# remove img-parallax from this specific image to stop it from zooming in 1.2x
content = content.replace('class="img-parallax object-cover w-full h-full"', 'class="object-cover w-full h-full"')

with open('includes/home-extras.php', 'w') as f:
    f.write(content)

print("Image container updated.")
