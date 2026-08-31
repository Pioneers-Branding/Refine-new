<?php
// router.php for PHP built-in server and Vercel PHP serverless

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = rtrim($path, '/'); // Remove trailing slash
if ($path === '') {
    $path = '/';
}
$decodedPath = urldecode($path);

// Force clean URLs: redirect any GET request ending in .php to its extensionless equivalent
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' && strlen($path) > 4 && substr($path, -4) === '.php') {
    $cleanPath = substr($path, 0, -4);
    if ($cleanPath === '/index' || $cleanPath === '') {
        $cleanPath = '/';
    }
    header("Location: " . $cleanPath, true, 301);
    exit();
}

// Direct file access (CSS, JS, Images)
if (file_exists(__DIR__ . $decodedPath) && is_file(__DIR__ . $decodedPath)) {
    return false; // let the web server serve the file as is
}

// ============================================
// 301 REDIRECT MAP (Case-Insensitive Lookup)
// ============================================
$redirectMap = [
    // Explicit requested redirects
    '/cosmetic-dermatology-kampala-juba' => '/services',
    '/refine-iv-lounge-kampala-juba' => '/refine-iv-lounge',
    '/body-contouring-kampala-juba' => '/body-contouring',
    '/mobile-iv-service-kampala-juba' => '/mobile-iv-service',
    '/jet-lag-iv-therapy-treatment-kampala-juba' => '/jet-lag-iv-therapy',
    '/vitamin-b12-combo-iv-therapy-treatment-kampala-juba' => '/vitamin-b12-iv-therapy',
    '/eczema-dermatitis-treatment-kampala-juba' => '/eczema',
    '/contact-dermatitis-treatment-kampala-juba' => '/eczema',
    '/keloid-scar' => '/scar',
    '/m-shot-treatment-kampala-juba' => '/m-shot-in-juba',
    '/rf-microneedling-kampala-juba' => '/rf-microneedling-in-juba',
    '/total-sport-iv-therapy-kampala-juba' => '/total-sport-iv-therapy-in-juba',
    '/pcdc-fat-dissolving-old' => '/pcdc-fat-dissolving',
    '/dr-chirag-kotecha-dermatologist-in-uganda' => '/dr-chirag-kotecha',
    '/amino-acids-iv-therapy-treatment-kampala-juba' => '/amino-acids-iv-therapy',
    '/vitamin-c-treatment-iv-therapy-treatment-kampala-juba' => '/vitamin-c-iv-therapy',
    '/prp-hair-restoration-kampala-juba' => '/prp-hair-restoration',
    '/glutathione-iv-therapy-kampala-juba' => '/glutathione-iv-therapy',
    '/vitiligo-treatment-kampala-juba' => '/vitiligo-in-juba',
    '/september-glow-deals-bukoto-landing-page' => '/',
    '/sidebar-temp' => '/',
    '/ad-footer' => '/',
    '/performance-and-recovery' => '/',
    '/index.html' => '/',
    '/sidebar' => '/',
    '/hydra-new' => '/hydrafacial',
    '/jinja' => '/',
    '/juba' => '/',
    '/testimonials' => '/',
    '/hydra-test' => '/hydrafacial',
    '/images/iv-book3.pdf' => '/',
    '/hydra-temp' => '/hydrafacial',
    '/co2' => '/co2-laser-scar-removal',
    '/combo-of-vit-b-12-and-b-complex' => '/vitamin-b12-iv-therapy',
    '/is-glutathione-the-magic-bullet' => '/glutathione-iv-therapy',
    '/service/slender-wonder' => '/',
    '/heres-why-your-weight-loss-regimen-isnt-paying-off' => '/',
    '/tag/skin-cleansing/feed' => '/blog',
    '/-kampala-juba' => '/',
    '/wp-json/elementskit/v1' => '/',

    // Legacy doctor & team redirects
    '/about-dr-henry-owiny-aesthetic-physician-in-uganda' => '/dr-henry-owiny',
    '/about-dr-william-lubega-plastic-surgeon-in-uganda' => '/dr-william-lubega',
    '/dr-ahmed-ashraf-dermatologist-in-uganda' => '/dr-ahmed-ashraf',
    '/about-alison-gallagher-psychotherapist-in-uganda' => '/alison-gallagher',
    '/about-dr-vicky-koojo-nganzi-dermatologist-in-uganda' => '/dr-vicky-koojo-nganzi',
    '/about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda' => '/wendy-emyedu-ayayo',

    // General legacy location & service redirects
    '/gift-vouchers-in-bukoto' => '/gift-vouchers',
    '/gift-vouchers-in-juba' => '/gift-vouchers',
    '/gift-vouchers-in-kabalagala' => '/gift-vouchers',
    '/cookie-policy-in-bukoto' => '/cookie-policy',
    '/cookie-policy-in-juba' => '/cookie-policy',
    '/cookie-policy-in-kabalagala' => '/cookie-policy',
    '/book-appointment-in-bukoto' => '/book-appointment',
    '/book-appointment-in-juba' => '/book-appointment',
    '/book-appointment-in-kabalagala' => '/book-appointment',
    '/nutrition-counselling-kampala-juba' => '/nutrition-counselling',
    '/vaginal-rejuvenation-kampala-juba' => '/vaginal-rejuvenation',
    '/ed-treatment-kampala-juba' => '/ed-treatment',
    '/menopause-management-kampala-juba' => '/menopause-management',
    '/testosterone-therapy-kampala-juba' => '/testosterone-therapy',
    '/stress-sleep-wellness-kampala-juba' => '/stress-sleep-wellness',
    '/medical-dermatology-kampala-juba' => '/medical-dermatology',
    '/acne-treatment-kampala-juba' => '/acne',
    '/scar-treatment-kampala-juba' => '/scar',
    '/hyperpigmentation-melasma-treatment-kampala-juba' => '/hyperpigmentation-melasma',
    '/hair-loss-treatment-kampala-juba' => '/hair-loss',
    '/rosacea-treatment-kampala-juba' => '/rosacea',
    '/alopecia-areata-treatment-kampala-juba' => '/alopecia-areata',
    '/skin-cancer-treatment-kampala-juba' => '/skin-cancer',
    '/melasma-treatment-kampala-juba' => '/melasma',
    '/hyperpigmentation-treatment-kampala-juba' => '/hyperpigmentation',
    '/eczema-treatment-kampala-juba' => '/eczema',
    '/psoriasis-treatment-kampala-juba' => '/psoriasis',
    '/mole-wart-removal-kampala-juba' => '/mole-wart-removal',
    '/skin-tag-removal-kampala-juba' => '/skin-tag-removal',
    '/chemical-peel-treatment-kampala-juba' => '/chemical-peel',
    '/iv-therapy-kampala-juba' => '/iv-therapy',
    '/bio-identical-hormone-replacement-therapy-kampala' => '/bio-identical-hormone-replacement-therapy',
    '/stretch-marks-treatment-kampala-juba' => '/stretch-marks',
    '/non-surgical-brazilian-butt-lift-kampala-juba' => '/non-surgical-brazilian-butt-lift',
    '/lip-volumization-kampala-juba' => '/lip-volumization',
    '/non-surgical-liquid-rhinoplasty-kampala-juba' => '/non-surgical-liquid-rhinoplasty',
    '/double-chin-treatment-kampala-juba' => '/double-chin',
    '/platelet-rich-plasma-facial-kampala-juba' => '/platelet-rich-plasma-facial',
    '/laser-hair-removal-in-uganda-kampala-juba' => '/laser-hair-removal',
    '/laser-tattoo-removal-in-uganda-kampala-juba' => '/laser-tattoo-removal',
    '/co2-laser-scar-removal-kampala-juba' => '/co2-laser-scar-removal',
    '/laser-skin-rejuvenation-in-uganda-kampala-juba' => '/laser-skin-rejuvenation',
    '/botox-anti-aging-treatment-kampala-juba' => '/botox',
    '/dermal-fillers-kampala-juba' => '/dermal-fillers',
    '/thread-lifting-treatment-kampala-juba' => '/thread-lifting',
    '/sculptra-face-lift-kampala-juba' => '/sculptra-face-lift',
    '/cool-lifting-skin-rejuvenation-kampala-juba' => '/cool-lifting',
    '/led-light-therapy-kampala-juba' => '/led-light-therapy',
    '/hair-transplant-kampala-juba' => '/hair-transplant',
    '/prp-face-lift-kampala-juba' => '/prp-face-lift',
    '/prp-breast-lift-kampala-juba' => '/prp-breast-lift',
    '/plasma-pen-therapy-kampala-juba' => '/plasma-pen-therapy',
    '/omg-shot-treatment-kampala-juba' => '/omg-shot',
    '/allurion-weight-loss-treatment-kampala-juba' => '/allurion-weight-loss',
    '/semaglutide-ozempic-weight-loss-kampala-juba' => '/semaglutide-ozempic-weight-loss',
    '/weight-loss-kampala-juba' => '/semaglutide-ozempic-weight-loss',
    '/gastric-sleeve-and-bypass-surgery-kampala-juba' => '/gastric-sleeve-and-bypass-surgery',
    '/wonder-axon-treatment-kampala-juba' => '/wonder-axon-treatment',
    '/cryolipolysis-fat-freezing-treatment-kampala-juba' => '/cryolipolysis',
    '/pcdc-fat-dissolving-kampala-juba' => '/pcdc-fat-dissolving',
    '/tummy-tuck-abdominoplasty-kampala-juba' => '/tummy-tuck',
    '/em-body-sculpt-kampala-juba' => '/em-body-sculpt',
    '/6d-green-laser-treatment-kampala-juba' => '/6d-green-laser',
    '/hydrafacial-treatment-kampala-juba' => '/hydrafacial',
    '/microblading-kampala-juba' => '/microblading',
    '/joint-and-tissue-rejuvenation-kampala-juba' => '/joint-and-tissue-rejuvenation',
];

$lowerPath = strtolower($path);
if (array_key_exists($lowerPath, $redirectMap)) {
    header("Location: " . $redirectMap[$lowerPath], true, 301);
    exit();
}

// Prefix pattern redirects
if (strpos($lowerPath, '/wp-json/elementskit/v1') === 0 || strpos($lowerPath, '/service/slender-wonder') === 0 || strpos($lowerPath, '/heres-why-your-weight-loss-regimen-isnt-paying-off') === 0) {
    header("Location: /", true, 301);
    exit();
}
if (strpos($lowerPath, '/is-glutathione-the-magic-bullet') === 0) {
    header("Location: /glutathione-iv-therapy", true, 301);
    exit();
}
if (strpos($lowerPath, '/tag/skin-cleansing/feed') === 0) {
    header("Location: /blog", true, 301);
    exit();
}

// Map clean URLs to .php files
$routeMap = [
    '' => 'index.php',
    '/' => 'index.php',
    '/about' => 'about.php',
    '/services' => 'services.php',
    '/gallery' => 'gallery.php',
    '/contact' => 'contact.php',
    '/book-appointment' => 'book-appointment.php',
    '/pricing' => 'pricing.php',
    '/faqs' => 'faqs.php',
    '/careers' => 'careers.php',
    '/membership' => 'membership.php',
    '/gift-vouchers' => 'gift-vouchers.php',
    '/privacy-policy' => 'privacy-policy.php',
    '/terms-and-conditions' => 'terms-and-conditions.php',
    '/cookie-policy' => 'cookie-policy.php',
    '/consent-forms' => 'consent-forms.php',
    '/aftercare' => 'aftercare.php',
    '/press' => 'press.php',
    '/our-team' => 'our-team.php',
    '/dr-chirag-kotecha' => 'dr-chirag-kotecha.php',
    '/dr-henry-owiny' => 'dr-henry-owiny.php',
    '/dr-william-lubega' => 'dr-william-lubega.php',
    '/dr-ahmed-ashraf' => 'dr-ahmed-ashraf.php',
    '/alison-gallagher' => 'alison-gallagher.php',
    '/dr-vicky-koojo-nganzi' => 'dr-vicky-koojo-nganzi.php',
    '/wendy-emyedu-ayayo' => 'wendy-emyedu-ayayo.php',
    '/laser-treatments' => 'laser-treatments.php',
    '/laser-treatments-landing' => 'laser-treatments-landing.php',
    '/prp-treatments' => 'prp-treatments.php',
    '/prp-treatments-landing' => 'prp-treatments-landing.php',
    '/anti-aging' => 'anti-aging.php',
    '/anti-aging-landing' => 'anti-aging-landing.php',
    '/skin-rejuvenation' => 'skin-rejuvenation.php',
    '/skin-rejuvenation-landing' => 'skin-rejuvenation-landing.php',
    '/weight-loss' => 'weight-loss.php',
    '/weight-loss-landing' => 'weight-loss-landing.php',
    '/skin-tightening' => 'skin-tightening.php',
    '/body-contouring' => 'body-contouring.php',
    '/body-contouring-landing' => 'body-contouring-landing.php',
    '/scar' => 'scar.php',
    '/hair-loss' => 'hair-loss.php',
    '/hyperpigmentation-melasma' => 'hyperpigmentation-melasma.php',
    '/thread-lifting' => 'thread-lifting.php',
    '/anti-migraine' => 'anti-migraine.php',
    '/rosacea' => 'rosacea.php',
    '/acne' => 'acne.php',
    '/vitiligo' => 'vitiligo.php',
    '/stretch-marks' => 'stretch-marks.php',
    '/skin-cancer' => 'skin-cancer.php',
    '/chemical-peel' => 'chemical-peel.php',
    '/hydrafacial' => 'hydrafacial.php',
    '/microblading' => 'microblading.php',
    '/cool-lifting' => 'cool-lifting.php',
    '/laser-skin-rejuvenation' => 'laser-skin-rejuvenation.php',
    '/co2-laser-scar-removal' => 'co2-laser-scar-removal.php',
    '/led-light-therapy' => 'led-light-therapy.php',
    '/rf-microneedling' => 'rf-microneedling.php',
    '/plasma-pen-therapy' => 'plasma-pen-therapy.php',
    '/6d-green-laser' => '6d-green-laser.php',
    '/melasma' => 'melasma.php',
    '/hyperpigmentation' => 'hyperpigmentation.php',
    '/eczema' => 'eczema.php',
    '/psoriasis' => 'psoriasis.php',
    '/mole-wart-removal' => 'mole-wart-removal.php',
    '/skin-tag-removal' => 'skin-tag-removal.php',
    '/botox' => 'botox.php',
    '/dermal-fillers' => 'dermal-fillers.php',
    '/lip-volumization' => 'lip-volumization.php',
    '/sculptra-face-lift' => 'sculptra-face-lift.php',
    '/non-surgical-liquid-rhinoplasty' => 'non-surgical-liquid-rhinoplasty.php',
    '/double-chin' => 'double-chin.php',
    '/pcdc-fat-dissolving' => 'pcdc-fat-dissolving.php',
    '/platelet-rich-plasma-facial' => 'platelet-rich-plasma-facial.php',
    '/prp-face-lift' => 'prp-face-lift.php',
    '/prp-hair-restoration' => 'prp-hair-restoration.php',
    '/hair-transplant' => 'hair-transplant.php',
    '/alopecia-areata' => 'alopecia-areata.php',
    '/laser-hair-removal' => 'laser-hair-removal.php',
    '/laser-tattoo-removal' => 'laser-tattoo-removal.php',
    '/em-body-sculpt' => 'em-body-sculpt.php',
    '/cryolipolysis' => 'cryolipolysis.php',
    '/non-surgical-brazilian-butt-lift' => 'non-surgical-brazilian-butt-lift.php',
    '/tummy-tuck' => 'tummy-tuck.php',
    '/gastric-sleeve-and-bypass-surgery' => 'gastric-sleeve-and-bypass-surgery.php',
    '/semaglutide-ozempic-weight-loss' => 'semaglutide-ozempic-weight-loss.php',
    '/allurion-weight-loss' => 'allurion-weight-loss.php',
    '/prp-breast-lift' => 'prp-breast-lift.php',
    '/nutrition-counselling' => 'nutrition-counselling.php',
    '/m-shot' => 'm-shot.php',
    '/omg-shot' => 'omg-shot.php',
    '/wonder-axon-treatment' => 'wonder-axon-treatment.php',
    '/bio-identical-hormone-replacement-therapy' => 'bio-identical-hormone-replacement-therapy.php',
    '/joint-and-tissue-rejuvenation' => 'joint-and-tissue-rejuvenation.php',
    '/vaginal-rejuvenation' => 'vaginal-rejuvenation.php',
    '/ed-treatment' => 'ed-treatment.php',
    '/menopause-management' => 'menopause-management.php',
    '/testosterone-therapy' => 'testosterone-therapy.php',
    '/stress-sleep-wellness' => 'stress-sleep-wellness.php',
    '/iv-therapy' => 'iv-therapy.php',
    '/inner-beauty-iv-therapy' => 'inner-beauty-iv-therapy.php',
    '/myers-magic-iv-therapy' => 'myers-magic-iv-therapy.php',
    '/myers-plus-plenish' => 'myers-plus-plenish.php',
    '/pre-party-iv-therapy' => 'pre-party-iv-therapy.php',
    '/post-party-iv-therapy' => 'post-party-iv-therapy.php',
    '/anti-migraine-iv-therapy' => 'anti-migraine-iv-therapy.php',
    '/total-sport-iv-therapy' => 'total-sport-iv-therapy.php',
    '/immunity-iv-therapy' => 'immunity-iv-therapy.php',
    '/nad-iv-therapy' => 'nad-iv-therapy.php',
    '/videos' => 'videos.php',
    '/blog' => 'blog.php',
    '/before-after' => 'before-after.php',
    '/patient-reviews' => 'patient-reviews.php',
    '/m-shot-in-juba' => 'm-shot-in-juba.php',
    '/rf-microneedling-in-juba' => 'rf-microneedling-in-juba.php',
    '/total-sport-iv-therapy-in-juba' => 'total-sport-iv-therapy-in-juba.php',
    '/amino-acids-iv-therapy' => 'amino-acids-iv-therapy.php',
    '/vitamin-c-iv-therapy' => 'vitamin-c-iv-therapy.php',
    '/glutathione-iv-therapy' => 'glutathione-iv-therapy.php',
    '/vitiligo-in-juba' => 'vitiligo-in-juba.php',
    '/skin-clinic-in-juba' => 'skin-clinic-in-juba.php',
    '/dermatologist-in-juba' => 'dermatologist-in-juba.php',
    '/skin-clinic-in-bukoto' => 'skin-clinic-in-bukoto.php',
    '/dermatologist-in-bukoto' => 'dermatologist-in-bukoto.php',
    '/skin-clinic-in-kabalagala' => 'skin-clinic-in-kabalagala.php',
    '/dermatologist-in-kabalagala' => 'dermatologist-in-kabalagala.php',
];

if (array_key_exists($lowerPath, $routeMap)) {
    require __DIR__ . '/' . $routeMap[$lowerPath];
} elseif (strpos($lowerPath, '/blog/') === 0 || $lowerPath === '/blog') {
    require __DIR__ . '/blog.php';
} elseif (file_exists(__DIR__ . $path . '.php')) {
    // Fallback if we add files not in the map
    require __DIR__ . $path . '.php';
} else {
    // 404
    http_response_code(404);
    echo '<h1 class="font-display text-section">404 Not Found</h1>';
    echo "<p>The page you are looking for does not exist.</p>";
    echo "<a href='/'>Go to Homepage</a>";
}
