<?php
// router.php for PHP built-in server

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = rtrim($path, '/'); // Remove trailing slash
$decodedPath = urldecode($path);

// Force clean URLs: redirect any GET request ending in .php to its extensionless equivalent
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' && substr($path, -4) === '.php') {
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

// Handle 301 Redirects
if ($path === '/nutrition-counselling-kampala-juba') {
    header("Location: /nutrition-counselling", true, 301);
    exit();
}
if ($path === '/vaginal-rejuvenation-kampala-juba') {
    header("Location: /vaginal-rejuvenation", true, 301);
    exit();
}
if ($path === '/ed-treatment-kampala-juba') {
    header("Location: /ed-treatment", true, 301);
    exit();
}
if ($path === '/menopause-management-kampala-juba') {
    header("Location: /menopause-management", true, 301);
    exit();
}
if ($path === '/testosterone-therapy-kampala-juba') {
    header("Location: /testosterone-therapy", true, 301);
    exit();
}
if ($path === '/stress-sleep-wellness-kampala-juba') {
    header("Location: /stress-sleep-wellness", true, 301);
    exit();
}

if ($path === '/dr-chirag-kotecha-dermatologist-in-uganda') {
    header("Location: /dr-chirag-kotecha", true, 301);
    exit();
}
if ($path === '/about-dr-henry-owiny-aesthetic-physician-in-uganda') {
    header("Location: /dr-henry-owiny", true, 301);
    exit();
}
if ($path === '/about-dr-william-lubega-plastic-surgeon-in-uganda') {
    header("Location: /dr-william-lubega", true, 301);
    exit();
}
if ($path === '/dr-ahmed-ashraf-dermatologist-in-uganda') {
    header("Location: /dr-ahmed-ashraf", true, 301);
    exit();
}
if ($path === '/about-alison-gallagher-psychotherapist-in-uganda') {
    header("Location: /alison-gallagher", true, 301);
    exit();
}
if ($path === '/about-dr-vicky-koojo-nganzi-dermatologist-in-uganda') {
    header("Location: /dr-vicky-koojo-nganzi", true, 301);
    exit();
}
if ($path === '/about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda') {
    header("Location: /wendy-emyedu-ayayo", true, 301);
    exit();
}

if ($path === '/medical-dermatology-kampala-juba') {
    header("Location: /medical-dermatology", true, 301);
    exit();
}
if ($path === '/acne-treatment-kampala-juba') {
    header("Location: /acne", true, 301);
    exit();
}
if ($path === '/scar-treatment-kampala-juba') {
    header("Location: /scar", true, 301);
    exit();
}
if ($path === '/Hyperpigmentation-Melasma-treatment-kampala-juba') {
    header("Location: /hyperpigmentation-melasma", true, 301);
    exit();
}
if ($path === '/hair-loss-treatment-kampala-juba') {
    header("Location: /hair-loss", true, 301);
    exit();
}
if ($path === '/rosacea-treatment-kampala-juba') {
    header("Location: /rosacea", true, 301);
    exit();
}
if ($path === '/vitiligo-treatment-kampala-juba') {
    header("Location: /vitiligo", true, 301);
    exit();
}
if ($path === '/alopecia-areata-treatment-kampala-juba') {
    header("Location: /alopecia-areata", true, 301);
    exit();
}
if ($path === '/skin-cancer-treatment-kampala-juba') {
    header("Location: /skin-cancer", true, 301);
    exit();
}
if ($path === '/melasma-treatment-kampala-juba') {
    header("Location: /melasma", true, 301);
    exit();
}
if ($path === '/hyperpigmentation-treatment-kampala-juba') {
    header("Location: /hyperpigmentation", true, 301);
    exit();
}
if ($path === '/eczema-treatment-kampala-juba') {
    header("Location: /eczema", true, 301);
    exit();
}
if ($path === '/psoriasis-treatment-kampala-juba') {
    header("Location: /psoriasis", true, 301);
    exit();
}
if ($path === '/mole-wart-removal-kampala-juba') {
    header("Location: /mole-wart-removal", true, 301);
    exit();
}
if ($path === '/skin-tag-removal-kampala-juba') {
    header("Location: /skin-tag-removal", true, 301);
    exit();
}

if ($path === '/chemical-peel-treatment-kampala-juba') {
    header("Location: /chemical-peel", true, 301);
    exit();
}
if ($path === '/iv-therapy-kampala-juba') {
    header("Location: /iv-therapy", true, 301);
    exit();
}
if ($path === '/bio-identical-hormone-replacement-therapy-kampala') {
    header("Location: /bio-identical-hormone-replacement-therapy", true, 301);
    exit();
}
if ($path === '/rf-microneedling-kampala-juba') {
    header("Location: /rf-microneedling", true, 301);
    exit();
}
if ($path === '/stretch-marks-treatment-kampala-juba') {
    header("Location: /stretch-marks", true, 301);
    exit();
}
if ($path === '/non-surgical-brazilian-butt-lift-kampala-juba') {
    header("Location: /non-surgical-brazilian-butt-lift", true, 301);
    exit();
}
if ($path === '/lip-volumization-kampala-juba') {
    header("Location: /lip-volumization", true, 301);
    exit();
}
if ($path === '/non-surgical-liquid-rhinoplasty-kampala-juba') {
    header("Location: /non-surgical-liquid-rhinoplasty", true, 301);
    exit();
}
if ($path === '/double-chin-treatment-kampala-juba') {
    header("Location: /double-chin", true, 301);
    exit();
}
if ($path === '/platelet-rich-plasma-facial-kampala-juba') {
    header("Location: /platelet-rich-plasma-facial", true, 301);
    exit();
}
if ($path === '/laser-hair-removal-in-uganda-kampala-juba') {
    header("Location: /laser-hair-removal", true, 301);
    exit();
}
if ($path === '/laser-tattoo-removal-in-uganda-kampala-juba') {
    header("Location: /laser-tattoo-removal", true, 301);
    exit();
}
if ($path === '/co2-laser-scar-removal-kampala-juba') {
    header("Location: /co2-laser-scar-removal", true, 301);
    exit();
}
if ($path === '/laser-skin-rejuvenation-in-uganda-kampala-juba') {
    header("Location: /laser-skin-rejuvenation", true, 301);
    exit();
}
if ($path === '/botox-anti-aging-treatment-kampala-juba') {
    header("Location: /botox", true, 301);
    exit();
}
if ($path === '/dermal-fillers-kampala-juba') {
    header("Location: /dermal-fillers", true, 301);
    exit();
}
if ($path === '/thread-lifting-treatment-kampala-juba') {
    header("Location: /thread-lifting", true, 301);
    exit();
}
if ($path === '/sculptra-face-lift-kampala-juba') {
    header("Location: /sculptra-face-lift", true, 301);
    exit();
}
if ($path === '/cool-lifting-skin-rejuvenation-kampala-juba') {
    header("Location: /cool-lifting", true, 301);
    exit();
}
if ($path === '/led-light-therapy-kampala-juba') {
    header("Location: /led-light-therapy", true, 301);
    exit();
}
if ($path === '/hair-transplant-kampala-juba') {
    header("Location: /hair-transplant", true, 301);
    exit();
}
if ($path === '/prp-face-lift-kampala-juba') {
    header("Location: /prp-face-lift", true, 301);
    exit();
}
if ($path === '/prp-breast-lift-kampala-juba') {
    header("Location: /prp-breast-lift", true, 301);
    exit();
}
if ($path === '/prp-hair-restoration-kampala-juba') {
    header("Location: /prp-hair-restoration", true, 301);
    exit();
}
if ($path === '/plasma-pen-therapy-kampala-juba') {
    header("Location: /plasma-pen-therapy", true, 301);
    exit();
}
if ($path === '/omg-shot-treatment-kampala-juba') {
    header("Location: /omg-shot", true, 301);
    exit();
}
if ($path === '/m-shot-treatment-kampala-juba') {
    header("Location: /m-shot", true, 301);
    exit();
}
if ($path === '/joint-and-tissue-rejuvenation-kampala-juba') {
    header("Location: /joint-and-tissue-rejuvenation", true, 301);
    exit();
}
if ($path === '/allurion-weight-loss-treatment-kampala-juba') {
    header("Location: /allurion-weight-loss", true, 301);
    exit();
}
if ($path === '/semaglutide-ozempic-weight-loss-kampala-juba') {
    header("Location: /semaglutide-ozempic-weight-loss", true, 301);
    exit();
}
if ($path === '/weight-loss-kampala-juba') {
    header("Location: /semaglutide-ozempic-weight-loss", true, 301);
    exit();
}
if ($path === '/gastric-sleeve-and-bypass-surgery-kampala-juba') {
    header("Location: /gastric-sleeve-and-bypass-surgery", true, 301);
    exit();
}
if ($path === '/wonder-axon-treatment-kampala-juba') {
    header("Location: /wonder-axon-treatment", true, 301);
    exit();
}
if ($path === '/cryolipolysis-fat-freezing-treatment-kampala-juba') {
    header("Location: /cryolipolysis", true, 301);
    exit();
}
if ($path === '/pcdc-fat-dissolving-kampala-juba') {
    header("Location: /pcdc-fat-dissolving", true, 301);
    exit();
}
if ($path === '/tummy-tuck-abdominoplasty-kampala-juba') {
    header("Location: /tummy-tuck", true, 301);
    exit();
}
if ($path === '/em-body-sculpt-kampala-juba') {
    header("Location: /em-body-sculpt", true, 301);
    exit();
}
if ($path === '/6d-green-laser-treatment-kampala-juba') {
    header("Location: /6d-green-laser", true, 301);
    exit();
}

if ($path === '/hydrafacial-treatment-kampala-juba') {
    header("Location: /hydrafacial", true, 301);
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
    '/cosmetic-dermatology-kampala-juba' => 'cosmetic-dermatology-kampala-juba.php',
    '/medical-dermatology' => 'medical-dermatology.php',
    '/laser-treatments-kampala-juba' => 'laser-treatments-kampala-juba.php',
    '/prp-treatments-kampala-juba' => 'prp-treatments-kampala-juba.php',
    '/anti-aging-kampala-juba' => 'anti-aging-kampala-juba.php',
    '/skin-and-body-rejuvenation-kampala-juba' => 'skin-and-body-rejuvenation-kampala-juba.php',
    '/skin-tightening' => 'skin-tightening.php',
    '/body-contouring' => 'body-contouring.php',
    '/body-contouring-kampala-juba' => 'body-contouring-kampala-juba.php',
    '/scar' => 'scar.php',
    '/hair-loss' => 'hair-loss.php',
    '/hyperpigmentation-melasma' => 'hyperpigmentation-melasma.php',
    '/thread-lifting' => 'thread-lifting.php',
    '/anti-migraine' => 'anti-migraine.php',
    '/hair-restoration-kampala-juba' => 'hair-restoration-kampala-juba.php',
    '/injectables-kampala-juba' => 'injectables-kampala-juba.php',
    '/mens-aesthetics-kampala-juba' => 'mens-aesthetics-kampala-juba.php',
    '/bridal-packages-kampala-juba' => 'bridal-packages-kampala-juba.php',
    '/skin-lightening-with-tatioactive-kampala-juba' => 'skin-lightening-with-tatioactive-kampala-juba.php',
    '/rosacea' => 'rosacea.php',
    '/acne' => 'acne.php',
    '/vitiligo' => 'vitiligo.php',
    '/stretch-marks' => 'stretch-marks.php',
    '/skin-cancer' => 'skin-cancer.php',
    '/chemical-peel' => 'chemical-peel.php',
    '/hydrafacial' => 'hydrafacial.php',
    '/cool-lifting' => 'cool-lifting.php',
    '/laser-skin-rejuvenation' => 'laser-skin-rejuvenation.php',
    '/co2-laser-scar-removal' => 'co2-laser-scar-removal.php',
    '/led-light-therapy' => 'led-light-therapy.php',
    '/rf-microneedling' => 'rf-microneedling.php',
    '/plasma-pen-therapy' => 'plasma-pen-therapy.php',
    '/6d-green-laser' => '6d-green-laser.php',
    '/melasma' => 'melasma.php',
    '/hyperpigmentation' => 'hyperpigmentation.php',
    '/under-eye-treatment-kampala-juba' => 'under-eye-treatment-kampala-juba.php',
    '/eczema' => 'eczema.php',
    '/psoriasis' => 'psoriasis.php',
    '/mole-wart-removal' => 'mole-wart-removal.php',
    '/skin-tag-removal' => 'skin-tag-removal.php',
    '/open-pores-treatment-kampala-juba' => 'open-pores-treatment-kampala-juba.php',
    '/anti-wrinkle-treatment-kampala-juba' => 'anti-wrinkle-treatment-kampala-juba.php',
    '/carbon-laser-facial-kampala-juba' => 'carbon-laser-facial-kampala-juba.php',
    '/dermaplaning-kampala-juba' => 'dermaplaning-kampala-juba.php',
    '/microdermabrasion-kampala-juba' => 'microdermabrasion-kampala-juba.php',
    '/botox' => 'botox.php',
    '/dermal-fillers' => 'dermal-fillers.php',
    '/lip-volumization' => 'lip-volumization.php',
    '/sculptra-face-lift' => 'sculptra-face-lift.php',
    '/non-surgical-liquid-rhinoplasty' => 'non-surgical-liquid-rhinoplasty.php',
    '/double-chin' => 'double-chin.php',
    '/pcdc-fat-dissolving' => 'pcdc-fat-dissolving.php',
    '/platelet-rich-plasma-facial' => 'platelet-rich-plasma-facial.php',
    '/prp-face-lift' => 'prp-face-lift.php',
    '/profhilo-treatment-kampala-juba' => 'profhilo-treatment-kampala-juba.php',
    '/jawline-contouring-kampala-juba' => 'jawline-contouring-kampala-juba.php',
    '/cheek-enhancement-kampala-juba' => 'cheek-enhancement-kampala-juba.php',
    '/tear-trough-filler-kampala-juba' => 'tear-trough-filler-kampala-juba.php',
    '/hand-rejuvenation-kampala-juba' => 'hand-rejuvenation-kampala-juba.php',
    '/mesotherapy-kampala-juba' => 'mesotherapy-kampala-juba.php',
    '/skin-boosters-kampala-juba' => 'skin-boosters-kampala-juba.php',
    '/prp-hair-restoration' => 'prp-hair-restoration.php',
    '/hair-transplant' => 'hair-transplant.php',
    '/alopecia-areata' => 'alopecia-areata.php',
    '/laser-hair-removal' => 'laser-hair-removal.php',
    '/laser-tattoo-removal' => 'laser-tattoo-removal.php',
    '/microblading-kampala-juba' => 'microblading-kampala-juba.php',
    '/eyelash-treatment-kampala-juba' => 'eyelash-treatment-kampala-juba.php',
    '/scalp-micropigmentation-kampala-juba' => 'scalp-micropigmentation-kampala-juba.php',
    '/beard-transplant-kampala-juba' => 'beard-transplant-kampala-juba.php',
    '/eyebrow-transplant-kampala-juba' => 'eyebrow-transplant-kampala-juba.php',
    '/hair-mesotherapy-kampala-juba' => 'hair-mesotherapy-kampala-juba.php',
    '/em-body-sculpt' => 'em-body-sculpt.php',
    '/cryolipolysis' => 'cryolipolysis.php',
    '/non-surgical-brazilian-butt-lift' => 'non-surgical-brazilian-butt-lift.php',
    '/tummy-tuck' => 'tummy-tuck.php',
    '/gastric-sleeve-and-bypass-surgery' => 'gastric-sleeve-and-bypass-surgery.php',
    '/semaglutide-ozempic-weight-loss' => 'semaglutide-ozempic-weight-loss.php',
    '/allurion-weight-loss' => 'allurion-weight-loss.php',
    '/prp-breast-lift' => 'prp-breast-lift.php',
    '/liposuction-kampala-juba' => 'liposuction-kampala-juba.php',
    '/mommy-makeover-kampala-juba' => 'mommy-makeover-kampala-juba.php',
    '/breast-augmentation-kampala-juba' => 'breast-augmentation-kampala-juba.php',
    '/arm-lift-kampala-juba' => 'arm-lift-kampala-juba.php',
    '/thigh-lift-kampala-juba' => 'thigh-lift-kampala-juba.php',
    '/nutrition-counselling' => 'nutrition-counselling.php',
    '/cellulite-treatment-kampala-juba' => 'cellulite-treatment-kampala-juba.php',
    '/vaser-lipo-kampala-juba' => 'vaser-lipo-kampala-juba.php',
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
    '/refine-iv-lounge-kampala-juba' => 'refine-iv-lounge-kampala-juba.php',
    '/iv-therapy' => 'iv-therapy.php',
    '/inner-beauty-iv-therapy-kampala-juba' => 'inner-beauty-iv-therapy-kampala-juba.php',
    '/inner-beauty-iv-therapy' => 'inner-beauty-iv-therapy-kampala-juba.php',
    '/glutathione-IV-therapy-kampala-juba' => 'glutathione-IV-therapy-kampala-juba.php',
    '/vitamin-c-treatment-IV-therapy-treatment-kampala-juba' => 'vitamin-c-treatment-IV-therapy-treatment-kampala-juba.php',
    '/vitamin-b12-combo-IV-therapy-treatment-kampala-juba' => 'vitamin-b12-combo-IV-therapy-treatment-kampala-juba.php',
    '/amino-acids-IV-therapy-treatment-kampala-juba' => 'amino-acids-IV-therapy-treatment-kampala-juba.php',
    '/myers-magic-iv-therapy-kampala-juba' => 'myers-magic-iv-therapy-kampala-juba.php',
    '/myers-magic-iv-therapy' => 'myers-magic-iv-therapy-kampala-juba.php',
    '/myers-plus-plenish' => 'myers-plus-plenish.php',
    '/jet-lag-iv-therapy-treatment-kampala-juba' => 'jet-lag-iv-therapy-treatment-kampala-juba.php',
    '/pre-party-iv-therapy-kampala-juba' => 'pre-party-iv-therapy-kampala-juba.php',
    '/pre-party-iv-therapy' => 'pre-party-iv-therapy-kampala-juba.php',
    '/post-party-iv-therapy-kampala-juba' => 'post-party-iv-therapy-kampala-juba.php',
    '/post-party-iv-therapy' => 'post-party-iv-therapy-kampala-juba.php',
    '/anti-migraine-iv-therapy-kampala-juba' => 'anti-migraine-iv-therapy-kampala-juba.php',
    '/anti-migraine-iv-therapy' => 'anti-migraine-iv-therapy-kampala-juba.php',
    '/total-sport-iv-therapy-kampala-juba' => 'total-sport-iv-therapy-kampala-juba.php',
    '/total-sport-iv-therapy' => 'total-sport-iv-therapy-kampala-juba.php',
    '/immunity-iv-therapy-kampala-juba' => 'immunity-iv-therapy-kampala-juba.php',
    '/immunity-iv-therapy' => 'immunity-iv-therapy-kampala-juba.php',
    '/nad-iv-therapy-kampala-juba' => 'nad-iv-therapy-kampala-juba.php',
    '/nad-iv-therapy' => 'nad-iv-therapy-kampala-juba.php',
    '/hangover-iv-therapy-kampala-juba' => 'hangover-iv-therapy-kampala-juba.php',
    '/iron-infusion-kampala-juba' => 'iron-infusion-kampala-juba.php',
    '/vitamin-shots-kampala-juba' => 'vitamin-shots-kampala-juba.php',
    '/mobile-iv-service-kampala-juba' => 'mobile-iv-service-kampala-juba.php',
    '/videos' => 'videos.php',
    '/blog' => 'blog.php',
];

if (array_key_exists($path, $routeMap)) {
    require __DIR__ . '/' . $routeMap[$path];
} elseif (strpos($path, '/blog/') === 0 || $path === '/blog') {
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
