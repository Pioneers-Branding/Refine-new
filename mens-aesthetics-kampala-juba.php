<?php
$pageCategory = "Specialty";
$pageTitle = "Men's <i class='text-brand font-light'>Aesthetics.</i>";
$pageDescription = "Tailored aesthetic treatments designed specifically for the male anatomy to define, restore, and rejuvenate while maintaining masculinity.";
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
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Modern Edge</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Masculine <i class="text-accent font-light">Refinement.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        The approach to male aesthetics requires a fundamentally different methodology than female treatments. Male skin is thicker, muscles are stronger, and the structural ideals of beauty differ significantly. Our specialized protocols for men focus on enhancing the strong structural framework of the male face—like a chiseled jawline and structured chin—while subtly addressing signs of fatigue and aging.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    <a href="book-appointment" class="btn-magnetic bg-brand-deeper text-white magnetic-target">
                        <span>Book a Consultation</span>
                    </a>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-[3/4] lg:h-[600px] order-1 lg:order-2">
                    <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Men's Aesthetics" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.5] contrast-125" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Grid -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Tailored <i class="text-accent font-light">Solutions</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="injectables-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-syringe text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Bro-Tox (Anti-Wrinkle)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Strategically dosed neuromodulators to soften deep forehead lines and crow's feet without freezing expression or altering brow shape.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="injectables-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-male text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Jawline & Chin Sculpting</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">High-density dermal fillers used to widen the jawline, project the chin, and create a highly structured, masculine profile.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="hair-restoration-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Hair Restoration (PRP)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Combat early signs of male pattern baldness and thinning crowns utilizing your body's own regenerative Platelet-Rich Plasma.</p>
                </a>
                
                <!-- Treatment 4 -->
                <a href="laser-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-cut text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Laser Hair Removal</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Permanent reduction of unwanted hair on the back, chest, or neck (to prevent razor burn and ingrown hairs).</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
