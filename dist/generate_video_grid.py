import os
import glob

videos = glob.glob('assets/images/refineskinandbodyclinic_*.mp4')
videos.sort()

html = """
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <h2 class="text-section font-display text-brand-deeper mb-16 text-center gs-reveal-text">Watch <i class="text-accent font-light">Their Stories</i></h2>
            
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8 gs-stagger-bento">
"""

for vid in videos:
    html += f"""                <!-- Video -->
                <div class="relative rounded-3xl overflow-hidden aspect-[9/16] bg-black group bento-item shadow-lg">
                    <video src="/{vid}" class="absolute inset-0 w-full h-full object-cover" controls preload="metadata"></video>
                </div>
"""

html += """            </div>
        </div>
    </section>
"""

with open('testimonials.php', 'r') as f:
    content = f.read()

start_idx = content.find('<main class="pt-20">') + len('<main class="pt-20">')
end_idx = content.find('</main>')

new_content = content[:start_idx] + "\n" + html + content[end_idx:]

with open('testimonials.php', 'w') as f:
    f.write(new_content)

