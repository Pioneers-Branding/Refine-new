<?php
if (!headers_sent()) {
    $reqUri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    if ($reqUri !== null) {
        $reqClean = strtolower(rtrim(urldecode($reqUri), '/'));
        if ($reqClean === '') {
            $reqClean = '/';
        }

        $all301Redirects = [
            '/-kampala-juba' => '/',
            '/6d-green-laser-treatment-kampala-juba' => '/6d-green-laser-in-juba',
            '/about-alison-gallagher-psychotherapist-in-uganda' => '/alison-gallagher',
            '/about-dr-ahmed ashraf reyad-dermatologist&aesthetic-medicine-specialist-from-egypt' => '/dr-ahmed-ashraf',
            '/about-dr-ahmed ashraf reyad-dermatologist&aesthetic-medicine-specialist-from-egypt.php' => '/dr-ahmed-ashraf',
            '/about-dr-ahmed-ashraf-reyad-dermatologist&aesthetic-medicine-specialist-from-egypt' => '/dr-ahmed-ashraf',
            '/about-dr-ahmed-ashraf-reyad-dermatologist&aesthetic-medicine-specialist-from-egypt.php' => '/dr-ahmed-ashraf',
            '/about-dr-henry-owiny-aesthetic-physician-in-uganda' => '/dr-henry-owiny',
            '/about-dr-vicky-koojo-nganzi-dermatologist-in-uganda' => '/dr-vicky-koojo-nganzi',
            '/about-dr-william-lubega-plastic-surgeon-in-uganda' => '/dr-william-lubega',
            '/about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda' => '/wendy-emyedu-ayayo',
            '/acne-treatment-kampala-juba' => '/acne-in-juba',
            '/ad-footer' => '/',
            '/allurion' => '/allurion-weight-loss',
            '/allurion-weight-loss-treatment-kampala-juba' => '/allurion-weight-loss-in-juba',
            '/alopecia-areata-treatment-kampala-juba' => '/alopecia-areata-in-juba',
            '/amino-acids' => '/amino-acids-iv-therapy',
            '/amino-acids-iv-therapy-treatment-kampala-juba' => '/amino-acids-iv-therapy',
            '/anti-aging-kampala-juba' => '/anti-aging',
            '/anti-migraine-iv-therapy-kampala-juba' => '/anti-migraine-iv-therapy-in-juba',
            '/appointment' => '/book-appointment',
            '/bhrt' => '/bio-identical-hormone-replacement-therapy',
            '/bio-identical-hormone-replacement-therapy-kampala' => '/bio-identical-hormone-replacement-therapy',
            '/body-contouring-kampala-juba' => '/body-contouring-in-juba',
            '/book-appointment-in-bukoto' => '/book-appointment',
            '/book-appointment-in-juba' => '/book-appointment',
            '/book-appointment-in-kabalagala' => '/book-appointment',
            '/botox-anti-aging-treatment-kampala-juba' => '/botox-in-juba',
            '/chemical-peel-treatment-kampala-juba' => '/chemical-peel-in-juba',
            '/co2' => '/co2-laser-scar-removal',
            '/co2-laser-scar-removal-kampala-juba' => '/co2-laser-scar-removal-in-juba',
            '/combo-of-vit-b-12-and-b-complex' => '/vitamin-b12-iv-therapy',
            '/cookie-policy-in-bukoto' => '/cookie-policy',
            '/cookie-policy-in-juba' => '/cookie-policy',
            '/cookie-policy-in-kabalagala' => '/cookie-policy',
            '/cool-lifting- skin-rejuvenation-kampala-juba' => '/cool-lifting-in-juba',
            '/cool-lifting--skin-rejuvenation-kampala-juba' => '/cool-lifting-in-juba',
            '/cosmetic-dermatology-kampala-juba' => '/',
            '/cryolipolysis-fat-freezing-treatment-kampala-juba' => '/cryolipolysis-in-juba',
            '/dermal-filler' => '/dermal-fillers',
            '/dermal-fillers-kampala-juba' => '/dermal-fillers-in-juba',
            '/double-chin-treatment-kampala-juba' => '/double-chin-in-juba',
            '/dr-ahmed-ashraf-dermatologist-landing-page' => '/dr-ahmed-ashraf',
            '/dr-chirag-kotecha-dermatologist-in-uganda' => '/dr-chirag-kotecha',
            '/em-body-sculpt-kampala-juba' => '/em-body-sculpt-in-juba',
            '/gastric-sleeve' => '/gastric-sleeve-and-bypass-surgery',
            '/gastric-sleeve-and-bypass-surgery-kampala-juba' => '/gastric-sleeve-and-bypass-surgery-in-juba',
            '/gift-vouchers-in-bukoto' => '/gift-vouchers',
            '/gift-vouchers-in-juba' => '/gift-vouchers',
            '/gift-vouchers-in-kabalagala' => '/gift-vouchers',
            '/glutathione' => '/glutathione-iv-therapy',
            '/glutathione-iv-therapy-kampala-juba' => '/glutathione-iv-therapy',
            '/hair-loss-treatment-kampala-juba' => '/hair-loss-in-juba',
            '/hair-transplant-kampala-juba' => '/hair-transplant-in-juba',
            '/heres-why-your-weight-loss-regimen-isnt-paying-off' => '/',
            '/hydra-facial' => '/hydrafacial',
            '/hydra-new' => '/hydrafacial',
            '/hydra-temp' => '/hydrafacial',
            '/hydra-test' => '/hydrafacial',
            '/hydrafacial-landing-page' => '/hydrafacial-in-juba',
            '/hydrafacial-treatment-kampala-juba' => '/hydrafacial-in-juba',
            '/hyperpigmentation-melasma-treatment-kampala-juba' => '/hyperpigmentation-melasma-in-juba',
            '/images/iv-book3.pdf' => '/iv-therapy',
            '/index.html' => '/',
            '/inner-beauty-iv-therapy-kampala-juba' => '/inner-beauty-iv-therapy-in-juba',
            '/is-glutathione-the-magic-bullet' => '/glutathione-iv-therapy',
            '/iv-therapy-kampala-juba' => '/iv-therapy-in-juba',
            '/jet-lag' => '/jet-lag-iv-therapy',
            '/jet-lag-iv-therapy-treatment-kampala-juba' => '/jet-lag-iv-therapy',
            '/jinja' => '/',
            '/joint-&-tissue-rejuvenation-with-prp' => '/joint-and-tissue-rejuvenation',
            '/joint-and-tissue-rejuvenation-kampala-juba' => '/joint-and-tissue-rejuvenation-in-juba',
            '/juba' => '/',
            '/laser-hair-lemoval' => '/laser-hair-removal',
            '/laser-skin-rejuvenation-in-uganda-kampala-juba' => '/laser-skin-rejuvenation-in-juba',
            '/laser-tattoo' => '/laser-tattoo-removal',
            '/laser-tattoo-removal-in-uganda-kampala-juba' => '/laser-tattoo-removal-in-juba',
            '/laser-treatments-kampala-juba' => '/laser-treatments',
            '/led-light-therapy-kampala-juba' => '/led-light-therapy-in-juba',
            '/lip-volumization-kampala-juba' => '/lip-volumization-in-juba',
            '/liquid-rhinoplasty' => '/non-surgical-liquid-rhinoplasty',
            '/m-shot-treatment-kampala-juba' => '/m-shot-in-juba',
            '/medical-dermatology-kampala-juba' => '/medical-dermatology-in-juba',
            '/microblading-kampala-juba' => '/microblading',
            '/myers-magic-iv-therapy-kampala-juba' => '/myers-magic-iv-therapy-in-juba',
            '/nad' => '/nad-iv-therapy',
            '/non-surgical-brazilian-butt-lift-kampala-juba' => '/non-surgical-brazilian-butt-lift-in-juba',
            '/non-surgical-liquid-rhinoplasty-kampala-juba' => '/non-surgical-liquid-rhinoplasty-in-juba',
            '/omg-shot-treatment-kampala-juba' => '/omg-shot-in-juba',
            '/pcdc-fat-dissolving-kampala-juba' => '/pcdc-fat-dissolving-in-juba',
            '/pcdc-fat-dissolving-old' => '/pcdc-fat-dissolving',
            '/performance-and-recovery' => '/',
            '/plasma-pen-therapy-kampala-juba' => '/plasma-pen-therapy-in-juba',
            '/platelet-rich-plasma-facial-kampala-juba' => '/platelet-rich-plasma-facial-in-juba',
            '/post-party-iv-therapy-kampala-juba' => '/post-party-iv-therapy-in-juba',
            '/pre-party-iv-therapy-kampala-juba' => '/pre-party-iv-therapy-in-juba',
            '/prp-breast-lift-kampala-juba' => '/prp-breast-lift-in-juba',
            '/prp-face-lift-kampala-juba' => '/prp-face-lift-in-juba',
            '/prp-facial' => '/platelet-rich-plasma-facial',
            '/prp-hair-restoration-kampala-juba' => '/prp-hair-restoration-in-juba',
            '/prp-treatments-kampala-juba' => '/prp-treatments',
            '/psoriasis-treatment-kampala-juba' => '/psoriasis-in-juba',
            '/refine-iv-lounge-kampala-juba' => '/refine-iv-lounge',
            '/rf-microneedling-kampala-juba' => '/rf-microneedling-in-juba',
            '/rosacea-treatment-kampala-juba' => '/rosacea-in-juba',
            '/scar-treatment-kampala-juba' => '/scar-in-juba',
            '/sculptra-face-lift-kampala-juba' => '/sculptra-face-lift-in-juba',
            '/semaglutide' => '/semaglutide-ozempic-weight-loss',
            '/semaglutide-ozempic-weight-loss-kampala-juba' => '/semaglutide-ozempic-weight-loss-in-juba',
            '/september-glow-deals-bukoto-landing-page' => '/',
            '/service/acne' => '/acne',
            '/service/dermal-fillers' => '/dermal-fillers',
            '/service/hydrafacial' => '/hydrafacial',
            '/service/laser-tattoo-removal' => '/laser-tattoo-removal',
            '/service/slender-wonder' => '/',
            '/service/thread-lifting' => '/thread-lifting',
            '/service/vampire-face-lift' => '/prp-face-lift',
            '/sidebar' => '/',
            '/sidebar-temp' => '/',
            '/skin-and-body-rejuvenation-kampala-juba' => '/skin-rejuvenation',
            '/skin-cancer-treatment-kampala-juba' => '/skin-cancer-in-juba',
            '/skin-lightening-with-crystal-tomato' => '/',
            '/skin-lightening-with-tatioactive' => '/skin-lightening-with-tatioactive-kampala-juba',
            '/stretch-marks-treatment-kampala-juba' => '/stretch-marks-in-juba',
            '/tag/skin-cleansing/feed' => '/blog',
            '/testimonials' => '/patient-reviews',
            '/the-m-shot' => '/m-shot',
            '/the-omg-shot' => '/omg-shot',
            '/the-prp-breast' => '/prp-breast-lift',
            '/the-prp-face' => '/prp-face-lift',
            '/thread-lifting-treatment-kampala-juba' => '/thread-lifting-in-juba',
            '/total-sport-iv-therapy-kampala-juba' => '/total-sport-iv-therapy-in-juba',
            '/tummy-tuck-abdominoplastv' => '/tummy-tuck',
            '/tummy-tuck-abdominoplasty-kampala-juba' => '/tummy-tuck-in-juba',
            '/tummy-tuck-abdominoplasty-old' => '/tummy-tuck',
            '/vitamin-b12-combo-iv-therapy-treatment-kampala-juba' => '/vitamin-b12-iv-therapy',
            '/vitamin-c' => '/vitamin-c-iv-therapy',
            '/vitamin-c-treatment-iv-therapy-treatment-kampala-juba' => '/vitamin-c-iv-therapy',
            '/vitiligo-treatment-kampala-juba' => '/vitiligo-in-juba',
            '/wonder-axon-treatment-kampala-juba' => '/wonder-axon-treatment-in-juba',
            '/wp-json/elementskit/v1' => '/',
        ];

        if (array_key_exists($reqClean, $all301Redirects)) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $all301Redirects[$reqClean], true, 301);
            exit();
        }

        // Prefix / wildcard checks
        if (strpos($reqClean, '/wp-json/elementskit/v1') === 0 || 
            strpos($reqClean, '/service/slender-wonder') === 0 || 
            strpos($reqClean, '/heres-why-your-weight-loss-regimen-isnt-paying-off') === 0) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /", true, 301);
            exit();
        }
        if (strpos($reqClean, '/is-glutathione-the-magic-bullet') === 0) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /glutathione-iv-therapy", true, 301);
            exit();
        }
        if (strpos($reqClean, '/tag/skin-cleansing/feed') === 0) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /blog", true, 301);
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VS6ZJYCGBW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VS6ZJYCGBW');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Refine Skin and Body Clinic">

    <!-- SEO -->
    <title><?php echo isset($metaTitle) ? $metaTitle : "Dermatology Clinic in Kampala | Refine Skin &amp; Body Clinic"; ?></title>
    <meta name="description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : "Expert dermatologists in Kampala &amp; Juba providing professional skin care for all conditions. From medical dermatology to aesthetic treatments, get personalised care at Refine Skin and Body Clinic."; ?>">
    <meta name="keywords" content="<?php echo isset($metaKeywords) ? htmlspecialchars($metaKeywords) : "Skin Care Clinic Kampala, Dermatology clinics in Kampala, Dermatologist in Kampala, Skin treatments Uganda, Refine clinic juba"; ?>">
    <link rel="canonical" href="<?php echo isset($canonicalUrl) ? $canonicalUrl : "https://refineskinandbody.com"; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($canonicalUrl) ? $canonicalUrl : "https://refineskinandbody.com/"; ?>">
    <meta property="og:image" content="https://refineskinandbody.com/assets/imagesfromsite/refine-logo.webp">
    <meta property="og:title" content="<?php echo isset($metaTitle) ? $metaTitle : "Dermatology &amp; Aesthetic Clinic in Kampala | Refine Skin &amp; Body Clinic"; ?>">
    <meta property="og:description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : "Experience top-tier aesthetic treatments in Kampala &amp; Juba at Refine Skin and Body Clinic."; ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/imagesfromsite/fab2.webp" type="image/webp">
    <link rel="icon" href="/assets/imagesfromsite/fab2.webp" type="image/webp">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/imagesfromsite/fab2.webp">

    <!-- Google Fonts — Editorial Pairing -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#432C86',
                            light: '#5a3ba8',
                            dark: '#2e1d5e',
                            deeper: '#1a0f3c',
                            pale: '#ede9f5',
                            faint: '#f8f6fc',
                            muted: '#8b7bb5',
                        },
                        accent: {
                            DEFAULT: '#C9A96E',
                            light: '#d4bc8e',
                            dark: '#b08e4a',
                            cream: '#f5eed9',
                        },
                        surface: {
                            DEFAULT: '#ede9f5',
                            warm: '#faf8f5',
                            cool: '#f0edf7',
                        },
                    },
                    fontFamily: {
                        display: ['"Playfair Display"', 'Georgia', 'serif'],
                        heading: ['"Bricolage Grotesque"', 'sans-serif'],
                        body: ['"Inter"', 'system-ui', 'sans-serif'],
                    },
                    fontSize: {
                        'hero': ['clamp(2.5rem, 6vw, 5.5rem)', { lineHeight: '1.02', letterSpacing: '-0.035em' }],
                        'section': ['clamp(1.6rem, 3.1vw, 2.9rem)', { lineHeight: '1.1', letterSpacing: '-0.025em' }],
                        'subhead': ['clamp(1rem, 1.6vw, 1.25rem)', { lineHeight: '1.4', letterSpacing: '-0.01em' }],
                    },
                    borderRadius: {
                        '4xl': '2rem',
                        '5xl': '2.5rem',
                    },
                    backdropBlur: {
                        xs: '2px',
                    },
                },
            },
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body class="font-body text-gray-800 antialiased overflow-x-hidden bg-white">
