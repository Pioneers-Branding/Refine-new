<?php
$pageCategory = "Wellness";
$pageTitle = "Skin & Body <i class='text-brand font-light'>Rejuvenation.</i>";
$pageDescription = "A holistic approach to restoring your natural glow and vitality. Combining medical aesthetics with internal wellness therapies.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Total Restoration</span>
                    <h2 class="font-display text-4xl lg:text-5xl text-brand-deeper mb-6">Complete <i class="text-accent font-light">Renewal.</i></h2>
                    
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-12">
                        <p>
                            <!-- [PLACEHOLDER START] -->
                            True rejuvenation goes beyond surface-level treatments. Our Skin & Body Rejuvenation protocols are designed to restore your vitality from the inside out. We combine advanced dermatological treatments to address external damage with holistic wellness therapies that optimize your internal health.
                        </p>
                        <p>
                            Whether you are recovering from a stressful period, dealing with dull, fatigued skin, or simply want to invest in your long-term well-being, our customized programs provide a 360-degree approach to feeling and looking revitalized.
                            <!-- [PLACEHOLDER END] -->
                        </p>
                    </div>

                    <div class="glass-panel p-8 rounded-3xl border border-brand/5 shadow-sm bg-surface-warm">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-4">The Synergy Effect</h4>
                        <p class="text-sm text-brand-muted font-light mb-0">By pairing topical resurfacing treatments (like chemical peels) with internal therapies (like Glutathione IV Drips), we exponentially increase cellular turnover and brightness, achieving results that standalone treatments cannot match.</p>
                    </div>
                </div>

                <!-- Lifestyle Imagery Grid -->
                <div class="grid grid-cols-2 gap-4 gs-reveal-img-group">
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] shadow-lg mt-12">
                        <img src="/assets/imagesfromsite/Laser%20Skin%20Rejuvenation-09.png" alt="Relaxation" class="w-full h-full object-cover filter grayscale-[0.2]">
                    </div>
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] shadow-lg">
                        <img src="/assets/imagesfromsite/Refine-skin-tightening.webp" alt="Rejuvenation" class="w-full h-full object-cover filter grayscale-[0.2]">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Rejuvenation <i class="text-accent font-light">Therapies</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative flex items-center justify-center">
                        <i class="fas fa-tint text-5xl text-brand/20 group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">IV Vitamin Therapy</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Directly deliver essential vitamins, minerals, and powerful antioxidants like Glutathione to boost immunity and brighten the skin.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/Laser%20Skin%20Rejuvenation-09.png" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">HydraFacial MD®</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A multi-step treatment that deeply cleanses, exfoliates, extracts, and hydrates the skin with super serums.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="prp-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/Laser Skin Rejuvenation-09.png" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Cellular Regeneration (PRP)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Utilize your body's own growth factors to naturally rejuvenate the skin on the face, neck, and décolletage.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
