<?php
$pageCategory = "Permanent Makeup";
$pageTitle = "Microblading <i class='text-brand font-light'>Eyebrows.</i>";
$pageDescription = "Wake up every day with perfect brows. Natural-looking, semi-permanent microblading performed by our certified brow artists.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction & Conditions List -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="gs-reveal-text">
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Effortless Brows, <i class="text-accent font-light">Every Day.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Microblading is a semi-permanent cosmetic tattoo technique that creates natural-looking, hair-like strokes to fill in, reshape, or completely reconstruct your eyebrows. Results last 1–3 years and look so natural that no one will know they aren't yours.
                    </p>

                    <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4 border-b border-brand/10 pb-2">Ideal For</h3>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-3 font-body text-brand-muted text-sm font-light">
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Sparse Brows</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Over-Plucked Brows</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Alopecia Brows</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Asymmetry</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Active Lifestyles</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> No More Daily Makeup</li>
                    </ul>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="/assets/imagesfromsite/Microblading-new.webp" alt="Microblading" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Brow <i class="text-accent font-light">Techniques</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/Microblading-new.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Classic Microblading</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Hair-like strokes for the most natural-looking brows possible.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/Microblading-new.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Ombré Powder Brows</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A soft, shaded effect for fuller, more defined brows.</p>
                </a>

                <a href="eyebrow-transplant-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/Microblading-new.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Combo Brows</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A combination of hair strokes and powder shading for the most defined look.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            <div class="space-y-4">
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How long does microblading last?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Results typically last 1–3 years depending on skin type, sun exposure, and skincare routine. A color refresh every 12–18 months keeps them looking crisp.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Is microblading painful?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">A topical numbing cream is applied before the procedure, making it very tolerable. Most patients describe a light scratching sensation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.height = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    content.style.height = content.scrollHeight + 'px';
                }
            });
        });
    </script>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
