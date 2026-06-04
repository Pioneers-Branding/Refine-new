<?php
$pageCategory = "Specialty";
$pageTitle = "Cosmetic <i class='text-brand font-light'>Dermatology.</i>";
$pageDescription = "Enhance your natural beauty with advanced, non-surgical cosmetic dermatology treatments in Kampala and Juba.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="font-display text-3xl text-brand-deeper mb-6">Artistry Meets <i class="text-accent font-light">Science</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                <!-- [PLACEHOLDER START: Replace with live text] -->
                Cosmetic dermatology focuses on the aesthetic enhancement of your skin, utilizing non-surgical, minimally invasive procedures. Our goal at Refine Skin & Body Clinic is to refresh and harmonize your features while maintaining complete naturality. From addressing fine lines to restoring lost facial volume, our expert team employs the world's most advanced techniques to help you look and feel your absolute best.
                <!-- [PLACEHOLDER END] -->
            </p>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text">
                <h3 class="font-display text-3xl text-brand-deeper">Our <i class="text-accent font-light">Treatments</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                
                <!-- Treatment 1 -->
                <a href="injectables-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Neuromodulators" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Anti-Wrinkle Injections</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Smooth fine lines and prevent dynamic wrinkles using FDA-approved neuromodulators.</p>
                </a>

                <!-- Treatment 2 -->
                <a href="injectables-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5452293/pexels-photo-5452293.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Dermal Fillers" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Dermal Fillers</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Restore lost volume, contour the jawline, and enhance lip fullness with premium HA fillers.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="skin-and-body-rejuvenation-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5327584/pexels-photo-5327584.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Chemical Peels" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Medical Grade Peels</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Resurface the skin, treat hyperpigmentation, and improve overall texture and tone.</p>
                </a>

                <!-- Treatment 4 -->
                <a href="skin-tightening" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/5215025/pexels-photo-5215025.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Microneedling" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">RF Microneedling</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Stimulate collagen production and tighten lax skin using advanced radiofrequency technology.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-white border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            
            <div class="space-y-4">
                <!-- [PLACEHOLDER START: Replace with live FAQs] -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Are cosmetic dermatology procedures painful?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Most procedures involve minimal discomfort. We utilize premium topical numbing creams and advanced techniques to ensure a comfortable experience.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How long is the downtime?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Downtime varies by treatment. Injectables typically have zero to 24 hours of downtime, while deeper peels or lasers may require a few days of social downtime.</p>
                    </div>
                </div>
                <!-- [PLACEHOLDER END] -->
            </div>
        </div>
    </section>
    
    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.height = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    content.style.height = content.scrollHeight + 'px';
                }
            });
        });
    </script>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
