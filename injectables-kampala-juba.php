<?php
$pageCategory = "Specialty";
$pageTitle = "Aesthetic <i class='text-brand font-light'>Injectables.</i>";
$pageDescription = "Restore volume, smooth wrinkles, and harmonize your facial features with our premium, FDA-approved injectable treatments.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Gold Standard</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Subtle <i class="text-accent font-light">Refinement.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        Our approach to injectables is rooted in anatomical precision and artistic subtlety. We do not chase trends; we focus on harmonizing your unique features and restoring youthfulness in a way that looks entirely natural. We exclusively use the world's leading, FDA-approved products to ensure your safety and longevity of results.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <a href="book-appointment" class="btn-magnetic bg-brand-deeper text-white magnetic-target">
                        <span>Book an Injectable Consult</span>
                    </a>
                </div>
                
                <!-- Product Brand Logos Grid -->
                <div class="glass-panel p-8 md:p-12 rounded-[40px] bg-white border border-brand/5 shadow-xl gs-reveal-fade flex flex-col justify-center items-center h-full min-h-[400px]">
                    <h4 class="font-heading font-semibold text-brand-muted uppercase tracking-[0.2em] text-xs mb-10 text-center">Premium Brands We Trust</h4>
                    <div class="grid grid-cols-2 gap-8 md:gap-12 w-full opacity-50 grayscale hover:grayscale-0 transition-all duration-500 items-center justify-items-center">
                        <!-- Placeholders for actual brand logos like Botox, Juvederm, Restylane, Sculptra -->
                        <div class="font-display text-3xl font-bold tracking-widest text-brand-deeper">BOTOX®</div>
                        <div class="font-display text-3xl font-bold tracking-wide text-brand-deeper">JUVÉDERM®</div>
                        <div class="font-display text-3xl font-bold italic text-brand-deeper">Restylane®</div>
                        <div class="font-display text-3xl font-bold uppercase text-brand-deeper">Sculptra®</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Injectable <i class="text-accent font-light">Portfolio</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_dermatology01.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Neuromodulators</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Botox® and Dysport® to relax facial muscles, preventing and softening dynamic wrinkles on the forehead and around the eyes.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="/assets/imagesfromsite/bg-02.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Dermal Fillers</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Hyaluronic Acid fillers to restore lost facial volume, contour the jawline/cheeks, and enhance lip hydration and shape.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-magic text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Biostimulators</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Sculptra® injections that work deep within the dermis to stimulate your body's own collagen production for gradual, long-lasting anti-aging.</p>
                </a>
                
                <!-- Treatment 4 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-leaf text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Skin Boosters</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Profhilo® and other hydrating injectables designed to remodel the skin from within, significantly improving texture and radiance.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
