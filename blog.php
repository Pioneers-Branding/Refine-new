<?php
// Determine path and slug for routing
$requestUri = $_SERVER['REQUEST_URI'] ?? '/blog';
$parsedPath = parse_url($requestUri, PHP_URL_PATH);
$pathClean = rtrim($parsedPath, '/');
$slug = '';

if (!empty($_GET['slug'])) {
    $slug = trim($_GET['slug']);
} elseif (!empty($_GET['article'])) {
    $slug = trim($_GET['article']);
} elseif (strpos($pathClean, '/blog/') === 0) {
    $slug = substr($pathClean, 6);
} elseif (strpos($pathClean, '/blog.php/') === 0) {
    $slug = substr($pathClean, 10);
}
$slug = trim($slug, '/');

// Complete Articles Dataset
$articles = [
    'botox-vs-dermal-fillers-which-one-should-you-choose' => [
        'slug' => 'botox-vs-dermal-fillers-which-one-should-you-choose',
        'title' => 'Botox vs Dermal Fillers: Which One Should You Choose?',
        'category' => 'Injectables & Anti-Aging',
        'category_slug' => 'injectables-anti-aging',
        'date' => 'July 5, 2026',
        'author' => 'Dr. Henry Owiny',
        'author_role' => 'Aesthetic Physician, Refine Clinic',
        'read_time' => '9 min',
        'image' => '/assets/imagesfromsite/dermal-filter-09.png',
        'excerpt' => 'An expert AEO medical comparison of Botox vs Dermal Fillers. Understand how neurotoxins relax dynamic wrinkles while hyaluronic acid fillers restore lost volume, plumping static lines, lips, and cheeks.',
        'content' => '
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <div class="flex items-center gap-3 text-accent text-xs font-bold uppercase tracking-widest mb-3">
                    <i class="fas fa-bolt"></i> Quick Comparison Summary
                </div>
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Botox vs. Dermal Fillers Overview</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed mb-6">
                    <strong>Botox</strong> is a muscle-relaxing neurotoxin designed to treat <em>dynamic wrinkles</em> caused by facial expressions (like forehead lines and crow feet). <strong>Dermal Fillers</strong> are volume-restoring hyaluronic acid gels designed to plump up <em>static wrinkles</em>, hollow cheeks, and thin lips.
                </p>
            </div>
            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Non-surgical facial rejuvenation offers refreshed, youthful skin without the downtime of surgery. At <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Skin & Body Clinic</a>, we personalize treatments to match your specific facial anatomy and skin goals.
            </p>
            <h2 class="text-2xl font-bold font-heading text-brand-deeper mt-8 mb-4">Understanding Botox</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Botox works by temporarily blocking neural signals to specific facial muscles. This allows the skin above to smooth out and prevents dynamic lines from deepening over time. Results typically last 3 to 6 months.
            </p>
            <h2 class="text-2xl font-bold font-heading text-brand-deeper mt-8 mb-4">Understanding Dermal Fillers</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Dermal fillers inject hyaluronic acid gel directly into skin layers to restore lost volume, contour jawlines, smooth nasolabial folds, and shape lips. Results last from 6 to 18 months depending on the product used.
            </p>
        '
    ],
    'top-10-daily-skincare-habits-healthy-glowing-skin' => [
        'slug' => 'top-10-daily-skincare-habits-healthy-glowing-skin',
        'title' => 'Top 10 Daily Skincare Habits for Healthy, Glowing Skin',
        'category' => 'Skincare & Maintenance',
        'category_slug' => 'skincare-maintenance',
        'date' => 'July 10, 2026',
        'author' => 'Dr. Chirag Kotecha',
        'author_role' => 'Lead Dermatological Specialist',
        'read_time' => '7 min',
        'image' => '/assets/imagesfromsite/hydra-facial-09.png',
        'excerpt' => 'Discover the top 10 daily dermatologist-approved skincare habits for healthy, radiant, glowing skin. Learn about double cleansing, hydration, sun protection, and barrier care at Refine Clinic.',
        'content' => '
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Daily Skincare Principles</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    Consistent daily care forms the foundation of healthy skin. Sun protection, gentle cleansing, active hydration, and targeted serums work synergistically to protect and repair your skin barrier.
                </p>
            </div>
            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Healthy skin requires daily commitment. At <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Clinic</a>, our dermatologists emphasize core daily habits to protect your skin barrier and enhance your natural radiance.
            </p>
            <h2 class="text-2xl font-bold font-heading text-brand-deeper mt-8 mb-4">1. Apply Broad-Spectrum Sunscreen Daily</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Sunscreen protects against UV rays that accelerate photoaging, hyperpigmentation, and loss of skin elasticity. Apply SPF 30+ every morning.
            </p>
            <h2 class="text-2xl font-bold font-heading text-brand-deeper mt-8 mb-4">2. Maintain Hydration with Quality Serums</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Hyaluronic acid and Vitamin C serums help bind moisture to the skin and neutralize environmental free radicals throughout the day.
            </p>
        '
    ],
    'what-is-melasma-can-it-be-permanently-treated' => [
        'slug' => 'what-is-melasma-can-it-be-permanently-treated',
        'title' => 'What is Melasma and Can It be Permanently Treated?',
        'category' => 'Medical Dermatology',
        'category_slug' => 'medical-dermatology',
        'date' => 'July 14, 2026',
        'author' => 'Dr. Ahmed Ashraf',
        'author_role' => 'Dermatology Specialist',
        'read_time' => '8 min',
        'image' => '/assets/imagesfromsite/acne-09.png',
        'excerpt' => 'A comprehensive medical guide on melasma hyperpigmentation, root triggers, hormonal causes, clinical treatments, and realistic guidance on achieving long-term clear skin.',
        'content' => '
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Melasma Medical Overview</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    Melasma is a chronic hyperpigmentation condition triggered by hormonal changes, UV exposure, and heat. While long-term control is achievable with chemical peels, laser therapy, and topical agents, ongoing maintenance is essential.
                </p>
            </div>
            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Melasma manifests as symmetrical brown or grayish patches on the face. Our medical team at <a href="/medical-dermatology" class="text-brand font-semibold hover:text-accent transition-colors">Refine Clinic</a> provides customized protocols to safely manage and clear melasma pigmentation.
            </p>
        '
    ],
    'can-iv-therapy-improve-skin-glow-overall-wellness' => [
        'slug' => 'can-iv-therapy-improve-skin-glow-overall-wellness',
        'title' => 'Can IV Therapy Improve Skin Glow and Overall Wellness?',
        'category' => 'Wellness & IV Therapy',
        'category_slug' => 'wellness-iv-therapy',
        'date' => 'July 18, 2026',
        'author' => 'Wendy Emyedu Ayayo',
        'author_role' => 'Nutritionist & Wellness Specialist',
        'read_time' => '6 min',
        'image' => '/assets/imagesfromsite/Combo%20of%20vit%20B-12%20and%20B%20complex-09_.png',
        'excerpt' => 'Explore how medical IV vitamin therapy, Glutathione infusions, and NAD+ drips boost cellular energy, enhance skin luminosity, and promote total body wellness at Refine IV Lounge.',
        'content' => '
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">IV Therapy Benefits</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    Intravenous vitamin infusions deliver essential nutrients directly into the bloodstream, bypassing gastrointestinal absorption limits for immediate cellular rejuvenation and skin glow.
                </p>
            </div>
            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Experience deep cellular hydration at <a href="/refine-iv-lounge-kampala-juba" class="text-brand font-semibold hover:text-accent transition-colors">Refine IV Lounge</a>. Our IV drips combine Vitamin C, Glutathione, and essential minerals tailored to your wellness needs.
            </p>
        '
    ]
];

// Check if rendering single article or blog index
$currentArticle = null;
if (!empty($slug) && isset($articles[$slug])) {
    $currentArticle = $articles[$slug];
}

// Meta setup
if ($currentArticle) {
    $metaTitle = htmlspecialchars($currentArticle['title']) . " | Refine Clinic Blog";
    $metaDescription = htmlspecialchars($currentArticle['excerpt']);
    $canonicalUrl = "https://refineskinandbody.com/blog/" . $currentArticle['slug'];
} else {
    $metaTitle = "Refine Clinic Blog | Dermatology, Weight Loss & Wellness Articles";
    $metaDescription = "Expert aesthetic insights, dermatology guides, weight loss tips, IV therapy benefits, and skin care articles by Refine Skin and Body Clinic specialists.";
    $canonicalUrl = "https://refineskinandbody.com/blog";
}

include 'includes/head.php';
include 'includes/header.php';
?>

<?php if ($currentArticle): ?>
<!-- ============================================
     SINGLE ARTICLE READER VIEW
     ============================================ -->
<main class="pt-24 lg:pt-32 pb-24 bg-surface-warm min-h-screen">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-gray-500 mb-8 font-medium">
            <a href="/" class="hover:text-brand transition-colors">Home</a>
            <span>/</span>
            <a href="/blog" class="hover:text-brand transition-colors">Blog</a>
            <span>/</span>
            <span class="text-brand font-semibold truncate max-w-[200px] sm:max-w-none"><?php echo htmlspecialchars($currentArticle['title']); ?></span>
        </nav>

        <!-- Article Header -->
        <header class="mb-10 max-w-4xl">
            <div class="inline-block bg-brand-pale text-brand text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-4">
                <?php echo htmlspecialchars($currentArticle['category']); ?>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-deeper leading-tight mb-6">
                <?php echo htmlspecialchars($currentArticle['title']); ?>
            </h1>
            
            <div class="flex flex-wrap items-center gap-4 text-xs sm:text-sm text-gray-600 border-y border-brand/10 py-4">
                <div class="flex items-center gap-2">
                    <i class="fas fa-user-md text-accent"></i>
                    <span class="font-semibold text-brand-deeper"><?php echo htmlspecialchars($currentArticle['author']); ?></span>
                </div>
                <span>&bull;</span>
                <div>
                    <i class="far fa-calendar-alt text-accent mr-1"></i>
                    <span><?php echo htmlspecialchars($currentArticle['date']); ?></span>
                </div>
                <span>&bull;</span>
                <div>
                    <i class="far fa-clock text-accent mr-1"></i>
                    <span><?php echo htmlspecialchars($currentArticle['read_time']); ?> read</span>
                </div>
            </div>
        </header>

        <!-- Featured Image -->
        <div class="rounded-3xl overflow-hidden shadow-2xl mb-12 border border-brand/10 max-h-[500px] bg-brand-pale">
            <img src="<?php echo htmlspecialchars($currentArticle['image']); ?>"
                 alt="<?php echo htmlspecialchars($currentArticle['title']); ?>"
                 class="w-full h-full object-cover">
        </div>

        <!-- Article Content + Sidebar -->
        <div class="grid lg:grid-cols-12 gap-12">
            
            <!-- Main Content -->
            <article class="lg:col-span-8 bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-brand/5 leading-relaxed text-gray-700">
                <?php echo $currentArticle['content']; ?>

                <div class="mt-12 pt-8 border-t border-brand/10 flex flex-wrap justify-between items-center gap-4">
                    <a href="/blog" class="inline-flex items-center gap-2 bg-brand text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-brand-light transition-all shadow-md">
                        <i class="fas fa-arrow-left"></i> Back to All Articles
                    </a>
                    <a href="/book-appointment" class="inline-flex items-center gap-2 bg-accent text-brand-deeper px-6 py-3 rounded-full text-sm font-semibold hover:bg-accent-light transition-all shadow-md">
                        Book Consultation <i class="fas fa-calendar-check"></i>
                    </a>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <div class="bg-brand-deeper text-white p-8 rounded-3xl shadow-xl relative overflow-hidden">
                    <h3 class="text-xl font-bold font-heading text-white mb-3">Book Your Consultation</h3>
                    <p class="text-white/80 text-sm font-light leading-relaxed mb-6">
                        Speak with our experts at Refine Skin & Body Clinic across Kampala and Juba.
                    </p>
                    <a href="/book-appointment" class="block text-center bg-accent text-brand-deeper font-bold py-3.5 rounded-full hover:bg-accent-light transition-all">
                        Schedule Appointment
                    </a>
                </div>

                <div class="bg-white p-6 rounded-3xl shadow-lg border border-brand/5">
                    <h3 class="text-lg font-bold font-heading text-brand-deeper mb-6 pb-2 border-b border-brand/10">More Articles</h3>
                    <div class="space-y-4">
                        <?php 
                        $count = 0;
                        foreach ($articles as $relSlug => $relArt):
                            if ($relSlug === $currentArticle['slug']) continue;
                            if ($count >= 3) break;
                            $count++;
                        ?>
                        <a href="/blog/<?php echo $relSlug; ?>" class="flex items-center gap-4 group">
                            <div class="w-16 h-16 rounded-xl bg-brand-pale flex-shrink-0 overflow-hidden">
                                <img src="<?php echo htmlspecialchars($relArt['image']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-accent uppercase tracking-wider block"><?php echo htmlspecialchars($relArt['category']); ?></span>
                                <h4 class="text-xs font-bold text-brand-deeper group-hover:text-accent transition-colors line-clamp-2 font-heading"><?php echo htmlspecialchars($relArt['title']); ?></h4>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php else: ?>
<!-- ============================================
     BLOG MAIN INDEX VIEW
     ============================================ -->
<main class="pt-24 lg:pt-32 pb-24 bg-surface-warm min-h-screen">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <section class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-accent font-body text-xs tracking-wider uppercase mb-3 font-semibold">Refine Insights</span>
            <h1 class="text-4xl sm:text-5xl font-display font-bold text-brand-deeper leading-tight mb-4">
                Dermatology &amp; Wellness <span class="italic font-light text-accent">Articles.</span>
            </h1>
            <p class="text-gray-600 text-base sm:text-lg font-light leading-relaxed">
                Expert insights on medical dermatology, aesthetic treatments, weight loss, and IV therapy from Refine Clinic specialists.
            </p>
        </section>

        <!-- Articles Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($articles as $artKey => $art): ?>
            <article class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group overflow-hidden border border-brand/5 flex flex-col h-full">
                <a href="/blog/<?php echo $art['slug']; ?>" class="flex flex-col h-full">
                    <div class="relative h-56 bg-brand-pale overflow-hidden">
                        <img src="<?php echo htmlspecialchars($art['image']); ?>"
                             alt="<?php echo htmlspecialchars($art['title']); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <span class="absolute top-4 left-4 bg-brand-deeper/90 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
                            <?php echo htmlspecialchars($art['category']); ?>
                        </span>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between text-xs text-gray-400 mb-3">
                            <span><i class="far fa-calendar-alt text-accent mr-1"></i><?php echo htmlspecialchars($art['date']); ?></span>
                            <span><i class="far fa-clock text-accent mr-1"></i><?php echo htmlspecialchars($art['read_time']); ?></span>
                        </div>

                        <h3 class="text-xl font-bold font-heading text-brand-deeper group-hover:text-accent transition-colors leading-snug mb-3">
                            <?php echo htmlspecialchars($art['title']); ?>
                        </h3>

                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-6 font-light flex-grow line-clamp-3">
                            <?php echo htmlspecialchars($art['excerpt']); ?>
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-brand/5 mt-auto">
                            <span class="text-xs font-semibold text-brand-deeper"><?php echo htmlspecialchars($art['author']); ?></span>
                            <span class="text-xs font-bold text-accent group-hover:translate-x-1 transition-transform flex items-center gap-1">
                                Read Article <i class="fas fa-arrow-right text-[10px]"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
