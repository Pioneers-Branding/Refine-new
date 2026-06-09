<?php
$pageCategory = "Blog & Content";
$pageTitle = "Podcast & <i class='text-brand font-light'>Webinars.</i>";
$pageDescription = "Listen to expert interviews, deep-dive discussions, and live webinars on aesthetic medicine, wellness, hormones, and longevity.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="font-display text-3xl text-brand-deeper mb-6">Conversations on <i class="text-accent font-light">Wellness, Beauty & Longevity.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                The Refine Podcast features long-form interviews with our doctors, industry experts, and special guests — exploring the science, ethics, and art of aesthetic medicine and wellness. Plus, our live webinars give you direct access to ask questions and learn in real time.
            </p>
        </div>
    </section>

    <!-- Featured Episodes -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text">
                <h3 class="font-display text-3xl text-brand-deeper">Latest <i class="text-accent font-light">Episodes</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/services/breadcrumbsAll.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Episode 24 · 58 min</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">The Truth About Semaglutide</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Our medical director separates fact from fiction on GLP-1 weight loss medications.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/bg-01.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Episode 23 · 47 min</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Hormones & the Aging Woman</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A candid conversation about perimenopause, BHRT, and reclaiming midlife vitality.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_dermatology01.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Episode 22 · 65 min</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Skin Health From the Inside Out</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Why great skin starts in the gut — nutrition, IV therapy, and clinical skincare combined.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 bg-white border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            <div class="space-y-4">
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Where can I listen?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">The Refine Podcast is available on Apple Podcasts, Spotify, YouTube, and our website. New episodes drop bi-weekly.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Do you offer live webinars?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes — we host free monthly webinars where our doctors dive into specific topics and answer questions live. Subscribe to be notified.</p>
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
