<?php
$pageCategory = "Scalp & Hair Health";
$pageTitle = "HydraFacial Keravive Scalp Treatment in Kampala";
$pageDescription = "The first HydraFacial for your scalp. Keravive cleanses clogged follicles, exfoliates build-up and infuses a peptide-rich growth complex — for a healthier scalp and fuller, thicker-looking hair.";
$metaTitle = "HydraFacial Keravive Scalp Treatment in Kampala, Uganda | Refine Clinic";
$metaDescription = "HydraFacial Keravive in Kampala at Refine Skin & Body Clinic: a 3-step scalp treatment that cleanses follicles, removes build-up and nourishes the scalp for fuller, healthier-looking hair. Book today.";
$canonicalUrl = "https://refineskinandbody.com/hydrafacial-keravive";
$metaKeywords = "HydraFacial Keravive Kampala, Keravive scalp treatment Uganda, scalp facial Kampala, hair thinning treatment Kampala, scalp detox Kampala, Keravive Refine Clinic";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- What is Keravive -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>

        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 xl:gap-24 items-center">
                <div class="gs-reveal-text">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.2em] uppercase mb-6 font-semibold border border-accent/20">
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                        HydraFacial For The Scalp
                    </div>
                    <h2 class="text-section font-display text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">HydraFacial Keravive?</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-6 max-w-xl">
                        Healthy hair starts with a healthy scalp. <strong>HydraFacial Keravive in Kampala</strong> brings the same patented Vortex technology used in our signature HydraFacial to the scalp, where product build-up, excess sebum and dead skin can suffocate follicles and contribute to thinning, dryness and poor hair quality.
                    </p>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10 max-w-xl">
                        In a single relaxing session, Keravive cleanses and exfoliates the scalp, extracts impurities from around each follicle, and infuses a proprietary <strong>Peptide Complex Solution</strong> of growth factors and skin proteins. The result is a nourished, hydrated scalp and hair that looks fuller, shinier and healthier. At <strong>Refine Skin &amp; Body Clinic</strong>, Keravive is offered on its own or as part of our hair-loss protocols alongside PRP and hair transplant.
                    </p>

                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[16/10] sm:aspect-[4/3] w-full max-w-xl lg:max-w-none mx-auto gs-reveal-img-group group border border-brand/5">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent z-10 opacity-60 group-hover:opacity-40 transition-opacity duration-700 pointer-events-none"></div>
                        <img src="/assets/videos/posters/hydrafacial-keravive.jpg" alt="HydraFacial Keravive scalp treatment at Refine Skin and Body Clinic Kampala" class="w-full h-full object-cover object-top gs-reveal-img group-hover:scale-105 transition-all duration-1000" loading="lazy">
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute left-8 top-10 bottom-10 w-px bg-gradient-to-b from-brand/5 via-accent/30 to-brand/5 hidden sm:block"></div>
                    <div class="space-y-8 relative z-10">
                        <h3 class="text-section font-display text-brand-deeper mb-10 pl-0 sm:pl-24">The <i class="text-accent font-light">3-Step Process</i></h3>

                        <?php
                        $steps = [
                            ['Cleanse & Exfoliate', 'Using HydraFacial Vortex technology, the scalp is gently cleansed and exfoliated to lift away dead skin, oil and product residue that clog follicles.'],
                            ['Stimulate & Nourish', 'The Keravive Peptide Complex Solution — a blend of growth factors and skin proteins — is infused to hydrate the scalp and support follicle health.'],
                            ['Extend & Maintain', 'You take home the Keravive Peptide Complex Spray to use daily for 30 days, extending the benefits between clinic sessions.'],
                            ['Review & Repeat', 'A course of three monthly sessions is typically recommended, with progress photos taken at each visit.'],
                        ];
                        foreach ($steps as $i => $s): ?>
                        <div class="relative flex items-start gap-8 group">
                            <div class="w-16 h-16 rounded-full bg-white shadow-[0_0_30px_rgba(var(--color-accent),0.1)] border border-brand/5 group-hover:border-accent transition-all duration-500 flex items-center justify-center flex-shrink-0 z-10 hidden sm:flex transform group-hover:scale-110">
                                <span class="text-accent font-display text-2xl"><?php echo $i + 1; ?></span>
                            </div>
                            <div class="glass-panel p-8 rounded-[2rem] bg-white border border-brand/5 shadow-sm hover:shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:border-accent/20 transition-all duration-500 flex-1 transform hover:-translate-y-1">
                                <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 flex items-center gap-3">
                                    <span class="sm:hidden text-accent font-display text-2xl"><?php echo $i + 1; ?>.</span> <?php echo $s[0]; ?>
                                </h4>
                                <p class="text-brand-muted font-body text-sm leading-relaxed"><?php echo $s[1]; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who it's for -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text text-center max-w-3xl mx-auto">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Concerns Addressed</span>
                <h3 class="text-section font-display text-brand-deeper mb-6">Is Keravive <i class="text-accent font-light">Right For You?</i></h3>
                <p class="text-brand-muted font-body text-xl font-light leading-relaxed">Keravive suits all hair types and textures, including braided, relaxed and natural hair. It is most often recommended for:</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
                <?php
                $concerns = [
                    ['Thinning Hair & Early Hair Loss', 'Clears follicles and delivers growth-supporting peptides where hair is beginning to thin. Often paired with PRP hair restoration.', 'md:col-span-2'],
                    ['Dry, Itchy or Flaky Scalp', 'Deep hydration and gentle exfoliation calm irritation and reduce visible flaking.', ''],
                    ['Product & Sebum Build-Up', 'Ideal for clients who use heavy oils, gels or protective styles that trap residue at the root.', ''],
                    ['Damaged or Brittle Hair', 'A healthier scalp environment supports stronger, shinier regrowth.', ''],
                    ['Pre & Post Hair Transplant', 'Prepares the scalp before surgery and supports graft health during recovery, as advised by our surgeons.', 'md:col-span-2 lg:col-span-1'],
                ];
                foreach ($concerns as $c): ?>
                <div class="<?php echo $c[2]; ?> group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative">
                    <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12"><?php echo $c[0]; ?></h4>
                    <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10"><?php echo $c[1]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Refine & Myths -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/assets/imagesfromsite/pattern.svg')] bg-repeat opacity-[0.03]"></div>
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-accent/20 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 xl:gap-24 items-center">
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white font-body text-xs tracking-[0.2em] uppercase mb-8 font-semibold backdrop-blur-md border border-white/10">Quality &amp; Excellence</span>
                    <div class="flex flex-col sm:flex-row gap-8 items-start sm:items-center mb-12">
                        <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full overflow-hidden flex-shrink-0 border-[3px] border-accent/40 shadow-[0_0_40px_rgba(var(--color-accent),0.3)]">
                            <img src="/assets/imagesfromsite/dr_chirag_kotecha.png" alt="Dr. Chirag Kotecha" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-section font-display leading-tight m-0 drop-shadow-lg">Why Have Keravive <br/><i class="text-accent font-light">At Refine?</i></h3>
                    </div>
                    <div class="space-y-8 pl-0 sm:pl-8 border-l border-white/10 ml-0 sm:ml-20">
                        <?php
                        $why = [
                            ['fa-user-md', 'Dermatologist-led scalp assessment', 'Every Keravive course begins with a scalp and hair-loss assessment by our dermatology team, so the treatment is matched to the actual cause of your concern.'],
                            ['fa-layer-group', 'Part of a complete hair programme', 'Keravive sits alongside PRP, medical therapy and FUE hair transplant under one roof, so your plan can escalate or combine treatments as needed.'],
                            ['fa-certificate', 'Genuine HydraFacial technology', 'We use authentic HydraFacial devices and Keravive Peptide Complex Solution, the same system used in leading clinics worldwide.'],
                        ];
                        foreach ($why as $w): ?>
                        <div class="flex gap-6 items-start group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 text-accent text-2xl group-hover:bg-accent group-hover:text-white transition-all duration-300 shadow-lg"><i class="fas <?php echo $w[0]; ?>"></i></div>
                            <div>
                                <h4 class="font-heading font-semibold text-xl mb-2"><?php echo $w[1]; ?></h4>
                                <p class="text-white/70 font-body text-base font-light leading-relaxed"><?php echo $w[2]; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="glass-panel p-8 lg:p-10 rounded-[2.5rem] bg-white/5 border border-white/10 backdrop-blur-xl relative overflow-hidden">
                        <div class="flex items-center gap-4 mb-10 relative z-10">
                            <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xl border border-accent/20"><i class="fas fa-lightbulb"></i></div>
                            <h3 class="text-section font-display m-0"><i class="text-accent font-light">Myths</i> &amp; Facts</h3>
                        </div>
                        <div class="space-y-8 relative z-10">
                            <div class="bg-white/5 p-6 rounded-3xl border border-white/5">
                                <div class="flex items-center gap-3 mb-3 text-white/40"><i class="fas fa-times-circle text-lg"></i><span class="font-body text-xs tracking-[0.2em] uppercase font-bold">The Myth</span></div>
                                <p class="font-heading text-xl font-light text-white/80 italic">"Keravive regrows hair on a bald scalp."</p>
                            </div>
                            <div class="bg-accent/10 p-6 rounded-3xl border border-accent/20">
                                <div class="flex items-center gap-3 mb-3 text-accent"><i class="fas fa-check-circle text-lg"></i><span class="font-body text-xs tracking-[0.2em] uppercase font-bold text-white">The Fact</span></div>
                                <p class="font-heading text-2xl font-light text-white leading-snug">Keravive improves scalp health and the quality of existing hair. Where follicles are no longer active, our team will discuss PRP or hair transplant instead — Keravive then supports those treatments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $treatmentVideosTitle    = 'Keravive <i class="text-accent font-light">At Refine.</i>';
    $treatmentVideosSubtitle = 'Watch a Keravive scalp session filmed at our clinic, and see how it fits into our wider hair-restoration programme.';
    $treatmentVideos = [
        ['src' => 'hydrafacial-keravive', 'title' => 'HydraFacial Keravive Scalp Treatment', 'desc' => 'The Keravive scalp session step by step: cleanse, extract and peptide infusion.', 'tag' => 'Live Procedure'],
        ['src' => 'hair-transplant-hair-loss', 'title' => 'Hair Loss & Transplant Consultation', 'desc' => 'Preview of our in-depth consultation walkthrough on hair-loss causes and options.', 'tag' => 'Consultation', 'preview' => true],
        ['src' => 'cleopatra-hydrafacial-explained', 'title' => 'Cleopatra HydraFacial Explained', 'desc' => 'The facial that shares Keravive\'s Vortex technology.', 'tag' => 'Explainer'],
    ];
    include 'includes/treatment-videos.php';
    ?>

    <?php include 'includes/video-testimonials.php'; ?>

    <!-- FAQ -->
    <section class="py-16 lg:py-24 bg-[#faf9f6]">
        <div class="max-w-[900px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold border-b border-accent/30 pb-1">Answers</span>
                <h3 class="text-section font-display text-brand-deeper mb-6 mt-4">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            </div>
            <div class="space-y-3">
                <?php
                $faqs = [
                    ['How long does a Keravive session take?', 'Around 30 to 45 minutes. There is no downtime; you can return to work straight after.'],
                    ['How many sessions do I need?', 'Most clients see the best results with three sessions spaced one month apart, followed by maintenance every three to six months.'],
                    ['Does it hurt?', 'No. Keravive is a relaxing treatment; most clients describe it as a cool, gentle scalp massage.'],
                    ['Can I have Keravive with braids, locs or a weave?', 'The scalp needs to be accessible, so we recommend booking between protective styles. Natural, relaxed and short hair can be treated as is.'],
                    ['Will it help with hair loss?', 'Keravive improves the scalp environment and the quality of existing hair. For genetic or medical hair loss, we combine it with PRP, prescribed therapy or hair transplant after a dermatologist assessment.'],
                    ['How soon will I see results?', 'The scalp feels cleaner and more hydrated immediately. Improvements in hair fullness and shine are typically noticed after the second session and continue with daily use of the take-home spray.'],
                    ['How much does HydraFacial Keravive cost in Kampala?', 'Pricing depends on whether you book a single session or a three-session course, and whether it is combined with PRP. Contact us for current pricing and any active offers.'],
                ];
                foreach ($faqs as $i => $f): ?>
                <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group bg-white border border-brand/5 shadow-sm hover:shadow-xl hover:shadow-brand/5 hover:border-accent/30 transition-all duration-300">
                    <div class="px-4 py-3 md:px-5 md:py-4 lg:p-6 flex justify-between items-center transition-colors">
                        <h4 class="font-heading font-semibold text-brand-deeper text-base md:text-lg pr-4 md:pr-6 group-hover:text-accent transition-colors"><?php echo $i + 1; ?>. <?php echo $f[0]; ?></h4>
                        <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-surface-cool group-hover:bg-accent/10 flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-4 pb-3 md:px-5 md:pb-4 lg:px-6 lg:pb-6">
                            <p class="text-brand-muted font-body text-sm leading-relaxed mt-0 border-t border-brand/5 pt-4"><?php echo $f[1]; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.maxHeight = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });
    </script>

    <!-- Related -->
    <section class="py-12 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 flex flex-wrap items-center justify-center gap-3">
            <span class="text-xs uppercase tracking-widest text-brand-muted font-semibold mr-2">Related treatments</span>
            <a href="/hair-loss" class="px-4 py-2 rounded-full border border-brand/15 text-sm text-brand-deeper hover:bg-brand hover:text-white transition-colors">Hair Loss</a>
            <a href="/prp-hair-restoration" class="px-4 py-2 rounded-full border border-brand/15 text-sm text-brand-deeper hover:bg-brand hover:text-white transition-colors">PRP Hair Restoration</a>
            <a href="/hair-transplant" class="px-4 py-2 rounded-full border border-brand/15 text-sm text-brand-deeper hover:bg-brand hover:text-white transition-colors">Hair Transplant</a>
            <a href="/hydrafacial" class="px-4 py-2 rounded-full border border-brand/15 text-sm text-brand-deeper hover:bg-brand hover:text-white transition-colors">HydraFacial</a>
            <a href="/alopecia-areata" class="px-4 py-2 rounded-full border border-brand/15 text-sm text-brand-deeper hover:bg-brand hover:text-white transition-colors">Alopecia Areata</a>
        </div>
    </section>

    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
