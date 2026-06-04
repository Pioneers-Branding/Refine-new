<?php
$pageCategory = "Wellness";
$pageTitle = "Medical <i class='text-brand font-light'>Weight Loss.</i>";
$pageDescription = "Achieve sustainable weight loss with our doctor-supervised medical programs. Combining modern medicine, nutrition, and lifestyle modifications.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Transformation & Intro -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Sustainable Results</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">A Medical <i class="text-accent font-light">Approach.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        Losing weight and keeping it off is complex, often hindered by underlying metabolic issues or hormonal imbalances. Our Medical Weight Loss program is exclusively supervised by physicians and clinical nutritionists. We move beyond generic diets, offering a bespoke, evidence-based pathway that includes advanced diagnostics, prescription medications, and continuous support.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    <a href="book-appointment" class="btn-magnetic bg-brand-deeper text-white magnetic-target">
                        <span>Schedule Your Assessment</span>
                    </a>
                </div>
                
                <!-- Patient Transformation Photos (Slider/Grid concept) -->
                <div class="relative gs-reveal-img-group">
                    <div class="absolute inset-0 bg-accent/10 translate-x-4 translate-y-4 rounded-[40px]"></div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <div class="relative rounded-3xl overflow-hidden aspect-[3/4] shadow-lg">
                            <img src="https://images.pexels.com/photos/5215025/pexels-photo-5215025.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Before" class="w-full h-full object-cover filter grayscale-[0.8] brightness-75">
                            <span class="absolute bottom-4 left-4 bg-black/50 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Before</span>
                        </div>
                        <div class="relative rounded-3xl overflow-hidden aspect-[3/4] shadow-lg">
                            <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" alt="After" class="w-full h-full object-cover filter grayscale-[0.2]">
                            <span class="absolute bottom-4 right-4 bg-accent text-brand-deeper text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">After</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Programme Overview Infographic -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="mb-16 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">The Refine <i class="text-accent font-light">Programme</i></h3>
                <p class="text-sm font-light text-brand-muted mt-4 max-w-xl mx-auto">A structured 4-phase approach to achieving and maintaining your ideal weight.</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8 gs-stagger-bento relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-brand/5 z-0"></div>

                <!-- Phase 1 -->
                <div class="relative z-10 text-center bento-item group">
                    <div class="w-24 h-24 mx-auto rounded-full bg-white border-4 border-surface-warm flex items-center justify-center shadow-lg mb-6 group-hover:border-accent transition-colors duration-300">
                        <i class="fas fa-vial text-2xl text-brand"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">1. Diagnostics</h4>
                    <p class="text-sm text-brand-muted font-light px-4">Comprehensive blood panels to identify hormonal imbalances, insulin resistance, or thyroid issues.</p>
                </div>
                
                <!-- Phase 2 -->
                <div class="relative z-10 text-center bento-item group">
                    <div class="w-24 h-24 mx-auto rounded-full bg-white border-4 border-surface-warm flex items-center justify-center shadow-lg mb-6 group-hover:border-accent transition-colors duration-300">
                        <i class="fas fa-user-md text-2xl text-brand"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">2. Medical Plan</h4>
                    <p class="text-sm text-brand-muted font-light px-4">Prescription of approved weight loss medications (e.g., GLP-1 agonists) if clinically appropriate.</p>
                </div>

                <!-- Phase 3 -->
                <div class="relative z-10 text-center bento-item group">
                    <div class="w-24 h-24 mx-auto rounded-full bg-white border-4 border-surface-warm flex items-center justify-center shadow-lg mb-6 group-hover:border-accent transition-colors duration-300">
                        <i class="fas fa-apple-alt text-2xl text-brand"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">3. Nutrition</h4>
                    <p class="text-sm text-brand-muted font-light px-4">Customized meal plans and ongoing dietary coaching by our clinical nutritionist.</p>
                </div>

                <!-- Phase 4 -->
                <div class="relative z-10 text-center bento-item group">
                    <div class="w-24 h-24 mx-auto rounded-full bg-white border-4 border-surface-warm flex items-center justify-center shadow-lg mb-6 group-hover:border-accent transition-colors duration-300">
                        <i class="fas fa-dumbbell text-2xl text-brand"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">4. Optimization</h4>
                    <p class="text-sm text-brand-muted font-light px-4">Integrating Body Contouring technologies and IV Wellness drips to support fat metabolism and tone skin.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
