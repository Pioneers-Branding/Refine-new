<?php
$pageCategory = "Medical Dermatology";
$pageTitle = "Acne <i class='text-brand font-light'>Treatment.</i>";
$pageDescription = "Medical-grade acne treatments that clear active breakouts, fade scars, and restore confidence for every skin type and severity.";
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
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Clear Skin, <i class="text-accent font-light">Restored.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Whether you are dealing with stubborn hormonal breakouts, cystic acne, or post-acne scarring, our dermatologists design a multi-modal plan tailored to your skin. We combine clinical extractions, prescription therapy, chemical peels, and laser technology to clear active acne and prevent future flare-ups.
                    </p>

                    <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4 border-b border-brand/10 pb-2">Acne We Treat</h3>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-3 font-body text-brand-muted text-sm font-light">
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Hormonal Acne</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Cystic & Nodular Acne</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Comedonal Acne</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Teen & Adult Acne</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Post-Inflammatory Hyperpigmentation</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Acne Scarring (All Types)</li>
                    </ul>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="/assets/imagesfromsite/Sclerotherapy-Treatment.webp" alt="Acne Treatment" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Treatment <i class="text-accent font-light">Options</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="chemical-peel-treatment-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/services/acne-01.jpg" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Acne Chemical Peels</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Salicylic and mandelic acid peels deeply unclog pores, reduce inflammation, and brighten post-acne marks.</p>
                </a>

                <a href="laser-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/Acne.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Laser Acne Therapy</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Blue-light and laser treatments that destroy acne-causing bacteria and reduce active inflammation.</p>
                </a>

                <a href="co2-laser-scar-removal-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/services/acne-01.jpg" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Acne Scar Revision</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">CO2 laser resurfacing, subcision, and dermal fillers to remodel atrophic and hypertrophic scars.</p>
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
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How long until my acne clears?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Most patients see a significant reduction in active acne within 6–8 weeks of starting treatment, with continued improvement over 3–6 months.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Is acne treatment safe for dark skin?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Absolutely. We tailor our treatments to Fitzpatrick types III–VI, choosing protocols that minimize the risk of post-inflammatory hyperpigmentation.</p>
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
