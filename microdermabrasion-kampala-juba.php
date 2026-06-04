<?php
$pageCategory = "Skin Resurfacing";
$pageTitle = "Microdermabrasion <i class='text-brand font-light'>Treatment.</i>";
$pageDescription = "A non-invasive mechanical exfoliation that buffs away dull, damaged skin to reveal a fresh, smooth, and luminous complexion.";
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
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Original Glow Getter</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Buff, Polish, <i class="text-accent font-light">Reveal.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Microdermabrasion is a time-tested, non-invasive treatment that uses a diamond-tipped wand to gently abrade the outermost layer of dead skin cells, while vacuum suction simultaneously lifts impurities. The result is a brighter, smoother, more refined complexion — often in just one session.
                    </p>

                    <div class="space-y-4">
                        <div class="glass-panel p-5 rounded-2xl border border-brand/5 shadow-sm flex gap-4 items-start">
                            <i class="fas fa-gem text-accent text-xl mt-1"></i>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-base mb-1">Diamond-Tip Precision</h4>
                                <p class="text-xs text-brand-muted font-light">We use medical-grade diamond tips — not crystals — for cleaner, more controlled, and more hygienic exfoliation.</p>
                            </div>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl border border-brand/5 shadow-sm flex gap-4 items-start">
                            <i class="fas fa-bolt text-accent text-xl mt-1"></i>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-base mb-1">Instant Results</h4>
                                <p class="text-xs text-brand-muted font-light">A 30-minute session delivers immediately smoother, brighter skin — perfect for the day of an event.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="https://images.pexels.com/photos/3997989/pexels-photo-3997989.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Microdermabrasion Treatment" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Microdermabrasion <i class="text-accent font-light">Options</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3735619/pexels-photo-3735619.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Express Microdermabrasion</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A quick 30-minute refresher to brighten dull skin and smooth texture before an event.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/4046718/pexels-photo-4046718.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Deluxe Microdermabrasion Facial</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A 60-minute treatment that pairs microdermabrasion with a customized mask and serum infusion.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Microdermabrasion + Infusion</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Combines mechanical exfoliation with deep serum penetration for amplified hydration and glow.</p>
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
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Is microdermabrasion safe for all skin types?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes. Microdermabrasion is safe and effective for all skin types and tones, with no risk of pigmentation changes.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How many sessions will I need?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">For best results, we recommend 4–6 sessions spaced 2–3 weeks apart, followed by monthly maintenance.</p>
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
