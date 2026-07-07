<?php
$pageCategory = "Blog & Content";
$pageTitle = "Refine <i class='text-brand font-light'>Blog.</i>";
$pageDescription = "Expert articles, treatment guides, wellness tips, and the latest in aesthetic medicine — your go-to resource for informed beauty and wellness.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>


    <!-- Blog Posts Section -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            


            <!-- Blog Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gs-stagger-bento" id="blog-grid">
                
                <!-- Card 1 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="skin">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">Skin & Dermatology</span>
                        <img src="/assets/imagesfromsite/breadcrumbsgall.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">The Ultimate Guide to Chemical Peels: What to Expect</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">Discover how chemical peels can transform your skin texture, reduce hyperpigmentation, and give you that radiant glow you've always wanted.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. Chirag</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Oct 12, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>5 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="weight-loss">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">Weight Loss</span>
                        <img src="/assets/imagesfromsite/bg-02.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">Semaglutide vs Allurion Balloon: Which is Right For You?</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">A comprehensive comparison of the top medical weight loss solutions available today, helping you make the best choice for your journey.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. Henry</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Sep 28, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>8 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="hormones">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">Hormones</span>
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_dermatology01.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">Navigating Menopause with Bio-Identical Hormones</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">Understand how BHRT can safely alleviate menopause symptoms and improve your overall quality of life and vitality.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. Vicky</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Sep 15, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>6 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="hair">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">Hair & Scalp</span>
                        <img src="/assets/imagesfromsite/bg-01.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">PRP vs Hair Transplant: What Works Best?</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">Explore the differences between Platelet-Rich Plasma therapy and surgical hair transplants for effective hair restoration.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. Chirag</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Aug 22, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>7 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="body-contouring">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">Body Contouring</span>
                        <img src="/assets/imagesfromsite/services/breadcrumbsAll.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">Is Vaser Lipo Better Than Traditional Liposuction?</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">Learn about the advanced technology behind Vaser Liposuction, its recovery times, and why it might be the superior choice for body sculpting.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. William</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Aug 05, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>9 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 6 -->
                <a href="#" class="blog-card group block glass-panel rounded-3xl bg-white border border-brand/5 hover:border-accent/30 hover:shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 flex flex-col h-full overflow-hidden" data-category="iv-therapy">
                    <div class="relative aspect-[4/3] overflow-hidden bg-surface-cool">
                        <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-brand-deeper text-[10px] font-bold tracking-widest uppercase shadow-sm">IV Therapy</span>
                        <img src="/assets/imagesfromsite/bg-02.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors line-clamp-2">The Magic of NAD+ IV Therapy for Anti-Aging</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-6 flex-1 line-clamp-3">Discover how NAD+ infusions can boost your cellular energy, improve mental clarity, and provide powerful anti-aging benefits.</p>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-brand/5 mt-auto">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-brand/5 flex items-center justify-center text-brand-deeper">
                                    <i class="far fa-user text-[10px]"></i>
                                </div>
                                <span class="text-xs font-medium text-brand-deeper">Dr. Vicky</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-calendar"></i>
                                    <span>Jul 18, 2023</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-brand-muted text-[11px] font-medium tracking-wide">
                                    <i class="far fa-clock"></i>
                                    <span>4 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            


        </div>
    </section>

    <!-- FAQ Block -->
  <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
    <div class="max-w-[800px] mx-auto px-6">
      <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
      <div class="space-y-4">
        <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
          <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
            <h4 class="font-heading font-semibold text-brand-deeper text-lg">Who writes your blog articles?</h4>
            <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
          </div>
          <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
            <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">All articles are written or reviewed by our medical team — including board-certified doctors, nurses, and certified nutritionists.</p>
          </div>
        </div>
        <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
          <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
            <h4 class="font-heading font-semibold text-brand-deeper text-lg">How often is the blog updated?</h4>
            <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
          </div>
          <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
            <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">We publish 2–3 new articles every week covering treatments, wellness topics, and the latest research.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <script>
        // FAQ Toggle
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
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
