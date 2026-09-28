<?php
$pageCategory = "Blog & Content";
$pageTitle = "Video <i class='text-brand font-light'>Library.</i>";
$pageDescription = "Procedure walkthroughs, doctor explainers, clinic tours and skincare tips — all filmed inside Refine Skin & Body Clinic in Kampala.";
$metaTitle = "Video Library | Treatment Videos & Clinic Tours | Refine Skin & Body Clinic";
$metaDescription = "Watch real treatment videos from Refine Skin & Body Clinic Kampala: Botox, dermal fillers, fat freezing, hair transplant, IV therapy, HydraFacial, laser hair removal, psoriasis care and clinic tours.";
$canonicalUrl = "https://refineskinandbody.com/videos";

require_once __DIR__ . '/includes/gumlet-video.php';

// Library data — every clip is delivered through Gumlet when mapped.
$videoLibrary = [
    'Injectables' => [
        ['src' => 'botox-dr-chirag', 'title' => 'Botox by Dr. Chirag Kotecha', 'desc' => 'How Botox works, who it suits and what to expect — a preview of the full explainer.', 'tag' => 'Doctor Explainer', 'preview' => true, 'link' => '/botox'],
        ['src' => 'botox-treatment-session', 'title' => 'Live Botox Treatment Session', 'desc' => 'An uncut Botox session filmed in our Kabalagala treatment room.', 'tag' => 'Live Procedure', 'link' => '/botox'],
        ['src' => 'fillers-treatment-session', 'title' => 'Dermal Filler Treatment Session', 'desc' => 'Assessment, marking and injection technique for temple and mid-face fillers.', 'tag' => 'Live Procedure', 'link' => '/dermal-fillers'],
        ['src' => 'fillers-clip-2', 'title' => 'Temple Hollow Filler', 'desc' => 'Restoring volume to the temples for a softer contour.', 'tag' => 'Procedure', 'link' => '/dermal-fillers'],
    ],
    'Skin & Facials' => [
        ['src' => 'cleopatra-hydrafacial-explained', 'title' => 'Cleopatra HydraFacial Explained', 'desc' => 'What makes our signature Cleopatra treatment different.', 'tag' => 'Explainer', 'link' => '/hydrafacial'],
        ['src' => 'cleopatra-hydrafacial-treatment', 'title' => 'Cleopatra HydraFacial Full Session', 'desc' => 'Preview of a complete Cleopatra HydraFacial session.', 'tag' => 'Live Procedure', 'preview' => true, 'link' => '/hydrafacial'],
        ['src' => 'microneedling-serums-session', 'title' => 'Microneedling & Serum Infusion', 'desc' => 'Preview of a microneedling session with medical-grade serums.', 'tag' => 'Live Procedure', 'preview' => true, 'link' => '/rf-microneedling'],
        ['src' => 'psoriasis', 'title' => 'Psoriasis: Causes & Treatment', 'desc' => 'A dermatologist-led explainer on psoriasis and modern treatment options.', 'tag' => 'Doctor Explainer', 'link' => '/psoriasis'],
        ['src' => 'laser-hair-removal-underarms', 'title' => 'Underarm Laser Hair Removal', 'desc' => 'A full underarm session using settings tuned for darker skin tones.', 'tag' => 'Live Procedure', 'link' => '/laser-hair-removal'],
    ],
    'Hair & Scalp' => [
        ['src' => 'hair-transplant', 'title' => 'Hair Transplant at Refine', 'desc' => 'An overview of the FUE hair transplant procedure at our Kampala clinic.', 'tag' => 'Procedure', 'link' => '/hair-transplant'],
        ['src' => 'hair-transplant-hair-loss', 'title' => 'Hair Loss & Transplant Consultation', 'desc' => 'Preview of our in-depth hair-loss consultation walkthrough.', 'tag' => 'Consultation', 'preview' => true, 'link' => '/hair-loss'],
        ['src' => 'alopecia-awareness', 'title' => 'Alopecia Awareness Month', 'desc' => 'Understanding alopecia areata and how our dermatologists treat it.', 'tag' => 'Awareness', 'link' => '/alopecia-areata'],
        ['src' => 'hydrafacial-keravive', 'title' => 'HydraFacial Keravive Scalp Treatment', 'desc' => 'HydraFacial technology for the scalp: cleanse, stimulate and nourish.', 'tag' => 'Scalp Therapy', 'link' => '/hydrafacial-keravive'],
    ],
    'Body & Wellness' => [
        ['src' => 'fat-freezing-explained', 'title' => 'How Fat Freezing Works', 'desc' => 'Cryolipolysis explained: areas treated and realistic timelines.', 'tag' => 'Explainer', 'link' => '/cryolipolysis'],
        ['src' => 'fat-freezing-procedure', 'title' => 'Fat Freezing Treatment Procedure', 'desc' => 'Step-by-step footage of a live fat-freezing session.', 'tag' => 'Live Procedure', 'link' => '/cryolipolysis'],
        ['src' => 'iv-drip-therapy', 'title' => 'IV Drip Therapy at Refine', 'desc' => 'What happens during an IV drip session and who it suits.', 'tag' => 'Explainer', 'link' => '/iv-therapy'],
        ['src' => 'iv-drips', 'title' => 'Our IV Drip Menu', 'desc' => 'A quick tour of the drips we offer.', 'tag' => 'Overview', 'link' => '/refine-iv-lounge'],
    ],
    'Skincare Tips' => [
        ['src' => 'daily-skincare-routine', 'title' => 'Your Daily Skincare Routine', 'desc' => 'A simple morning-and-evening routine our team recommends for Ugandan skin.', 'tag' => 'Skincare Tips', 'link' => '/blog/daily-skincare-routine-what-every-client-should-know'],
        ['src' => 'skincare-what-clients-should-know', 'title' => 'What Every Client Should Know About Skincare', 'desc' => 'The most common skincare mistakes we see in clinic, and how to avoid them.', 'tag' => 'Skincare Tips', 'link' => '/blog/daily-skincare-routine-what-every-client-should-know'],
    ],
    'Our Clinics' => [
        ['src' => 'kabalagala-branch-tour', 'title' => 'Kabalagala Branch Tour', 'desc' => 'A guided walkthrough of our flagship clinic at Palm Village Mall.', 'tag' => 'Clinic Tour', 'link' => '/skin-clinic-in-kabalagala'],
        ['src' => 'bukoto-branch-tour', 'title' => 'Bukoto Branch Premises', 'desc' => 'Our clinic inside UMC Victoria Hospital, Bukoto.', 'tag' => 'Clinic Tour', 'link' => '/skin-clinic-in-bukoto'],
        ['src' => 'september-offers-announcement', 'title' => 'September Offers Announcement', 'desc' => 'This month\'s special offers at Refine.', 'tag' => 'Offers', 'link' => '/offers'],
    ],
];
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 lg:py-20 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="text-section font-display text-brand-deeper mb-6">See It. Learn It. <i class="text-accent font-light">Decide Confidently.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                Every video below was filmed inside Refine Skin &amp; Body Clinic with our own doctors, nurses and patients. Watch how a treatment is performed, hear the team explain each step, and tour our branches before you book.
            </p>
        </div>
    </section>

    <!-- Category jump links -->
    <section class="py-6 bg-surface-warm border-b border-brand/5 sticky top-20 z-30 backdrop-blur-md bg-surface-warm/90">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 flex flex-wrap items-center justify-center gap-2 md:gap-3">
            <?php foreach (array_keys($videoLibrary) as $cat): ?>
                <a href="#cat-<?php echo strtolower(preg_replace('/[^a-z0-9]+/i', '-', $cat)); ?>" class="px-4 py-2 rounded-full border border-brand/15 bg-white text-brand-deeper text-xs md:text-sm font-semibold hover:bg-brand hover:text-white hover:border-brand transition-colors"><?php echo htmlspecialchars($cat); ?></a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php $catIndex = 0; foreach ($videoLibrary as $cat => $clips): $catIndex++; $catId = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $cat)); ?>
    <section id="cat-<?php echo $catId; ?>" class="py-16 lg:py-20 <?php echo $catIndex % 2 ? 'bg-white' : 'bg-surface-warm'; ?> scroll-mt-40">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10 gs-reveal-text">
                <div>
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-3 font-semibold"><?php echo count($clips); ?> video<?php echo count($clips) === 1 ? '' : 's'; ?></span>
                    <h3 class="font-display text-3xl lg:text-4xl text-brand-deeper"><?php echo htmlspecialchars($cat); ?></h3>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 gs-stagger-bento">
                <?php foreach ($clips as $tv):
                    $local = '/assets/videos/' . $tv['src'] . '.mp4';
                    $src = gumlet_video_embed($tv['src'], $local);
                    $poster = gumlet_video_thumbnail($tv['src'], '/assets/videos/posters/' . $tv['src'] . '.jpg');
                ?>
                <div class="bento-item bg-white rounded-3xl border border-brand/10 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 overflow-hidden flex flex-col">
                    <div class="tv-card relative aspect-[9/16] overflow-hidden bg-brand-deeper cursor-pointer group"
                         data-video="<?php echo htmlspecialchars($src); ?>" data-title="<?php echo htmlspecialchars($tv['title']); ?>" data-desc="<?php echo htmlspecialchars($tv['desc']); ?>" role="button" tabindex="0" aria-label="Play video: <?php echo htmlspecialchars($tv['title']); ?>">
                        <img src="<?php echo $poster; ?>" alt="<?php echo htmlspecialchars($tv['title']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" onerror="this.style.display='none'">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/90 via-brand-deeper/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20"><?php echo htmlspecialchars($tv['tag']); ?></span>
                        <?php if (!empty($tv['preview'])): ?><span class="absolute top-4 right-4 px-2.5 py-1 bg-accent/90 rounded-full text-[9px] uppercase tracking-widest text-brand-deeper font-bold">Preview</span><?php endif; ?>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/90 flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300"><i class="fas fa-play text-brand-deeper ml-1 text-lg"></i></div>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-5"><h4 class="font-heading font-semibold text-white text-base leading-snug drop-shadow"><?php echo htmlspecialchars($tv['title']); ?></h4></div>
                    </div>
                    <div class="p-5 flex flex-col flex-1">
                        <p class="text-sm text-brand-muted font-light leading-relaxed line-clamp-3 mb-4"><?php echo htmlspecialchars($tv['desc']); ?></p>
                        <a href="<?php echo $tv['link']; ?>" class="mt-auto text-xs font-semibold text-brand hover:text-accent transition-colors">About this treatment <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <?php
    // Reuse the shared modal + player script (renders only the modal because $treatmentVideos is empty)
    $treatmentVideos = [['src' => '__none__']];
    ob_start(); include 'includes/treatment-videos.php'; $tvHtml = ob_get_clean();
    // keep only the modal + script part
    $modalPos = strpos($tvHtml, '<!-- Self-hosted Video Modal -->');
    echo $modalPos !== false ? substr($tvHtml, $modalPos) : '';
    ?>

    <!-- ============================================
         VIDEO TESTIMONIALS & INSIGHTS (YouTube)
         ============================================ -->
    <?php include 'includes/video-testimonials.php'; ?>

    <!-- FAQ Block -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[800px] mx-auto px-6">
            <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            <div class="space-y-4">
                <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Are these real patients and real procedures?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes. Every clip was filmed at Refine Skin &amp; Body Clinic with the consent of the patients shown. Nothing is stock footage.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">What does the "Preview" badge mean?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Some sessions run for several minutes. On the website we show a 90-second preview; the complete version is available on our YouTube channel and on request at the clinic.</p>
                    </div>
                </div>
                <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
                    <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg">Can I request a video topic?</h4>
                        <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                    </div>
                    <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                        <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Absolutely. Message us on WhatsApp or Instagram with the treatment you would like to see and we will add it to our filming schedule.</p>
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

    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
