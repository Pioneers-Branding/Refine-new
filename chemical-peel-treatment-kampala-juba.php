<?php
$pageCategory = "Skin Resurfacing";
$pageTitle = "Chemical <i class='text-brand font-light'>Peels.</i>";
$pageDescription = "Reveal fresher, brighter, more even-toned skin with our range of medical-grade chemical peels, tailored to your skin type and concern.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Treatment Introduction -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Resurface & Renew</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">A Peel for <i class="text-accent font-light">Every Skin.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Chemical peels use carefully formulated acids to exfoliate the outermost layers of skin, triggering cellular renewal and revealing the healthier, more luminous skin beneath. From gentle lunchtime refreshers to deeper corrective peels, we match the depth and formula to your unique skin goals.
                    </p>

                    <div class="space-y-4">
                        <div class="glass-panel p-5 rounded-2xl border border-brand/5 shadow-sm flex gap-4 items-start">
                            <i class="fas fa-flask text-accent text-xl mt-1"></i>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-base mb-1">Light Peels (Lunchtime)</h4>
                                <p class="text-xs text-brand-muted font-light">Glycolic, lactic, and mandelic acids. No downtime. Perfect for radiance and texture refinement.</p>
                            </div>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl border border-brand/5 shadow-sm flex gap-4 items-start">
                            <i class="fas fa-flask text-accent text-xl mt-1"></i>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-base mb-1">Medium Peels</h4>
                                <p class="text-xs text-brand-muted font-light">TCA and Jessner peels that treat pigmentation, acne, and moderate sun damage with 3–5 days of peeling.</p>
                            </div>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl border border-brand/5 shadow-sm flex gap-4 items-start">
                            <i class="fas fa-flask text-accent text-xl mt-1"></i>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-base mb-1">Deep Peels</h4>
                                <p class="text-xs text-brand-muted font-light">Phenol-based peels for advanced wrinkling, deep scars, and severe photodamage. Long-lasting results.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Chemical Peel Treatment" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Our <i class="text-accent font-light">Peel Range</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3997989/pexels-photo-3997989.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">TCA Peel</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A medium-depth peel for pigmentation, fine lines, and acne scars. Visible results in one session.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3735619/pexels-photo-3735619.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Mandelic Peel</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A gentle, anti-bacterial peel ideal for sensitive and acne-prone skin, including darker tones.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/4046718/pexels-photo-4046718.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Cosmelan Depigmentation Peel</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">The gold-standard treatment for melasma and stubborn hyperpigmentation across all skin types.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-white border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            <div class="space-y-4">
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Will my skin peel a lot?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">It depends on the depth of peel. Light peels may cause only minor flaking; medium peels typically peel for 3–5 days; deep peels for up to 10 days.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Are chemical peels safe for dark skin?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes, when performed by an experienced dermatologist. We choose peels and concentrations specifically suited to your Fitzpatrick type to minimize PIH risk.</p>
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
