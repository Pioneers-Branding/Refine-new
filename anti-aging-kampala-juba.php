<?php
$pageCategory = "Anti-Aging";
$pageTitle = "Timeless <i class='text-brand font-light'>Beauty.</i>";
$pageDescription = "Turn back the clock with our comprehensive, multi-modality approach to anti-aging in Kampala and Juba. Age gracefully and naturally.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Expert Quote & Before/After Concept -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="absolute inset-0 bg-[url('https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <i class="fas fa-quote-left text-4xl text-accent mb-6 opacity-80"></i>
                    <h2 class="font-display text-3xl lg:text-4xl leading-tight mb-8">
                        <!-- [PLACEHOLDER START] -->
                        "Anti-aging isn't about looking like a different person; it is about looking like the most rested, vibrant, and confident version of yourself at any age. We don't freeze time—we soften its impact."
                        <!-- [PLACEHOLDER END] -->
                    </h2>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden bg-white">
                            <img src="https://refineskinandbody.com/images/Dr.%20Chirag%20Kotecha.webp" alt="Dr. Chirag Kotecha" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-sm">Dr. Chirag Kotecha</h4>
                            <p class="text-xs text-white/50 font-light">Lead Dermatologist</p>
                        </div>
                    </div>
                </div>

                <!-- Before/After Split Concept (Using two images) -->
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl aspect-[4/3] bg-surface-cool border border-white/10 gs-reveal-img-group">
                    <div class="absolute inset-0 flex">
                        <div class="w-1/2 h-full relative overflow-hidden border-r-2 border-accent">
                            <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" class="absolute inset-0 w-[200%] max-w-none h-full object-cover filter grayscale-[0.8] brightness-75">
                            <span class="absolute bottom-4 left-4 bg-black/50 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Before</span>
                        </div>
                        <div class="w-1/2 h-full relative overflow-hidden">
                            <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" class="absolute inset-0 right-0 w-[200%] max-w-none h-full object-cover -translate-x-1/2 filter grayscale-[0.2]">
                            <span class="absolute bottom-4 right-4 bg-accent text-brand-deeper text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">After</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Protocols</span>
                <h3 class="font-display text-3xl text-brand-deeper">Anti-Aging <i class="text-accent font-light">Treatments</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="injectables-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Liquid Facelift</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A bespoke combination of Botox and Dermal Fillers to restore facial volume and smooth wrinkles without surgery.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="laser-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Skin Resurfacing</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Utilizing the CO2 Fractional Laser to reverse sun damage, erase fine lines, and tighten crepey skin.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="prp-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215025/pexels-photo-5215025.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Biostimulators (Sculptra)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Injectable treatments that stimulate your body's own collagen production for long-lasting, natural rejuvenation.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
