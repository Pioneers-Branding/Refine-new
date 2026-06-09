<?php
$pageCategory = "Specialty";
$pageTitle = "Skin <i class='text-brand font-light'>Tightening.</i>";
$pageDescription = "Restore firmness and elasticity. Non-surgical skin tightening treatments utilizing advanced Radiofrequency and Ultrasound technologies.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction & Machine Spotlight -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Science of Firmness</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Lift & <i class="text-accent font-light">Sculpt.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        As we age, the structural proteins that keep our skin firm—collagen and elastin—begin to break down, leading to laxity and sagging. Our non-surgical skin tightening protocols bypass the surface to heat the deep dermal layers, instantly contracting existing collagen fibers while kickstarting the production of new, healthy collagen.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <div class="glass-panel p-6 rounded-3xl border border-brand/5 shadow-sm bg-surface-warm">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-4">Technology Spotlight: BTL Exilis Ultra</h4>
                        <p class="text-sm text-brand-muted font-light mb-4">The only device to simultaneously combine radio frequency and ultrasound to tighten skin and address body concerns.</p>
                        <ul class="space-y-2 text-sm text-brand-deeper font-semibold">
                            <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Non-invasive with zero downtime</li>
                            <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Safe for all skin tones</li>
                            <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Treats face, neck, and body</li>
                        </ul>
                    </div>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="/assets/imagesfromsite/services/Skin Lightening with TatioActive-02.png" alt="Skin Tightening Treatment" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Targeted <i class="text-accent font-light">Solutions</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/services/Skin_Tightening_ser2.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">RF Microneedling</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Delivers radiofrequency energy deep into the dermis via gold-plated needles for dramatic tightening of the lower face and neck.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/Refine-skin-tightening.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Non-Surgical Eye Lift</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Utilizing advanced plasma or RF energy to tighten the delicate skin around the eyes, reducing hooding and crepey texture.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="body-contouring" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_mockup 4.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Body Skin Tightening</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Target post-pregnancy laxity on the abdomen or crepey skin on the knees and arms using targeted ultrasound therapy.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
