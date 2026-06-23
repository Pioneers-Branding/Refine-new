<?php
$pageCategory = "Client Voices";
$pageTitle = "Patient <i class='text-brand font-light'>Reviews.</i>";
$pageDescription = "Read honest feedback and reviews from our verified clients about their journeys at Refine Skin & Body Clinic.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         GOOGLE RATING STRIP
         ============================================ -->
    <section class="py-12 bg-white border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="glass-panel p-8 rounded-[32px] bg-brand-deeper text-white border border-brand/5 shadow-xl relative overflow-hidden">
                <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full bg-accent/10 blur-2xl pointer-events-none"></div>
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center text-accent text-3xl">
                            <i class="fab fa-google"></i>
                        </div>
                        <div>
                            <h3 class="font-display text-2xl lg:text-3xl text-white">Google Rating Statistics</h3>
                            <p class="text-white/60 text-sm font-body font-light mt-1">Based on patient feedback across our branches in Kampala and Juba.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-8 text-center md:text-right">
                        <div class="border-r border-white/10 pr-8 hidden md:block">
                            <span class="block text-4xl font-heading font-bold text-accent">5.0</span>
                            <span class="text-xs text-white/50 uppercase tracking-widest">Average Stars</span>
                        </div>
                        <div class="border-r border-white/10 pr-8 hidden md:block">
                            <span class="block text-4xl font-heading font-bold text-white">150+</span>
                            <span class="text-xs text-white/50 uppercase tracking-widest">Verified Reviews</span>
                        </div>
                        <div>
                            <div class="flex gap-1 text-accent text-lg justify-center md:justify-end mb-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-xs font-semibold text-white/80 uppercase tracking-wider">100% Satisfaction Rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         REVIEWS GRID
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gs-stagger-bento">
                
                <!-- Review 1 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">Cosmetic Derm</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "This skin clinic exceeded my expectations! The staff was knowledgeable, friendly, and the treatments were highly effective. I've had multiple HydraFacials here and my skin has never looked so clear."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-brand-deeper flex items-center justify-center text-white font-display text-base">M</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Maria S.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">Injectables</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "Outstanding skin clinic! Exceptional staff, top-quality treatments, and remarkable results. I was very nervous about dermal fillers, but Dr. Chirag explained everything so clearly and the result is beautifully subtle."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-brand flex items-center justify-center text-white font-display text-base">S</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Sofia K.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">Acne Scars</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "Refine Clinic has completely transformed my skin. I struggled with acne scars for years, and the combination of CO2 laser and microneedling treatments made such a difference. A true gem in the industry!"
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-brand-deeper font-display text-base">J</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">James L.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">Weight Loss</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "The medical weight loss program here is world-class. From the nutritionist consultations to the continuous tracking, the team kept me motivated and healthy. I lost 22kg and my lifestyle has completely reset."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-brand-light flex items-center justify-center text-white font-display text-base">S</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Sarah A.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">IV Lounge</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "Loved the IV therapy lounge. The environment is so peaceful and clean, and the nurse who administered my Glutathione drip was incredibly professional and painless. I feel so energized and my skin has a fresh glow!"
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-brand-deeper flex items-center justify-center text-white font-display text-base">A</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Anna M.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex gap-1 text-accent text-sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand/5 text-[10px] uppercase tracking-widest text-brand font-semibold rounded-full">Hair Transplant</span>
                        </div>
                        <p class="font-body text-brand-muted text-base font-light leading-relaxed italic mb-8">
                            "Excellent clinic for hair transplants. Very professional clinical team led by Dr. Chirag. The aftercare support was outstanding and the recovery was much faster than I anticipated. The results look extremely natural."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand/5 pt-6">
                        <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-brand-deeper font-display text-base">D</div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">David O.</h4>
                                <i class="fas fa-check-circle text-accent text-[10px]" title="Verified Patient"></i>
                            </div>
                            <p class="text-xs text-brand-muted font-body font-light">Verified Client</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         WRITE A REVIEW CTA
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="absolute inset-0 bg-accent/5 pointer-events-none"></div>
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade relative z-10">
            <h2 class="text-section font-display mb-6">Share Your <i class="text-accent font-light">Experience.</i></h2>
            <p class="text-white/70 font-body text-lg font-light leading-relaxed max-w-2xl mx-auto mb-10">
                Have you recently completed a treatment or consultation at Refine Clinic? Your feedback helps us maintain our uncompromising standard of care, and guides others on their aesthetic journeys.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="https://maps.app.goo.gl/ajUH37p4J33PVfM59" target="_blank" class="btn-magnetic w-full sm:w-auto bg-accent text-brand-deeper border-none hover:bg-white hover:text-brand-deeper">
                    <span>Leave a Google Review</span>
                </a>
                <a href="book-appointment" class="btn-magnetic w-full sm:w-auto btn-outline border-white/20 text-white hover:bg-white hover:text-brand-deeper">
                    <span>Book Consultation</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
