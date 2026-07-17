import os
import glob

specific_videos = [
    "assets/images/refineskinandbodyclinic_2025-01-18_DE99oi9xPvA.mp4",
    "assets/images/refineskinandbodyclinic_2025-01-08_DEkSaviirqa.mp4",
    "assets/images/refineskinandbodyclinic_2025-01-13_DExB0ZMBDyC.mp4",
    "assets/images/refineskinandbodyclinic_2025-01-24_DFNglaABf3Y.mp4",
    "assets/images/refineskinandbodyclinic_2025-01-28_DFXOFK5M2Di.mp4",
    "assets/images/refineskinandbodyclinic_2025-02-14_DGDwhMZIO_r.mp4",
    "assets/images/refineskinandbodyclinic_2025-02-20_DGSUPOWIHRL.mp4",
    "assets/images/refineskinandbodyclinic_2025-02-25_DGfM32gIDnL.mp4",
    "assets/images/refineskinandbodyclinic_2025-03-01_DGpTQwLpGYu.mp4",
    "assets/images/refineskinandbodyclinic_2025-03-04_DGxUvxFPG6e.mp4"
]

images = glob.glob('assets/images/refineskinandbodyclinic_*.jpg')
images.sort()

# Remove any specific videos that don't actually exist (just in case)
valid_videos = [v for v in specific_videos if os.path.exists(v)]

html = """
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <h2 class="text-section font-display text-brand-deeper mb-10 text-center gs-reveal-text">Watch <i class="text-accent font-light">Their Stories</i></h2>
            
            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-16 gs-reveal-text">
                <button class="filter-btn px-6 py-2 rounded-full border-none bg-brand text-white text-sm font-semibold transition-colors shadow-md" data-filter="all">All</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="video">Videos</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="image">Images</button>
            </div>

            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8 gs-stagger-bento" id="media-grid">
"""

# Interleave or just append
# Let's put videos first, then images
for vid in valid_videos:
    html += f"""                <!-- Video -->
                <div class="filter-item relative rounded-3xl overflow-hidden aspect-[9/16] bg-black group bento-item shadow-lg" data-category="video">
                    <video src="/{vid}" class="absolute inset-0 w-full h-full object-cover" controls preload="metadata"></video>
                </div>
"""

for img in images:
    html += f"""                <!-- Image -->
                <div class="filter-item relative rounded-3xl overflow-hidden aspect-[9/16] bg-black group bento-item shadow-lg" data-category="image">
                    <img src="/{img}" alt="Testimonial Image" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
                </div>
"""

html += """            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.filter-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('bg-brand', 'text-white', 'border-none', 'shadow-md');
                    b.classList.add('border', 'border-brand/20', 'text-brand');
                });
                btn.classList.add('bg-brand', 'text-white', 'border-none', 'shadow-md');
                btn.classList.remove('border', 'border-brand/20', 'text-brand');

                const filter = btn.getAttribute('data-filter');

                items.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>
"""

with open('testimonials.php', 'r') as f:
    content = f.read()

start_idx = content.find('<main class="pt-20">') + len('<main class="pt-20">')
end_idx = content.find('</main>')

new_content = content[:start_idx] + "\n" + html + content[end_idx:]

with open('testimonials.php', 'w') as f:
    f.write(new_content)

