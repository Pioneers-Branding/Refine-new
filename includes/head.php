<?php
if (!headers_sent()) {
    $reqUri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    if ($reqUri !== null) {
        $reqClean = strtolower(rtrim($reqUri, '/'));
        if ($reqClean === '') {
            $reqClean = '/';
        }

        $all301Redirects = [
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
            '/microblading' => '/',
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
            '/laser-hair-removal-in-uganda-kampala-juba' => '/laser-hair-removal',
            '/weight-loss-kampala-juba' => '/semaglutide-ozempic-weight-loss',
        ];

        if (array_key_exists($reqClean, $all301Redirects)) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $all301Redirects[$reqClean], true, 301);
            exit();
        }

        if (strpos($reqClean, '/wp-json/elementskit/v1') === 0 || strpos($reqClean, '/service/slender-wonder') === 0 || strpos($reqClean, '/heres-why-your-weight-loss-regimen-isnt-paying-off') === 0) {
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
