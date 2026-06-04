<?php
$pageCategory = "Specialty";
$pageTitle = "Medical <i class='text-brand font-light'>Dermatology.</i>";
$pageDescription = "Expert diagnosis and evidence-based treatments for all clinical skin conditions, ensuring your skin is as healthy as it is beautiful.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction & Conditions List -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="gs-reveal-text">
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Comprehensive <i class="text-accent font-light">Care.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        <!-- [PLACEHOLDER START] -->
                        Our board-certified dermatologists provide comprehensive care for a wide spectrum of clinical skin conditions. We believe that true beauty stems from a foundation of absolute skin health. By utilizing advanced diagnostics and evidence-based medical protocols, we treat the root cause of your concerns rather than just the symptoms.
                        <!-- [PLACEHOLDER END] -->
                    </p>
                    
                    <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4 border-b border-brand/10 pb-2">Conditions We Treat</h3>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-3 font-body text-brand-muted text-sm font-light">
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Severe Acne & Scarring</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Eczema & Dermatitis</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Psoriasis Management</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Rosacea & Redness</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Melasma & Pigmentation</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Mole Mapping & Checks</li>
                    </ul>
                </div>
                
                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Medical Dermatology" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Clinical <i class="text-accent font-light">Interventions</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white flex items-center justify-center text-brand/20">
                        <i class="fas fa-prescription-bottle-alt text-4xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Prescription Therapy</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Targeted oral and topical medications tailored to your specific dermatological diagnosis.</p>
                </a>
                
                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white flex items-center justify-center text-brand/20">
                        <i class="fas fa-microscope text-4xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Skin Biopsies</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Precise diagnostic sampling to accurately identify suspicious lesions or complex rashes.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white flex items-center justify-center text-brand/20">
                        <i class="fas fa-band-aid text-4xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Cryotherapy</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Liquid nitrogen treatments for the safe removal of warts, skin tags, and precancerous lesions.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            
            <div class="space-y-4">
                <!-- [PLACEHOLDER START] -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Do I need a referral to see a dermatologist?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">No, a referral is not required to book a consultation at our clinic. You can schedule an appointment directly.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How often should I get a mole check?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">We recommend an annual full-body skin exam for most patients, or more frequently if you have a personal or family history of skin cancer.</p>
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
