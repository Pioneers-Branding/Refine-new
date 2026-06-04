<?php
$pageCategory = "Medical Solutions";
$pageTitle = "Anti-Migraine <i class='text-brand font-light'>Therapy.</i>";
$pageDescription = "Find relief from chronic migraines with our advanced, FDA-approved injectable treatments.";
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
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Clinical Relief</span>
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Take Back <i class="text-accent font-light">Control.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        Chronic migraines are debilitating and can severely impact your quality of life. When oral medications fail or cause unwanted side effects, targeted injectable therapy offers a proven, FDA-approved solution. By precisely injecting neuromodulators into specific nerve endpoints around the head and neck, we can prevent pain signals from reaching the brain, significantly reducing both the frequency and severity of migraine attacks.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <a href="book-appointment" class="btn-magnetic bg-brand-deeper text-white magnetic-target">
                        <span>Consult Our Specialists</span>
                    </a>
                </div>
                
                <!-- Infographic: Trigger Points -->
                <div class="glass-panel p-8 md:p-12 rounded-[40px] bg-white border border-brand/5 shadow-xl gs-reveal-img-group relative overflow-hidden">
                    <i class="fas fa-head-side-virus text-9xl absolute -bottom-10 -right-10 text-brand/5"></i>
                    <h3 class="font-display text-2xl text-brand-deeper mb-6 relative z-10">Common Trigger Zones</h3>
                    <ul class="space-y-6 relative z-10">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent shrink-0 mt-1">1</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Frontal (Forehead)</h4>
                                <p class="text-xs text-brand-muted font-light mt-1">Tension often begins above the eyebrows.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent shrink-0 mt-1">2</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Temporal (Temples)</h4>
                                <p class="text-xs text-brand-muted font-light mt-1">Throbbing pain on the sides of the head.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent shrink-0 mt-1">3</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Occipital (Back of Head)</h4>
                                <p class="text-xs text-brand-muted font-light mt-1">Pain radiating from the base of the skull and neck.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Grid -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Treatment <i class="text-accent font-light">Options</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 gs-stagger-bento max-w-4xl mx-auto">
                <!-- Treatment 1 -->
                <div class="glass-panel p-8 rounded-3xl bg-surface-warm border border-brand/5 shadow-sm bento-item">
                    <div class="w-12 h-12 rounded-full bg-brand/10 flex items-center justify-center text-brand mb-6 text-xl">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">Botox® for Migraines</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">A clinically proven protocol involving approximately 31 small injections into 7 specific muscle areas of the head and neck. Treatments are typically repeated every 12 weeks for maximum efficacy.</p>
                    <span class="inline-block px-3 py-1 bg-white rounded text-[10px] uppercase tracking-widest text-brand font-semibold shadow-sm">FDA Approved</span>
                </div>
                
                <!-- Treatment 2 -->
                <div class="glass-panel p-8 rounded-3xl bg-surface-warm border border-brand/5 shadow-sm bento-item">
                    <div class="w-12 h-12 rounded-full bg-brand/10 flex items-center justify-center text-brand mb-6 text-xl">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">IV Hydration Therapy</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">For acute migraine attacks, our specialized IV drips deliver instant hydration, magnesium, and anti-inflammatory medications directly into your bloodstream to abort the migraine rapidly.</p>
                    <span class="inline-block px-3 py-1 bg-white rounded text-[10px] uppercase tracking-widest text-brand font-semibold shadow-sm">Fast Relief</span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
