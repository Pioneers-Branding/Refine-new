<?php
$pageCategory = "Specialty";
$pageTitle = "Body <i class='text-brand font-light'>Contouring.</i>";
$pageDescription = "Sculpt, tone, and refine your physique with our non-surgical fat reduction and muscle-building technologies.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text order-2 lg:order-1">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Redefine Your Shape</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Targeted <i class="text-accent font-light">Results.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        Diet and exercise are the foundation of a healthy lifestyle, but they can't always target stubborn pockets of fat or isolated muscle laxity. Our body contouring suite utilizes state-of-the-art non-surgical technology to permanently destroy fat cells, tighten skin, and build muscle where you want it most—with zero downtime.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <div class="space-y-4">
                        <!-- Target Areas -->
                        <div class="glass-panel p-6 rounded-2xl bg-white border border-brand/5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent"><i class="fas fa-bullseye"></i></div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Abdomen & Flanks (Love Handles)</h4>
                        </div>
                        <div class="glass-panel p-6 rounded-2xl bg-white border border-brand/5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent"><i class="fas fa-bullseye"></i></div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Thighs, Knees & Calves</h4>
                        </div>
                        <div class="glass-panel p-6 rounded-2xl bg-white border border-brand/5 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent"><i class="fas fa-bullseye"></i></div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Submental Area (Double Chin)</h4>
                        </div>
                    </div>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[700px] order-1 lg:order-2">
                    <!-- Placeholder representing a body diagram/contouring photo -->
                    <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_mockup 4.webp" alt="Body Contouring" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Contouring <i class="text-accent font-light">Technologies</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_mockup 3 (1).webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Cryolipolysis (Fat Freezing)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Safely freeze and eliminate up to 25% of treated fat cells permanently without surgery or needles.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_mockup 4.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">HIFEM Muscle Toning</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">High-Intensity Focused Electromagnetic technology induces thousands of muscle contractions to build core strength and lift the buttocks.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_mockup 4.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Fat Dissolving Injections</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Targeted injections using deoxycholic acid to permanently destroy fat cells under the chin (double chin) or in small stubborn pockets.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
