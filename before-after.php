<?php
$pageCategory = "The Results";
$pageTitle = "Before & <i class='text-brand font-light'>After.</i>";
$pageDescription = "Browse authentic, unretouched transformations and clinical outcomes across our range of treatments.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         INTRODUCTION & INTEGRITY
         ============================================ -->
    <section class="py-16 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="text-section font-display text-brand-deeper mb-6">Our Commitment to <i class="text-accent font-light">Real Results.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                We believe in transparency. All before-and-after photographs shown below feature real clients of Refine Skin & Body Clinic. These results represent clinical realities and have not been retouched or digitally modified. Individual outcomes vary based on anatomy and adherence to protocols.
            </p>
        </div>
    </section>

    <!-- ============================================
         BEFORE & AFTER GRID WITH FILTERS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative" id="before-after-section">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            
            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-16 gs-reveal-text">
                <button class="filter-btn px-6 py-2 rounded-full border-none bg-brand text-white text-sm font-semibold transition-colors shadow-md" data-filter="all">All Treatments</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="acne-scars">Acne & Scars</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="injectables">Injectables</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="body-contouring">Body Contouring</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="hair-restoration">Hair Restoration</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="skincare">Skincare</button>
            </div>

            <!-- Comparison Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="comparison-grid">
                
                <!-- Card 1: Acne Scars -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="acne-scars">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/acne_and_scars/Acne.webp" alt="Acne Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/acne_and_scars/Acne1.webp" alt="Acne After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Acne Clearing Protocol</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Complete clearance of active cystic acne and texture smoothing over a 3-month medical-grade skincare cycle.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 3 Sessions</span>
                        <span>Downtime: Minimal</span>
                    </div>
                </div>

                <!-- Card 2: Lip Volumization -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="injectables">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/injectables/Lip Volumization_.webp" alt="Lips Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/injectables/Lip Volumization_09.png" alt="Lips After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Lip Volumization</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Restored hydration, symmetry, and youthful volume using premium hyaluronic acid dermal fillers.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 1 Session</span>
                        <span>Downtime: 24–48 Hours</span>
                    </div>
                </div>

                <!-- Card 3: Body Contouring -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="body-contouring">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/body-contouring/BodyContouring.webp" alt="Body Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/body-contouring/BodyContouring1.webp" alt="Body After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Cryolipolysis (Fat Freezing)</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Targeted reduction of stubborn abdominal fat deposits using advanced fat-freezing technology.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 2 Sessions</span>
                        <span>Downtime: Zero</span>
                    </div>
                </div>

                <!-- Card 4: Hair Restoration -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="hair-restoration">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/hair-restoration/prp hair restoration_7_11zon.webp" alt="Hair Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/hair-restoration/prp-hair-restoration-09.png" alt="Hair After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">PRP Hair Restoration</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Regrowth and density improvement of thinning crown area using Platelet-Rich Plasma (PRP) therapy.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 4 Sessions</span>
                        <span>Downtime: Minimal</span>
                    </div>
                </div>

                <!-- Card 5: Skincare -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="skincare">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/skincare_general/chemical.webp" alt="Skin Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/skincare_general/chemical_09.png" alt="Skin After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Chemical Peel Rejuvenation</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Leveling of hyperpigmentation, melasma, and sun spots using a personalized peel series.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 3 Sessions</span>
                        <span>Downtime: 3–5 Days Peeling</span>
                    </div>
                </div>

                <!-- Card 6: Thread Lifting -->
                <div class="filter-item bg-white p-6 rounded-[32px] border border-brand/5 shadow-sm group hover:shadow-md transition-all flex flex-col justify-between" data-category="injectables">
                    <div>
                        <div class="grid grid-cols-2 gap-4 mb-6 relative overflow-hidden rounded-2xl">
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/injectables/threadlifts_13_11zon.webp" alt="Thread Lift Before" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-brand-deeper/70 text-[9px] uppercase tracking-widest text-white px-2.5 py-1 rounded backdrop-blur-xs font-semibold">Before</span>
                            </div>
                            <div class="relative aspect-[4/5] bg-surface-cool">
                                <img src="/assets/images/services/injectables/thread-lifting-09.png" alt="Thread Lift After" class="w-full h-full object-cover" loading="lazy">
                                <span class="absolute bottom-3 left-3 bg-accent/90 text-[9px] uppercase tracking-widest text-brand-deeper px-2.5 py-1 rounded backdrop-blur-xs font-semibold">After</span>
                            </div>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">PDO Thread Lifting</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6">Non-surgical jawline tightening and mid-face sagging lift using premium absorbable PDO threads.</p>
                    </div>
                    <div class="border-t border-brand/5 pt-4 flex justify-between items-center text-xs text-brand-muted">
                        <span>Sessions: 1 Session</span>
                        <span>Downtime: 3–5 Days</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         BOOKING CALL TO ACTION
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="absolute inset-0 bg-accent/5 pointer-events-none"></div>
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade relative z-10">
            <h2 class="text-section font-display mb-6">Begin Your Own <i class="text-accent font-light">Transformation.</i></h2>
            <p class="text-white/70 font-body text-lg font-light leading-relaxed max-w-2xl mx-auto mb-10">
                Schedule a private, comprehensive consultation with our team of board-certified specialists to design your custom treatment pathway.
            </p>
            <div class="flex justify-center">
                <a href="book-appointment" class="btn-magnetic bg-accent text-brand-deeper border-none hover:bg-white hover:text-brand-deeper">
                    <span>Schedule Consultation</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Filter JS -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.filter-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active styling from all buttons
                filterBtns.forEach(b => {
                    b.classList.remove('bg-brand', 'text-white', 'border-none', 'shadow-md');
                    b.classList.add('border', 'border-brand/20', 'text-brand');
                });
                
                // Add active styling to clicked button
                btn.classList.add('bg-brand', 'text-white', 'border-none', 'shadow-md');
                btn.classList.remove('border', 'border-brand/20', 'text-brand');

                const filter = btn.getAttribute('data-filter');

                items.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        // Smooth fade in
                        item.style.display = 'flex';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        // Smooth fade out
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });
    </script>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
