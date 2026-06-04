<?php
$pageCategory = "Regenerative Medicine";
$pageTitle = "PRP <i class='text-brand font-light'>Therapy.</i>";
$pageDescription = "Harness the regenerative power of your own body with Platelet-Rich Plasma (PRP) treatments for skin rejuvenation and hair restoration.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- PRP Infographic / Process Section -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Process</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Liquid <i class="text-accent font-light">Gold.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10">
                        <!-- [PLACEHOLDER START] -->
                        Platelet-Rich Plasma (PRP) is a revolutionary regenerative treatment that utilizes your own blood's healing properties. By isolating the plasma rich in growth factors and reinjecting it into targeted areas, we stimulate cellular turnover, collagen production, and tissue regeneration. It is a 100% natural approach to anti-aging and hair restoration.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <!-- 3 Step Infographic -->
                    <div class="space-y-8 relative before:absolute before:inset-0 before:ml-[1.4rem] before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-brand/10">
                        <!-- Step 1 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-white bg-accent text-brand-deeper font-display text-xl shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 relative z-10">1</div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] glass-panel p-6 rounded-2xl border border-brand/5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Blood Draw</h4>
                                <p class="text-xs text-brand-muted font-light">A small sample of your blood is drawn, similar to a routine blood test.</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-white bg-accent text-brand-deeper font-display text-xl shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 relative z-10">2</div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] glass-panel p-6 rounded-2xl border border-brand/5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Centrifugation</h4>
                                <p class="text-xs text-brand-muted font-light">The blood is spun in a centrifuge to separate the golden platelet-rich plasma from the red blood cells.</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-white bg-accent text-brand-deeper font-display text-xl shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 relative z-10">3</div>
                            <div class="w-[calc(100%-4rem)] md:w-[calc(50%-3rem)] glass-panel p-6 rounded-2xl border border-brand/5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Reinjection</h4>
                                <p class="text-xs text-brand-muted font-light">The concentrated PRP is strategically injected or micro-needled back into the scalp or face.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[700px] mt-12 lg:mt-0">
                    <img src="https://images.pexels.com/photos/5215025/pexels-photo-5215025.jpeg?auto=compress&cs=tinysrgb&w=800" alt="PRP Process" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">PRP <i class="text-accent font-light">Applications</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Vampire Facial (PRP + Microneedling)</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Drive growth factors deep into the dermis to erase acne scars, shrink pores, and restore a youthful glow.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="hair-restoration-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">PRP for Hair Loss</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Inject PRP directly into the scalp to awaken dormant hair follicles, increase hair thickness, and combat thinning.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Under-Eye PRP</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A natural alternative to tear trough fillers to brighten dark circles and thicken the delicate under-eye skin.</p>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
