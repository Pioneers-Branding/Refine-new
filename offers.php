<?php
$pageCategory = "Limited Time";
$pageTitle = "September <i class='text-brand font-light'>Offers.</i>";
$pageDescription = "This month's special treatment offers at Refine Skin & Body Clinic, Kampala. Watch the announcement, see the details, and reserve your slot before the month ends.";
$metaTitle = "September Offers 2026 | Special Treatment Deals | Refine Skin & Body Clinic Kampala";
$metaDescription = "Discover Refine Skin & Body Clinic's September 2026 offers on skin, hair, body and IV treatments in Kampala. Limited slots at Kabalagala and Bukoto. Book now.";
$canonicalUrl = "https://refineskinandbody.com/offers";
$metaKeywords = "Refine Clinic offers, skin clinic offers Kampala, September offers Refine, aesthetic treatment deals Uganda, Botox offer Kampala, HydraFacial offer Kampala";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Offer Headline Strip -->
    <section class="bg-brand-deeper text-white py-5 border-y border-white/10">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span>
                <p class="font-body text-sm text-white/90"><strong class="text-accent">Valid September 2026</strong> at our Kabalagala &amp; Bukoto clinics, while slots last.</p>
            </div>
            <a href="https://api.whatsapp.com/send?phone=256758232889&text=Hi%20Refine%2C%20I%20would%20like%20to%20claim%20a%20September%20offer" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-accent text-brand-deeper text-xs font-bold uppercase tracking-wider hover:bg-white transition-colors">
                <i class="fab fa-whatsapp text-base"></i> Claim on WhatsApp
            </a>
        </div>
    </section>

    <!-- Announcement + Details Videos -->
    <?php
    $treatmentVideosEyebrow  = 'Watch The Announcement';
    $treatmentVideosTitle    = 'This Month At <i class="text-accent font-light">Refine.</i>';
    $treatmentVideosSubtitle = 'Our team announces the September offers and walks through the details, pricing and how to claim. Tap a video to watch.';
    $treatmentVideos = [
        ['src' => 'september-offers-announcement', 'title' => 'Announcing The September Offers', 'desc' => 'A quick announcement of what is on offer this month across skin, hair, body and IV treatments.', 'tag' => 'Announcement'],
        ['src' => 'september-offers-details', 'title' => 'September Offers: Full Details', 'desc' => 'Everything you need to know: which treatments are included, what is bundled, and how to book.', 'tag' => 'Details'],
    ];
    include 'includes/treatment-videos.php';
    ?>

    <!-- How to Claim -->
    <section class="py-16 lg:py-24 bg-surface-warm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-5 gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Simple Steps</span>
                    <h2 class="text-section font-display text-brand-deeper mb-6 leading-tight">How To <i class="text-accent font-light">Claim Your Offer.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">Offers are limited to a set number of slots per branch each month. Reserve early to secure your preferred date and practitioner.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="/book-appointment" class="btn-magnetic magnetic-target"><span>Book Appointment</span></a>
                        <a href="tel:+256758232889" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-brand/20 text-brand-deeper text-sm font-semibold hover:bg-brand hover:text-white transition-colors"><i class="fas fa-phone"></i> +256 758 232 889</a>
                    </div>
                </div>
                <div class="lg:col-span-7 grid sm:grid-cols-2 gap-5 gs-stagger-bento">
                    <?php
                    $steps = [
                        ['fa-play-circle', 'Watch the details video', 'The second video above lists every treatment in this month\'s offer and what is bundled with it.'],
                        ['fa-comments', 'Message or call us', 'Tell us which offer you want and your preferred branch — Kabalagala (Palm Village Mall) or Bukoto (UMC Victoria Hospital).'],
                        ['fa-calendar-check', 'Reserve your slot', 'We confirm your appointment date and practitioner. Consultations for offer treatments are complimentary.'],
                        ['fa-sparkles', 'Visit and enjoy', 'Quote "September Offer" at reception. Offer pricing is applied at checkout on the day of treatment.'],
                    ];
                    foreach ($steps as $i => $s): ?>
                    <div class="bento-item bg-white p-7 rounded-3xl border border-brand/5 shadow-sm hover:shadow-lg hover:border-accent/30 transition-all duration-500">
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-brand/5 flex items-center justify-center text-accent text-xl"><i class="fas <?php echo $s[0]; ?>"></i></div>
                            <span class="font-display text-3xl text-brand/20"><?php echo $i + 1; ?></span>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2"><?php echo $s[1]; ?></h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed"><?php echo $s[2]; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular treatments this month -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="text-center max-w-3xl mx-auto mb-12 gs-reveal-text">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Explore</span>
                <h2 class="text-section font-display text-brand-deeper mb-4">Treatments Our Patients <i class="text-accent font-light">Ask About Most.</i></h2>
                <p class="text-brand-muted font-body text-lg font-light">Not sure which offer suits you? Start with the treatments below, or book a free consultation and we will build a plan around your goals.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 gs-stagger-bento">
                <?php
                $popular = [
                    ['/hydrafacial', 'HydraFacial', '/assets/images/services/skincare_general/HydraFacial-new.webp'],
                    ['/botox', 'Botox&reg;', '/assets/images/clinic/botox-session-2.webp'],
                    ['/dermal-fillers', 'Dermal Fillers', '/assets/images/before-after/fillers-after-1.webp'],
                    ['/laser-hair-removal', 'Laser Hair Removal', '/assets/videos/posters/laser-hair-removal-underarms.jpg'],
                    ['/cryolipolysis', 'Fat Freezing', '/assets/videos/posters/fat-freezing-treatment.jpg'],
                    ['/iv-therapy', 'IV Therapy', '/assets/videos/posters/iv-drip-therapy.jpg'],
                ];
                foreach ($popular as $p): ?>
                <a href="<?php echo $p[0]; ?>" class="bento-item group relative aspect-[4/5] rounded-3xl overflow-hidden bg-brand-deeper shadow-sm hover:shadow-xl transition-all duration-500">
                    <img src="<?php echo $p[2]; ?>" alt="<?php echo strip_tags($p[1]); ?> offer at Refine Clinic" class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 group-hover:opacity-100 transition-all duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/90 via-brand-deeper/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="font-heading font-semibold text-white text-sm leading-snug"><?php echo $p[1]; ?></h4>
                        <span class="text-[10px] uppercase tracking-widest text-accent font-semibold">View treatment</span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Terms -->
    <section class="py-12 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[900px] mx-auto px-6">
            <h3 class="font-heading font-semibold text-brand-deeper text-lg mb-4">Offer Terms</h3>
            <ul class="text-sm text-brand-muted font-light leading-relaxed space-y-2 list-disc pl-5">
                <li>Offers apply to treatments booked and completed within September 2026 unless stated otherwise in the details video.</li>
                <li>Slots are limited per branch and allocated on a first-come, first-served basis.</li>
                <li>All treatments are subject to a clinical consultation to confirm suitability. Where a treatment is not suitable, an alternative will be recommended.</li>
                <li>Offers cannot be combined with other discounts, vouchers or loyalty rewards.</li>
                <li>Refine Skin &amp; Body Clinic reserves the right to amend or withdraw an offer at any time.</li>
            </ul>
        </div>
    </section>

    <?php include 'includes/locations-selector.php'; ?>
    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
