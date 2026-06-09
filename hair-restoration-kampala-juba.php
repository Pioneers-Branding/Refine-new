<?php
$pageCategory = "Specialty";
$pageTitle = "Hair <i class='text-brand font-light'>Restoration.</i>";
$pageDescription = "Combat hair loss and thinning with our multi-modal approach, including PRP, targeted topicals, and surgical transplantation referrals.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="font-display text-3xl text-brand-deeper mb-6">Reclaim Your <i class="text-accent font-light">Confidence</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                <!-- [PLACEHOLDER START] -->
                Hair loss can be a complex condition driven by genetics, hormones, stress, or underlying medical issues. Our hair restoration hub takes a diagnostic-first approach. Before any treatment begins, our dermatologists conduct a thorough analysis of your scalp and hair health to pinpoint the exact cause of thinning or alopecia, ensuring we deploy the most effective, personalized strategy.
                <!-- [PLACEHOLDER END] -->
            </p>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails (Bento Grid) -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center">
                <h3 class="font-display text-3xl text-brand-deeper">Restoration <i class="text-accent font-light">Protocols</i></h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <!-- Treatment 1 -->
                <a href="prp-treatments-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/Refine-laser-hair-removal.webp" alt="PRP Hair" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">PRP for Hair Loss</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Injecting your own platelet-rich plasma into the scalp to awaken dormant follicles and increase hair shaft thickness.</p>
                </a>

                <!-- Treatment 2 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-prescription-bottle-alt text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Medical Management</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Prescription topicals, oral medications, and targeted nutritional supplements to halt shedding and support growth.</p>
                </a>

                <!-- Treatment 3 -->
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative flex items-center justify-center text-brand/20">
                        <i class="fas fa-user-md text-5xl group-hover:text-accent transition-colors"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Transplant Consultation</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">For advanced cases, we offer surgical assessments and referrals for FUE/FUT hair transplantation procedures.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-white border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            
            <div class="space-y-4">
                <!-- [PLACEHOLDER START] -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-surface-warm border border-brand/5">
                    <div class="p-6 flex justify-between items-center group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">How many PRP sessions are needed for hair growth?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">We typically recommend a loading phase of 3-4 sessions spaced one month apart, followed by maintenance sessions every 4-6 months.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-surface-warm border border-brand/5">
                    <div class="p-6 flex justify-between items-center group-hover:bg-brand/5 transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Can women suffer from male-pattern baldness?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes, Female Pattern Hair Loss (Androgenetic Alopecia) is very common and can be effectively managed with our medical protocols.</p>
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
