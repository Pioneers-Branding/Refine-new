<?php
$pageCategory = "Specialty Packages";
$pageTitle = "Bridal <i class='text-brand font-light'>Aesthetics.</i>";
$pageDescription = "Walk down the aisle with absolute confidence. Our curated bridal packages ensure your skin is flawless and glowing for your special day.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Timeline Graphic Section -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="text-center mb-16 gs-reveal-text">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Preparation</span>
                <h2 class="font-display text-4xl text-brand-deeper">Bridal <i class="text-accent font-light">Timeline.</i></h2>
                <p class="text-sm font-light text-brand-muted mt-4 max-w-xl mx-auto">Great skin isn't created overnight. For the most dramatic and stable results, we recommend beginning your bridal aesthetic journey 6 to 12 months prior to the wedding.</p>
            </div>
            
            <!-- Horizontal Timeline -->
            <div class="relative max-w-5xl mx-auto">
                <div class="absolute top-1/2 left-0 w-full h-px bg-brand/10 -translate-y-1/2 hidden md:block"></div>
                
                <div class="grid md:grid-cols-4 gap-8 relative z-10 gs-stagger-bento">
                    
                    <!-- 6-12 Months -->
                    <div class="glass-panel p-6 rounded-2xl bg-surface-warm border border-brand/5 text-center bento-item">
                        <div class="w-12 h-12 rounded-full bg-white border-2 border-brand/20 flex items-center justify-center text-brand font-display mx-auto mb-4 relative">
                            <span class="absolute -top-2 -right-2 w-4 h-4 bg-accent rounded-full"></span>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2">6-12 Months</h4>
                        <p class="text-xs text-brand-muted font-light">Start laser hair removal, treat severe acne/scarring, and begin medical-grade skincare.</p>
                    </div>

                    <!-- 3-6 Months -->
                    <div class="glass-panel p-6 rounded-2xl bg-surface-warm border border-brand/5 text-center bento-item">
                        <div class="w-12 h-12 rounded-full bg-white border-2 border-brand/20 flex items-center justify-center text-brand font-display mx-auto mb-4 relative">
                            <span class="absolute -top-2 -right-2 w-4 h-4 bg-accent rounded-full"></span>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2">3-6 Months</h4>
                        <p class="text-xs text-brand-muted font-light">First rounds of injectables (Botox/Fillers) to allow for adjustments. Begin series of chemical peels.</p>
                    </div>

                    <!-- 1-2 Months -->
                    <div class="glass-panel p-6 rounded-2xl bg-surface-warm border border-brand/5 text-center bento-item">
                        <div class="w-12 h-12 rounded-full bg-white border-2 border-brand/20 flex items-center justify-center text-brand font-display mx-auto mb-4 relative">
                            <span class="absolute -top-2 -right-2 w-4 h-4 bg-accent rounded-full"></span>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2">1-2 Months</h4>
                        <p class="text-xs text-brand-muted font-light">Final injectable touch-ups. Focus on deep hydration and superficial resurfacing.</p>
                    </div>

                    <!-- 1-2 Weeks -->
                    <div class="glass-panel p-6 rounded-2xl bg-surface-warm border border-brand/5 text-center bento-item">
                        <div class="w-12 h-12 rounded-full bg-brand flex items-center justify-center text-white font-display mx-auto mb-4 relative shadow-lg shadow-brand/30">
                            <i class="fas fa-heart text-accent"></i>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2">1-2 Weeks</h4>
                        <p class="text-xs text-brand-muted font-light">HydraFacial for that final glow, dermaplaning, and IV Vitamin drips for energy and brightness.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Packages Grid -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 items-start">
                
                <div class="lg:col-span-4 gs-reveal-text">
                    <h3 class="font-display text-4xl text-brand-deeper mb-6">Curated <i class="text-accent font-light">Packages.</i></h3>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        We have designed comprehensive packages that combine our most effective treatments to ensure you and your bridal party look stunning from every angle.
                    </p>
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] shadow-lg mb-8">
                        <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Bridal Glow" class="w-full h-full object-cover filter grayscale-[0.2]">
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-6 gs-stagger-bento">
                    
                    <!-- Package 1 -->
                    <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm bento-item flex flex-col md:flex-row gap-8 items-center justify-between group">
                        <div>
                            <span class="inline-block px-3 py-1 bg-brand/5 rounded-full text-[10px] uppercase tracking-widest text-brand font-semibold mb-3">The Essentials</span>
                            <h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-2">The Bridal Glow</h4>
                            <p class="text-sm text-brand-muted font-light mb-4 max-w-md">Perfect for the bride 2 months out. Focuses on deep exfoliation, hydration, and a flawless canvas for makeup.</p>
                            <ul class="space-y-1 text-xs font-semibold text-brand-deeper">
                                <li><i class="fas fa-check text-accent mr-2"></i> 2x HydraFacial MD</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> 1x Dermaplaning Session</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> 1x Skin Brightening IV Drip</li>
                            </ul>
                        </div>
                        <div class="text-center md:text-right shrink-0">
                            <a href="#" class="btn-magnetic btn-outline text-xs inline-flex items-center">
                                <span>Download Details (PDF)</span> <i class="far fa-file-pdf ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Package 2 -->
                    <div class="glass-panel-dark p-8 rounded-[32px] bg-brand-deeper border border-brand-deeper shadow-xl bento-item flex flex-col md:flex-row gap-8 items-center justify-between group relative overflow-hidden">
                        <div class="absolute -top-10 -right-10 text-accent/10 text-9xl transform rotate-12"><i class="fas fa-ring"></i></div>
                        <div class="relative z-10">
                            <span class="inline-block px-3 py-1 bg-accent rounded-full text-[10px] uppercase tracking-widest text-brand-deeper font-bold mb-3">Comprehensive</span>
                            <h4 class="font-heading font-semibold text-white text-2xl mb-2">The Ultimate Bride</h4>
                            <p class="text-sm text-white/70 font-light mb-4 max-w-md">Our signature 6-month transformational journey. Complete skin remodeling, structural refinement, and total wellness.</p>
                            <ul class="space-y-1 text-xs font-semibold text-white">
                                <li><i class="fas fa-check text-accent mr-2"></i> Custom Injectables Plan (Botox/Fillers)</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> 3x Chemical Peels or Laser Resurfacing</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> 3x HydraFacial MD</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> ZO Skin Health Bridal Regimen Kit</li>
                            </ul>
                        </div>
                        <div class="text-center md:text-right shrink-0 relative z-10">
                            <a href="#" class="btn-magnetic bg-white text-brand-deeper border-none text-xs inline-flex items-center">
                                <span>Download Details (PDF)</span> <i class="far fa-file-pdf ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Package 3 -->
                    <div class="glass-panel p-8 rounded-[32px] bg-white border border-brand/5 shadow-sm bento-item flex flex-col md:flex-row gap-8 items-center justify-between group">
                        <div>
                            <span class="inline-block px-3 py-1 bg-brand/5 rounded-full text-[10px] uppercase tracking-widest text-brand font-semibold mb-3">Group Package</span>
                            <h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-2">The Bridal Party</h4>
                            <p class="text-sm text-brand-muted font-light mb-4 max-w-md">Treat the mother-of-the-bride and your bridesmaids to a day of luxury 1-2 weeks before the wedding.</p>
                            <ul class="space-y-1 text-xs font-semibold text-brand-deeper">
                                <li><i class="fas fa-check text-accent mr-2"></i> Group HydraFacial Sessions (up to 5 people)</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> Group IV Wellness Drips</li>
                                <li><i class="fas fa-check text-accent mr-2"></i> Champagne & Refreshments in our VIP Suite</li>
                            </ul>
                        </div>
                        <div class="text-center md:text-right shrink-0">
                            <a href="#" class="btn-magnetic btn-outline text-xs inline-flex items-center">
                                <span>Download Details (PDF)</span> <i class="far fa-file-pdf ml-2"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
