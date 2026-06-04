<?php
$pageCategory = "Skin Rejuvenation";
$pageTitle = "LED Light <i class='text-brand font-light'>Therapy.</i>";
$pageDescription = "Harness the healing power of light. LED therapy is a painless, non-invasive treatment that boosts collagen, calms inflammation, and fights acne.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="font-display text-3xl text-brand-deeper mb-6">Healing Power of <i class="text-accent font-light">Light.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                LED Light Therapy uses specific wavelengths of light to penetrate the skin at varying depths, triggering natural cellular processes. Different colors target different concerns — from blue light that kills acne bacteria to red light that stimulates collagen and accelerates healing.
            </p>
        </div>
    </section>

    <!-- Wavelength Grid -->
    <section class="py-16 lg:py-24 bg-surface-warm border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Light <i class="text-accent font-light">Wavelengths</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 gs-stagger-bento">
                <div class="glass-panel p-6 rounded-3xl bg-white border border-brand/5 shadow-sm text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-circle text-blue-500 text-2xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Blue Light (415nm)</h4>
                    <p class="text-xs text-brand-muted font-light">Kills P. acnes bacteria, treats active breakouts and prevents future flare-ups.</p>
                </div>
                <div class="glass-panel p-6 rounded-3xl bg-white border border-brand/5 shadow-sm text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-red-100 flex items-center justify-center">
                        <i class="fas fa-circle text-red-500 text-2xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Red Light (633nm)</h4>
                    <p class="text-xs text-brand-muted font-light">Boosts collagen and elastin production, reduces fine lines and wrinkles.</p>
                </div>
                <div class="glass-panel p-6 rounded-3xl bg-white border border-brand/5 shadow-sm text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-yellow-100 flex items-center justify-center">
                        <i class="fas fa-circle text-yellow-500 text-2xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Yellow Light (590nm)</h4>
                    <p class="text-xs text-brand-muted font-light">Calms redness, reduces inflammation, and soothes sensitive skin conditions.</p>
                </div>
                <div class="glass-panel p-6 rounded-3xl bg-white border border-brand/5 shadow-sm text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-circle text-purple-500 text-2xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Near-Infrared (830nm)</h4>
                    <p class="text-xs text-brand-muted font-light">Penetrates deepest to accelerate healing, reduce deep inflammation, and aid recovery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text">
                <h3 class="font-display text-3xl text-brand-deeper">LED Therapy <i class="text-accent font-light">Protocols</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="acne-treatment-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/3997989/pexels-photo-3997989.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Acne-Clearing LED</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Blue and red light combination to clear active acne and calm post-acne inflammation.</p>
                </a>

                <a href="anti-aging-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/3735619/pexels-photo-3735619.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Anti-Aging LED</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Red and near-infrared light to stimulate collagen and reduce the visible signs of aging.</p>
                </a>

                <a href="rosacea-treatment-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/4046718/pexels-photo-4046718.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Calming LED for Rosacea</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Yellow and red light to reduce facial redness, flushing, and reactive sensitivity.</p>
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
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Is LED therapy safe?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes. LED therapy is FDA-approved, painless, and has no downtime. It is safe for all skin types, including during pregnancy.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How many sessions do I need?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">A typical course is 8–12 sessions over 4–6 weeks, followed by periodic maintenance sessions.</p>
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
