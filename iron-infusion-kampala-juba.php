<?php
$pageCategory = "Refine IV Lounge";
$pageTitle = "Iron <i class='text-brand font-light'>Infusion.</i>";
$pageDescription = "IV iron infusion for iron-deficiency anemia — a fast, effective way to restore iron levels when oral supplements aren't enough.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="font-display text-3xl text-brand-deeper mb-6">Restore Iron, <i class="text-accent font-light">Restore Energy.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                Iron deficiency can leave you exhausted, foggy, and short of breath. IV iron infusion delivers iron directly to your bloodstream for fast, effective correction of iron-deficiency anemia — often in a single session, with results you can feel within days.
            </p>
        </div>
    </section>

    <!-- Sub-Treatment Thumbnails -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text">
                <h3 class="font-display text-3xl text-brand-deeper">Iron Infusion <i class="text-accent font-light">Options</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3992656/pexels-photo-3992656.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Single Iron Infusion</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A single 30–60 minute session to rapidly correct iron deficiency.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3997989/pexels-photo-3997989.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Iron + B-Complex</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Add B12 and folate for red blood cell support and maximum energy restoration.</p>
                </a>

                <a href="myers-magic-iv-therapy-kampala-juba" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="https://images.pexels.com/photos/3992656/pexels-photo-3992656.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Iron + Wellness</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Pair your iron infusion with a Myers' drip for comprehensive rejuvenation.</p>
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
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Who needs an iron infusion?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Anyone with iron-deficiency anemia, especially those who can't tolerate oral iron, have heavy periods, or have conditions that cause iron loss.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">When will I feel the benefits?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Most patients feel a noticeable improvement in energy within 1–2 weeks, with full hemoglobin correction within 4–6 weeks.</p>
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
