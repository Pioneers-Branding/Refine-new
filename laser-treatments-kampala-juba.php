<?php
$pageCategory = "Technology";
$pageTitle = "Advanced <i class='text-brand font-light'>Lasers.</i>";
$pageDescription = "Experience the power of our FDA-approved laser technology. We offer the most comprehensive suite of laser treatments in East Africa for all skin types.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Technology Specs & Intro -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Our Arsenal</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">State-of-the-Art <i class="text-accent font-light">Equipment.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        At Refine Skin & Body Clinic, we do not compromise on technology. Our clinic is equipped with a multi-million-dollar fleet of gold-standard, FDA-approved laser systems. This allows us to safely and effectively treat a wide variety of concerns, from unwanted hair and stubborn pigmentation to deep acne scarring and skin laxity, across all Fitzpatrick skin types.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <div class="space-y-6">
                        <!-- Machine Highlight -->
                        <div class="glass-panel p-6 rounded-2xl border border-brand/5 shadow-sm">
                            <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Candela GentleMax Pro®</h4>
                            <p class="text-xs text-brand-muted font-light mb-4">Dual wavelength (755nm Alexandrite & 1064nm Nd:YAG) system.</p>
                            <span class="inline-block px-3 py-1 bg-accent/10 text-accent rounded-full text-[10px] font-bold uppercase tracking-widest border border-accent/20">Hair Removal & Veins</span>
                        </div>
                        <!-- Machine Highlight -->
                        <div class="glass-panel p-6 rounded-2xl border border-brand/5 shadow-sm">
                            <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Alma Harmony XL Pro®</h4>
                            <p class="text-xs text-brand-muted font-light mb-4">Multi-application platform featuring ClearLift and IPL capabilities.</p>
                            <span class="inline-block px-3 py-1 bg-accent/10 text-accent rounded-full text-[10px] font-bold uppercase tracking-widest border border-accent/20">Pigmentation & Remodeling</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[700px]">
                    <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Advanced Laser Technology" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Laser <i class="text-accent font-light">Treatments</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Laser Hair Removal</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Permanent hair reduction utilizing our Nd:YAG laser, completely safe for dark skin tones.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">CO2 Fractional Resurfacing</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Aggressive remodeling for severe acne scarring, deep wrinkles, and textural irregularities.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215025/pexels-photo-5215025.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Laser Tattoo Removal</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Shatter ink particles safely and effectively with our high-powered Q-Switched technology.</p>
                </a>
                
                <!-- Treatment 4 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Vascular Lasers</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Target and eliminate spider veins, broken capillaries, and redness associated with rosacea.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
