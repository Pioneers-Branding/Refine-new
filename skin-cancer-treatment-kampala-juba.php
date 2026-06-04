<?php
$pageCategory = "Medical Dermatology";
$pageTitle = "Skin Cancer <i class='text-brand font-light'>Treatment.</i>";
$pageDescription = "Early detection and expert treatment of all forms of skin cancer, from mole checks to Mohs surgery, with our board-certified dermatologists.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction & Conditions List -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="gs-reveal-text">
                    <h2 class="font-display text-4xl text-brand-deeper mb-6">Early Detection. <i class="text-accent font-light">Expert Care.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Skin cancer is the most common form of cancer globally — but with early detection, it is also among the most treatable. Our dermatology team uses advanced dermoscopy, full-body mole mapping, and biopsy services to identify and treat suspicious lesions before they progress.
                    </p>

                    <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4 border-b border-brand/10 pb-2">Cancers We Diagnose & Treat</h3>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-3 font-body text-brand-muted text-sm font-light">
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Basal Cell Carcinoma</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Squamous Cell Carcinoma</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Melanoma</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Actinic Keratosis</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Dysplastic Nevi</li>
                        <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Full-Body Mole Mapping</li>
                    </ul>
                </div>

                <div class="relative rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group aspect-square lg:aspect-auto lg:h-[600px]">
                    <img src="https://images.pexels.com/photos/4173239/pexels-photo-4173239.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Skin Cancer Treatment" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2]" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Diagnostic & <i class="text-accent font-light">Treatment Options</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/3997989/pexels-photo-3997989.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Dermoscopy & Mole Mapping</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">High-resolution digital dermoscopy for early detection of atypical moles and melanoma.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/4046718/pexels-photo-4046718.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Surgical Excision</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Complete removal of malignant lesions with clear margins, including Mohs micrographic surgery.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-surface-warm border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-white relative">
                        <img src="https://images.pexels.com/photos/3735619/pexels-photo-3735619.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Cryotherapy & Topicals</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Non-invasive treatment of precancerous lesions and superficial skin cancers.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            <div class="space-y-4">
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How often should I get a skin check?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Adults should have a full-body skin examination at least once a year. Higher-risk patients may need more frequent checks.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">What are the ABCDE warning signs?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300 bg-white">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">A for Asymmetry, B for Border irregularity, C for Color variation, D for Diameter over 6mm, E for Evolution. If you notice any of these, book a consultation immediately.</p>
                    </div>
                </div>
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
