<?php
$pageCategory = "Refine IV Lounge";
$pageTitle = "IV Therapy <i class='text-brand font-light'>Overview.</i>";
$pageDescription = "Intravenous nutrient therapy delivers 100% absorption of vitamins, minerals, and antioxidants directly into your bloodstream for instant wellness benefits.";
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
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">100% Absorption, <i class="text-accent font-light">Instant Results.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        IV therapy bypasses the digestive system to deliver nutrients directly into your bloodstream. This means 100% bioavailability, faster effects, and more powerful results than oral supplements. Whether you want more energy, glowing skin, faster recovery, or a stronger immune system — there's an IV drip for you.
                    </p>

                    <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4 border-b border-brand/10 pb-2">Popular For</h3>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-3 font-body text-brand-muted text-sm font-light">
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Energy & Vitality</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Skin & Hair Glow</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Immune Support</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Athletic Recovery</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Hangover Cure</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Stress & Burnout</li>
                    </ul>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="/assets/imagesfromsite/IV-Therapy_09.png" alt="IV Therapy" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">IV Therapy <i class="text-accent font-light">Menu</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="inner-beauty-iv-therapy-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/Sclerotherapy-Treatment.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Inner Beauty IV</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Skin, hair, and nail support with biotin, glutathione, and Vitamin C.</p>
                </a>

                <a href="myers-magic-iv-therapy-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/services/plasma-pen-therapy-02.png" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Myers' Magic IV</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">The original wellness cocktail for energy, immunity, and total body restoration.</p>
                </a>

                <a href="immunity-iv-therapy-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/services/plasma-pen-therapy-02.png" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Immunity Boost IV</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">High-dose Vitamin C, zinc, and immune-supporting nutrients.</p>
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
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Is IV therapy safe?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes — IV therapy is very safe when administered by trained nurses using sterile, medical-grade equipment. We perform a health screening before your first drip.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How often should I get an IV?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">For general wellness, we recommend 1–2 drips per month. For acute needs (jet lag, hangovers, illness), as often as needed.</p>
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
