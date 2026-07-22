<?php
// Determine path and slug for routing
$requestUri = $_SERVER['REQUEST_URI'] ?? '/blog';
$parsedPath = parse_url($requestUri, PHP_URL_PATH);
$pathClean = rtrim($parsedPath, '/');
$slug = '';

if (strpos($pathClean, '/blog/') === 0) {
    $slug = substr($pathClean, 6);
} elseif (isset($_GET['slug'])) {
    $slug = trim($_GET['slug']);
} elseif (isset($_GET['article'])) {
    $slug = trim($_GET['article']);
}

// Complete Articles Dataset
$articles = [
    // ----------------------------------------------------
    // ARTICLE 1: BOTOX VS DERMAL FILLERS
    // ----------------------------------------------------
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
            <!-- AEO Direct Answer Highlight Box -->
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <div class="flex items-center gap-3 text-accent text-xs font-bold uppercase tracking-widest mb-3">
                    <i class="fas fa-bolt"></i> AEO Quick Answer Summary
                </div>
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Botox vs. Dermal Fillers: Quick Comparison</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed mb-6">
                    <strong>The Key Difference:</strong> <strong>Botox</strong> is a muscle-relaxing neurotoxin designed to stop <em>dynamic wrinkles</em> caused by repetitive facial expressions (like forehead lines and crow’s feet). <strong>Dermal Fillers</strong> are volume-restoring hyaluronic acid gels designed to plump up <em>static wrinkles</em>, hollow cheeks, thin lips, and restore facial volume lost to aging.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 text-xs sm:text-sm border-t border-white/10 pt-4">
                    <div>
                        <span class="text-accent font-semibold block mb-1">Choose Botox If You Want To:</span>
                        <ul class="list-disc pl-4 text-white/80 space-y-1 font-light">
                            <li>Smooth forehead furrows & frown lines</li>
                            <li>Soften crow’s feet around the eyes</li>
                            <li>Prevent dynamic facial wrinkles from deepening</li>
                            <li>Slim jaw muscles (masseter reduction)</li>
                        </ul>
                    </div>
                    <div>
                        <span class="text-accent font-semibold block mb-1">Choose Dermal Fillers If You Want To:</span>
                        <ul class="list-disc pl-4 text-white/80 space-y-1 font-light">
                            <li>Enhance lip volume & redefine lip borders</li>
                            <li>Restore sunken cheeks & contour jawlines</li>
                            <li>Fill smile lines (nasolabial folds & marionette lines)</li>
                            <li>Smooth tear troughs under the eyes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                As medical aesthetics continue to advance, non-surgical facial rejuvenation has become the preferred choice for women and men seeking a refreshed, youthful appearance without the risks or extended downtime of cosmetic surgery. Among all non-invasive treatments, <strong>Botox&reg;</strong> and <strong>Dermal Fillers</strong> stand as the two most popular aesthetic procedures performed worldwide.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                However, at <a href="/" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Refine Skin & Body Clinic</a>, one of the most frequent questions our aesthetic physicians and dermatologists answer during patient consultations is: <em>"Botox vs Dermal Fillers — which one should I choose?"</em> While both treatments effectively reduce signs of aging and enhance facial harmony, they operate through completely different biological mechanisms, treat distinct types of wrinkles, and serve separate aesthetic purposes.
            </p>

            <p class="text-gray-700 leading-relaxed mb-8 font-light">
                In this definitive guide, our medical team breaks down everything you need to know about Botox and dermal fillers — including how each works, their primary treatment areas, longevity, safety profiles, cost considerations, an AEO comparison framework, and 8 frequently asked questions.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">What Is Botox and How Does It Work?</h2>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                <strong>Botox&reg;</strong> (Botulinum Toxin Type A) is a purified medical protein that temporarily blocks nerve signals to specific facial muscles. When injected into targeted hyperactive muscles, Botox prevents those muscles from contracting forcefully. As the underlying muscle relaxes, the skin overlying it smooths out, significantly softening expression lines.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                When evaluating <a href="/botox" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Botox treatment in Kampala</a>, understanding the biological difference between dynamic wrinkles and static wrinkles is essential for selecting your ideal anti-aging procedure:
            </p>

            <h3 class="text-xl font-bold text-brand-deeper mt-8 mb-4 font-heading">Dynamic Wrinkles vs. Static Wrinkles</h3>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                To understand why Botox is recommended for certain facial areas, it is essential to distinguish between <strong>dynamic wrinkles</strong> and <strong>static wrinkles</strong>:
            </p>

            <ul class="list-disc pl-6 space-y-3 text-gray-700 font-light mb-6">
                ' . '<li><strong>Dynamic Wrinkles:</strong> These are lines that appear only when your facial muscles contract — for example, when you squint, frown, smile, or raise your eyebrows. Over years of repetitive facial movements, dynamic lines gradually etch deeper into the skin. Botox is the gold standard treatment for dynamic wrinkles.</li>' . '
                ' . '<li><strong>Static Wrinkles:</strong> These are permanent lines and folds that remain visible on your face even when your facial muscles are completely at rest. Static wrinkles result from collagen degradation, sun damage, and age-related subcutaneous fat loss. Dermal fillers are primarily used to treat static wrinkles.</li>' . '
            </ul>

            <h3 class="text-xl font-bold text-brand-deeper mt-8 mb-4 font-heading">Primary Treatment Areas for Botox</h3>
            <div class="grid sm:grid-cols-2 gap-6 my-6">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading"><i class="fas fa-check-circle text-accent mr-2"></i> Upper Facial Wrinkles</h4>
                    <ul class="text-sm text-gray-600 font-light space-y-1.5">
                        <li>Glabellar lines ("11" frown lines between brows)</li>
                        <li>Horizontal forehead lines</li>
                        <li>Crow’s feet (fine lines at outer eye corners)</li>
                        <li>Bunny lines (creases on sides of the nose)</li>
                    </ul>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading"><i class="fas fa-check-circle text-accent mr-2"></i> Facial Sculpting & Medical Uses</h4>
                    <ul class="text-sm text-gray-600 font-light space-y-1.5">
                        <li>Masseter muscle reduction (jaw slimming & teeth grinding relief)</li>
                        <li>Nefertiti neck lift & platysmal band smoothing</li>
                        <li>Gummy smile correction</li>
                        <li>Hyperhidrosis (excessive underarm sweating)</li>
                    </ul>
                </div>
            </div>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                <strong>Onset & Longevity:</strong> The results of Botox are not instantaneous. Initial softening begins within 3 to 5 days, with full clinical results appearing at 10 to 14 days post-injection. Botox results typically last between <strong>3 to 4 months</strong>, after which muscle activity gradually returns, and follow-up maintenance sessions are recommended.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">What Are Dermal Fillers and How Do They Work?</h2>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                <strong>Dermal Fillers</strong> are injectable smooth gels formulated to restore lost volume, smooth deep facial folds, enhance facial contours, and hydrate skin from within. Unlike Botox, which relaxes muscles, dermal fillers act as a supportive matrix underneath the skin to physically lift and plump tissue.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                For patients seeking <a href="/dermal-fillers" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Dermal Fillers Treatment in Kampala</a>, the vast majority of modern premium dermal fillers used at Refine Clinic — such as Juvederm&reg;, Restylane&reg;, and Belotero&reg; — are composed of <strong>Hyaluronic Acid (HA)</strong>. Hyaluronic acid is a naturally occurring sugar molecule in human skin that attracts and holds up to 1,000 times its weight in water, maintaining skin elasticity and volume.
            </p>

            <h3 class="text-xl font-bold text-brand-deeper mt-8 mb-4 font-heading">Primary Treatment Areas for Dermal Fillers</h3>
            <div class="grid sm:grid-cols-3 gap-4 my-6">
                <div class="bg-surface-warm p-5 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper text-sm mb-2 font-heading">Lip Enhancement</h4>
                    <p class="text-xs text-gray-600 font-light">Adds natural volume, defines lip borders (vermilion border), corrects asymmetry, and smooths smoker’s lines.</p>
                </div>
                <div class="bg-surface-warm p-5 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper text-sm mb-2 font-heading">Cheek & Mid-Face Lift</h4>
                    <p class="text-xs text-gray-600 font-light">Restores youthful malar cheek volume, lifts sagging lower face tissue, and projects high cheekbones.</p>
                </div>
                <div class="bg-surface-warm p-5 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper text-sm mb-2 font-heading">Nasolabial & Marionette Folds</h4>
                    <p class="text-xs text-gray-600 font-light">Fills deep smile lines running from the nose to mouth corners, and marionette lines down to the chin.</p>
                </div>
            </div>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                <strong>Onset & Longevity:</strong> The volume-enhancing results of Hyaluronic Acid fillers are visible <strong>immediately</strong> upon injection. Depending on the density of the filler gel, treatment area, and metabolic rate, dermal filler results last between <strong>6 to 18 months</strong>.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Head-to-Head Comparison: Botox vs. Dermal Fillers</h2>

            <div class="overflow-x-auto my-8">
                <table class="w-full text-left border-collapse bg-white rounded-2xl overflow-hidden shadow-sm border border-brand/10">
                    <thead>
                        <tr class="bg-brand text-white text-xs sm:text-sm font-heading">
                            <th class="p-4">Feature</th>
                            <th class="p-4">Botox&reg; (Neurotoxin)</th>
                            <th class="p-4">Dermal Fillers (Hyaluronic Acid)</th>
                        </tr>
                    </thead>
                    <tbody class="text-xs sm:text-sm text-gray-700 font-light divide-y divide-brand/5">
                        <tr>
                            <td class="p-4 font-bold text-brand-deeper">Primary Function</td>
                            <td class="p-4">Relaxes hyperactive facial muscles</td>
                            <td class="p-4">Restores lost volume & plumps tissues</td>
                        </tr>
                        <tr class="bg-surface-warm/50">
                            <td class="p-4 font-bold text-brand-deeper">Wrinkle Type Treated</td>
                            <td class="p-4">Dynamic wrinkles (expression lines)</td>
                            <td class="p-4">Static wrinkles & structural facial hollows</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-bold text-brand-deeper">Result Onset Time</td>
                            <td class="p-4">3 to 5 days (Full effect at 14 days)</td>
                            <td class="p-4">Immediate results post-procedure</td>
                        </tr>
                        <tr class="bg-surface-warm/50">
                            <td class="p-4 font-bold text-brand-deeper">Average Duration</td>
                            <td class="p-4">3 to 4 months</td>
                            <td class="p-4">6 to 18+ months</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Combining Botox & Fillers: The "Liquid Facelift"</h2>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Combining both treatments in a customized protocol — often referred to as a <strong>"Liquid Facelift"</strong> — delivers superior, total-face rejuvenation.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Safety Profile, Side Effects & Medical Guidance</h2>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Both Botox and Hyaluronic Acid dermal fillers possess exceptional safety track records when administered by qualified medical doctors.
            </p>

            <hr class="my-10 border-brand/10" />

            <!-- Frequently Asked Questions Section (8 AEO Questions) -->
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-12 mb-8 font-heading flex items-center gap-3">
                <i class="fas fa-question-circle text-accent"></i> Frequently Asked Questions (FAQs)
            </h2>

            <div class="space-y-4 my-8">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q1: Can I get Botox and dermal fillers done during the same appointment?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed"><strong>Yes, absolutely.</strong> It is safe and common practice to receive Botox and dermal fillers in a single session.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q2: Which treatment lasts longer: Botox or Dermal Fillers?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed"><strong>Dermal Fillers last longer.</strong> While Botox lasts 3-4 months, HA fillers last 6 to 18 months.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q3: Are dermal fillers more painful than Botox injections?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Both treatments involve minimal discomfort. Topical numbing cream makes the process comfortable.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q4: Can dermal fillers be dissolved if I am unhappy with the result?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed"><strong>Yes.</strong> Hyaluronic Acid fillers can be instantly dissolved using Hyaluronidase enzyme.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q5: Will Botox make my face look frozen or expressionless?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed"><strong>No, not when administered by an experienced doctor.</strong> Micro-dosing preserves natural expressions.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q6: What is the ideal age to start getting Botox or dermal fillers?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Many start Preventative Botox in their mid-to-late 20s, and fillers in their late 20s or 30s.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q7: What is the downtime and recovery period after Botox vs. fillers?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Both procedures have zero required social downtime. You can return to work immediately.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q8: How do I choose between Botox and fillers for my specific face?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Upper face lines from expression respond to Botox; lower face volume loss responds to Fillers.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading flex items-center gap-3">
                <i class="fas fa-lightbulb text-accent"></i> Final Thoughts: Achieving Natural, Youthful Rejuvenation
            </h2>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                The goal of aesthetic treatment at <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Skin & Body Clinic</a> is to enhance your unique facial harmony — leaving you looking refreshed, confident, and beautifully rejuvenated.
            </p>
        '
    ],

    // ----------------------------------------------------
    // ARTICLE 2: TOP 10 DAILY SKINCARE HABITS FOR GLOWING SKIN
    // ----------------------------------------------------
    'top-10-daily-skincare-habits-healthy-glowing-skin' => [
        'slug' => 'top-10-daily-skincare-habits-healthy-glowing-skin',
        'title' => 'Top 10 Daily Skincare Habits for Healthy, Glowing Skin',
        'category' => 'Dermatology & Skin Care',
        'category_slug' => 'dermatology-skin',
        'date' => 'July 10, 2026',
        'author' => 'Dr. Chirag Kotecha',
        'author_role' => 'Lead Dermatologist, Refine Clinic',
        'read_time' => '8 min',
        'image' => '/assets/imagesfromsite/hydra-facial-09.png',
        'excerpt' => 'Discover the top 10 daily dermatologist-approved skincare habits for healthy, radiant, glowing skin. Learn about double cleansing, hydration, sun protection, and barrier care at Refine Clinic.',
        'content' => '
            <!-- AEO Direct Answer Highlight Box -->
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <div class="flex items-center gap-3 text-accent text-xs font-bold uppercase tracking-widest mb-3">
                    <i class="fas fa-bolt"></i> AEO Quick Answer Summary
                </div>
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">How to Get Healthy, Glowing Skin Daily</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    Achieving radiant skin requires consistency in 5 core pillars: <strong>Gentle Double Cleansing</strong>, <strong>Daily Broad-Spectrum SPF 50+ Sunscreen</strong>, <strong>Barrier-Repairing Hydration</strong>, <strong>Antioxidant Protection (Vitamin C)</strong>, and <strong>Quality Sleep with Hydration</strong>. Visiting a professional <a href="/" class="text-accent underline font-semibold">Skin Clinic in Uganda</a> ensures your daily skincare routine is tailored specifically to your skin type.
                </p>
            </div>

            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Healthy, luminous skin is not the result of chance; it is the direct outcome of daily, intentional skincare habits. Whether you struggle with stubborn hyperpigmentation, uneven skin texture, adult breakouts, or dullness, building a consistent daily regimen forms the bedrock of long-term dermatological health.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                At our premier <a href="/" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Skin Clinic in Uganda</a>, our dermatologists emphasize that proper daily homecare enhances and preserves the clinical results of medical treatments like HydraFacials, chemical peels, and laser skin rejuvenation.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">The Science of a Healthy Skin Barrier</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Your stratum corneum (outermost skin layer) acts as a protective shield against environmental pollutants, UV radiation, and pathogenic bacteria while locking in moisture. When your skin barrier is compromised through harsh scrubbing, over-exfoliation, or skipping sunscreen, moisture escapes (trans-epidermal water loss), leading to inflammation, sensitivity, and dark spots.
            </p>

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Top 10 Daily Skincare Habits for Radiant Skin</h2>
            
            <div class="space-y-6 my-8">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">1. Practice Gentle Double Cleansing at Night</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Start with an oil-based cleanser or micellar water to break down stubborn sunscreen and makeup, followed by a gentle sulfate-free hydrating cleanser to wash away sweat and impurities without stripping natural oils.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">2. Apply Broad-Spectrum Sunscreen (SPF 50+) Daily</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">UV radiation is responsible for 80% of premature skin aging and hyperpigmentation. Apply a generous 2-finger amount of broad-spectrum SPF 50+ every single morning, even on cloudy days or indoors.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">3. Incorporate Vitamin C Serum Every Morning</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">L-Ascorbic Acid (Vitamin C) is a potent antioxidant that neutralizes free radicals caused by pollution and UV light, brightens dull skin tones, and boosts collagen synthesis.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">4. Hydrate Layer by Layer with Hyaluronic Acid</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Apply a hydrating serum containing Hyaluronic Acid or Glycerin onto slightly damp skin immediately after cleansing to bind hydration deep into dermal layers.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">5. Seal Moisture with Ceramides & Niacinamide</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Niacinamide (Vitamin B3) soothes redness, regulates sebum, and shrinks appearance of pores, while Ceramides repair damaged lipid barriers.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">6. Never Sleep in Makeup</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Sleeping with makeup traps environmental grime, clogs pores, and leads to comedonal breakouts and dull skin texture.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">7. Exfoliate Wisely (1 to 2 Times Weekly)</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Swap abrasive physical scrubs for gentle chemical exfoliants like Glycolic acid (AHA) for dry skin or Salicylic acid (BHA) for oily, acne-prone skin.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">8. Drink at Least 2.5 Liters of Water Daily</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Internal hydration supports cellular turgor, flushes metabolic toxins, and gives skin a natural supple glow.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">9. Change Pillowcases & Clean Phone Screens Regularly</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Pillowcases collect oils, dead skin cells, and bacteria overnight. Switch to silk or cotton pillowcases and wash them weekly.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">10. Prioritize 7 to 8 Hours of Beauty Sleep</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">During deep sleep cycles, blood flow to the skin increases, human growth hormone triggers cellular repair, and collagen production peaks.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <!-- Frequently Asked Questions Section (8 AEO Questions) -->
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-12 mb-8 font-heading flex items-center gap-3">
                <i class="fas fa-question-circle text-accent"></i> Frequently Asked Questions (FAQs)
            </h2>

            <div class="space-y-4 my-8">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q1: How long does it take to see results from a new daily skincare routine?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Skin cell turnover takes approximately 28 to 40 days. Consistent use of a new skincare routine shows noticeable improvements within 4 to 6 weeks.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q2: Should I apply sunscreen if I stay indoors all day?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. UVA rays penetrate window glass and cause premature skin aging and hyperpigmentation even indoors.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q3: Is double cleansing necessary if I do not wear heavy makeup?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. Double cleansing effectively breaks down water-resistant sunscreen, sebum, and airborne micro-pollutants that standard cleansers leave behind.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q4: What order should I apply my skincare products in?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Apply products from thinnest to thickest consistency: Cleanser &rarr; Toner/Essence &rarr; Serums &rarr; Eye Cream &rarr; Moisturizer &rarr; Sunscreen (AM).</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q5: Can drinking more water clear active acne?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Hydration supports skin healing, but active acne often requires clinical topical actives like Salicylic Acid, Retinoids, or professional dermatological treatment.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q6: What is the best way to treat stubborn hyperpigmentation?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Combining daily SPF 50+ with targeted tyrosinase inhibitors (Vitamin C, Niacinamide, Tranexamic acid) and clinical treatments like medical chemical peels produces superior results.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q7: Can I use Vitamin C and Retinol together?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">It is best to separate them: use Vitamin C in the morning for antioxidant defense and Retinol at night for cellular renewal to prevent irritation.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading flex items-center gap-3">
                <i class="fas fa-lightbulb text-accent"></i> Final Thoughts
            </h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Establishing healthy skincare habits creates a radiant canvas. For personalized skin analysis and customized medical skin treatments, visit <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Skin & Body Clinic</a> today.
            </p>
        '
    ],

    // ----------------------------------------------------
    // ARTICLE 3: WHAT IS MELASMA AND CAN IT BE PERMANENTLY TREATED?
    // ----------------------------------------------------
    'what-is-melasma-can-it-be-permanently-treated' => [
        'slug' => 'what-is-melasma-can-it-be-permanently-treated',
        'title' => 'What is Melasma and Can It be Permanently Treated?',
        'category' => 'Dermatology & Skin Care',
        'category_slug' => 'dermatology-skin',
        'date' => 'July 15, 2026',
        'author' => 'Dr. Chirag Kotecha',
        'author_role' => 'Lead Dermatologist, Refine Clinic',
        'read_time' => '9 min',
        'image' => '/assets/imagesfromsite/skin-lightening-tatioactive-09.png',
        'excerpt' => 'A comprehensive medical guide on melasma hyperpigmentation, root triggers, hormonal causes, clinical treatments, and realistic guidance on achieving long-term clear skin.',
        'content' => '
            <!-- AEO Direct Answer Highlight Box -->
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <div class="flex items-center gap-3 text-accent text-xs font-bold uppercase tracking-widest mb-3">
                    <i class="fas fa-bolt"></i> AEO Quick Answer Summary
                </div>
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Can Melasma Be Permanently Cured?</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    <strong>Medical Reality:</strong> While melasma cannot be 100% "cured" permanently due to underlying hormonal and genetic memory, it can be <strong>90%+ faded and successfully controlled long-term</strong> through specialized <a href="/hyperpigmentation-melasma" class="text-accent underline font-semibold">Melasma treatment in Juba</a> and Kampala, combining targeted chemical peels, Q-switched lasers, medical tyrosinase inhibitors, and strict sun protection at <a href="/" class="text-accent underline font-semibold">Refine Skin & Body Clinic</a>.
                </p>
            </div>

            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Melasma — often called the "mask of pregnancy" or chloasma — is a chronic dermatological condition characterized by symmetrical, dark brown or greyish patches on the cheeks, forehead, nose bridge, chin, and upper lip. It is especially prevalent in darker melanin-rich skin tones across East Africa.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                At <a href="/" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Refine Skin & Body Clinic</a>, one of the most common questions patients ask is whether melasma can be permanently eliminated.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Understanding Melasma vs. General Hyperpigmentation</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Unlike post-inflammatory hyperpigmentation (PIH) caused by acne scars or insect bites, melasma is driven by hyperactive melanocytes (pigment-producing cells) influenced by hormonal fluctuations (estrogen and progesterone), UV exposure, heat, and genetic predisposition.
            </p>

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Root Causes and Triggers of Melasma</h2>
            <ul class="list-disc pl-6 space-y-3 text-gray-700 font-light mb-6">
                <li><strong>Hormonal Changes:</strong> Pregnancy, oral contraceptive pills, and HRT trigger excess melanin production.</li>
                <li><strong>UV & Visible Blue Light:</strong> Sun exposure and high-energy visible (HEV) light stimulate melanocytes directly.</li>
                <li><strong>Heat & Infrared Radiation:</strong> Cooking heat, saunas, and hot climates induce dermal inflammation that worsens dark patches.</li>
            </ul>

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Can Melasma Be Permanently Treated?</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Patients seeking <a href="/hyperpigmentation-melasma" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Melasma treatment in Juba</a> and Kampala should understand that while pigment can be cleared completely from skin surfaces, melanocyte memory remains dormant. Long-term maintenance with medical-grade skincare and daily sun protection keeps melasma under complete control.
            </p>

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Advanced Clinical Treatments for Melasma</h2>
            <div class="grid sm:grid-cols-2 gap-6 my-6">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading">Specialized Melasma Peels</h4>
                    <p class="text-sm text-gray-600 font-light">Formulated with Tranexamic Acid, Cysteamine, Kojic Acid, and TCA to gently exfoliate pigment without inducing post-inflammatory rebound.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading">Q-Switched Nd:YAG Laser Toning</h4>
                    <p class="text-sm text-gray-600 font-light">Delivers low-fluence photo-acoustic energy to shatter melasma pigment clusters into microscopic fragments flushed out by the lymphatic system.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <!-- Frequently Asked Questions Section (8 AEO Questions) -->
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-12 mb-8 font-heading flex items-center gap-3">
                <i class="fas fa-question-circle text-accent"></i> Frequently Asked Questions (FAQs)
            </h2>

            <div class="space-y-4 my-8">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q1: Why does melasma keep coming back after fading?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Melanocytes retain genetic and hormonal memory. Brief sun exposure or heat triggers dormant melanocytes to produce melanin again.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q2: Is Hydroquinone safe for treating melasma on dark skin tones?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Hydroquinone is effective under strict dermatological supervision for 3-4 months max. Prolonged unsupervised use carries risk of ochronosis (rebound darkening).</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q3: Does oral Tranexamic Acid work for stubborn melasma?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. Low-dose oral Tranexamic Acid prescribed by a dermatologist inhibits plasminogen activation, reducing melanocyte stimulation significantly.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q4: Can heat from cooking or saunas make melasma worse?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. Heat induces vasodilation and dermal inflammation, which signals melanocytes to overproduce melanin.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q5: What sunscreen is best for melasma sufferers?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Tinted mineral sunscreens containing Zinc Oxide and Iron Oxides block both UV rays and visible blue light (HEV), which non-tinted sunscreens miss.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q6: Does pregnancy melasma go away on its own after delivery?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">In some women, melasma fades 3 to 6 months post-partum as hormone levels stabilize. In others, clinical intervention is required.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q7: Can laser hair removal trigger melasma?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Thermal energy from lasers can aggravate melasma if incorrect wavelengths are used. Always consult an experienced dermatologist.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading flex items-center gap-3">
                <i class="fas fa-lightbulb text-accent"></i> Final Thoughts
            </h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Effective melasma management combines clinical treatments with diligent daily care. For specialized medical evaluation, visit <a href="/hyperpigmentation-melasma" class="text-brand font-semibold hover:text-accent transition-colors">Melasma treatment in Juba</a> and Kampala at <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Skin & Body Clinic</a>.
            </p>
        '
    ],

    // ----------------------------------------------------
    // ARTICLE 4: CAN IV THERAPY IMPROVE SKIN GLOW & WELLNESS?
    // ----------------------------------------------------
    'can-iv-therapy-improve-skin-glow-overall-wellness' => [
        'slug' => 'can-iv-therapy-improve-skin-glow-overall-wellness',
        'title' => 'Can IV Therapy Improve Skin Glow and Overall Wellness?',
        'category' => 'Refine IV Lounge',
        'category_slug' => 'iv-therapy',
        'date' => 'July 20, 2026',
        'author' => 'Dr. Vicky Koojo Nganzi',
        'author_role' => 'Aesthetic & Wellness Physician',
        'read_time' => '8 min',
        'image' => '/assets/imagesfromsite/IV-Therapy_09.png',
        'excerpt' => 'Explore how medical IV vitamin therapy, Glutathione infusions, and NAD+ drips boost cellular energy, enhance skin luminosity, and promote total body wellness at Refine IV Lounge.',
        'content' => '
            <!-- AEO Direct Answer Highlight Box -->
            <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-6 sm:p-8 rounded-3xl mb-10 shadow-xl border border-accent/30">
                <div class="flex items-center gap-3 text-accent text-xs font-bold uppercase tracking-widest mb-3">
                    <i class="fas fa-bolt"></i> AEO Quick Answer Summary
                </div>
                <h3 class="text-xl sm:text-2xl font-bold font-heading mb-4 text-white">Does IV Drip Therapy Really Enhance Skin Radiance?</h3>
                <p class="text-white/90 text-sm sm:text-base font-light leading-relaxed">
                    <strong>Yes.</strong> Intravenous (IV) therapy bypasses the digestive tract to deliver <strong>100% bioavailable Glutathione, Vitamin C, NAD+, and B-Complex vitamins</strong> directly into your bloodstream. This neutralizes free radicals, flushes cellular toxins, inhibits melanin synthesis for an even complexion, and restores physical vitality. Specialized <a href="/anti-migraine-iv-therapy" class="text-accent underline font-semibold">IV therapy in Kabalagala</a> is offered under doctor supervision at <a href="/" class="text-accent underline font-semibold">Refine Skin & Body Clinic</a>.
                </p>
            </div>

            <p class="text-lg leading-relaxed text-gray-700 mb-6 font-light">
                Intravenous (IV) vitamin and wellness therapy has rapidly transitioned from medical emergency rooms to the forefront of proactive aesthetic medicine and longevity health.
            </p>

            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                At our specialized Refine IV Lounge, patients seeking <a href="/anti-migraine-iv-therapy" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">IV therapy in Kabalagala</a> and Kampala receive custom-blended nutrient drips tailored to their specific wellness goals.
            </p>

            <p class="text-gray-700 leading-relaxed mb-8 font-light">
                Administered under physician care at <a href="/" class="text-brand font-semibold hover:text-accent transition-colors underline decoration-accent/40 underline-offset-4">Refine Skin & Body Clinic</a>, IV therapy offers rapid absorption unmatched by oral supplements.
            </p>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">What is Wellness IV Therapy?</h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Oral vitamin pills pass through stomach acid and hepatic first-pass metabolism, resulting in only 15% to 30% absorption. IV therapy infuses sterile micronutrient solutions directly into systemic circulation for 100% cellular uptake.
            </p>

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading">Key Ingredients in Skin Glow IV Drips</h2>
            <div class="grid sm:grid-cols-2 gap-6 my-6">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading">Glutathione (Master Antioxidant)</h4>
                    <p class="text-sm text-gray-600 font-light">Neutralizes oxidative stress, detoxifies the liver, and converts dark eumelanin pigment into lighter phaeomelanin for an even, luminous complexion.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h4 class="font-bold text-brand-deeper mb-2 text-base font-heading">High-Dose Vitamin C & B-Complex</h4>
                    <p class="text-sm text-gray-600 font-light">Stimulates natural collagen synthesis, strengthens immune function, and boosts cellular energy production.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <!-- Frequently Asked Questions Section (8 AEO Questions) -->
            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-12 mb-8 font-heading flex items-center gap-3">
                <i class="fas fa-question-circle text-accent"></i> Frequently Asked Questions (FAQs)
            </h2>

            <div class="space-y-4 my-8">
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q1: How fast will I notice skin glow results after an IV drip?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Hydration and energy boosts are felt immediately. Skin brightening and radiance improvements build over 3 to 6 weekly sessions.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q2: Are Glutathione IV drips safe?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. Glutathione is a naturally occurring peptide produced by the human liver. When administered in medical doses by doctors, it has an excellent safety profile.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q3: How long does an IV drip appointment take?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">A standard infusion session takes 30 to 45 minutes in our relaxing lounge setting.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q4: Can IV therapy help with migraine relief and jet lag?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Yes. Our Anti-Migraine and Jet Lag IV drips combine electrolyte rehydration with Magnesium and anti-inflammatory compounds for fast relief.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q5: How often should I get IV drip treatments?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Initial treatment protocols involve weekly sessions for 4 to 6 weeks, followed by monthly maintenance sessions.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q6: Are there any side effects after an IV drip?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Minor pinprick coolness or mild bruising at the vein site may occur briefly. Patients feel energized following sessions.</p>
                </div>
                <div class="bg-surface-warm p-6 rounded-2xl border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-2">Q7: Is IV therapy suitable for everyone?</h3>
                    <p class="text-gray-700 text-sm font-light leading-relaxed">Our medical team conducts a health screening prior to infusions. Patients with severe kidney or cardiac conditions are evaluated carefully.</p>
                </div>
            </div>

            <hr class="my-10 border-brand/10" />

            <h2 class="text-2xl sm:text-3xl font-bold text-brand-deeper mt-10 mb-6 font-heading flex items-center gap-3">
                <i class="fas fa-lightbulb text-accent"></i> Final Thoughts
            </h2>
            <p class="text-gray-700 leading-relaxed mb-6 font-light">
                Experience cellular hydration and skin glow. Book your session for <a href="/anti-migraine-iv-therapy" class="text-brand font-semibold hover:text-accent transition-colors">IV therapy in Kabalagala</a> at <a href="/" class="text-brand font-semibold hover:text-accent transition-colors">Refine Skin & Body Clinic</a> today.
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
<main class="pt-24 lg:pt-28 pb-20 bg-surface-warm min-h-screen">
    <!-- Article Header Hero -->
    <section class="bg-gradient-to-br from-[#432C86] via-[#5a3ba8] to-[#1a0f3c] text-white py-14 lg:py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute top-10 left-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-60 h-60 bg-accent rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-[1200px] mx-auto px-6 relative z-10">
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-2 text-xs text-white/70 mb-6">
                <a href="/" class="hover:text-accent transition-colors">Home</a>
                <i class="fas fa-chevron-right text-[9px] opacity-60"></i>
                <a href="/blog" class="hover:text-accent transition-colors">Blog</a>
                <i class="fas fa-chevron-right text-[9px] opacity-60"></i>
                <span class="text-accent truncate max-w-[200px] sm:max-w-xs"><?php echo htmlspecialchars($currentArticle['title']); ?></span>
            </div>

            <!-- Category Badge -->
            <span class="inline-flex items-center bg-white/20 backdrop-blur-md text-white px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 border border-white/20 shadow-sm">
                <i class="fas fa-sparkles text-accent mr-2 text-[11px]"></i>
                <?php echo htmlspecialchars($currentArticle['category']); ?>
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold font-heading text-white mb-6 leading-tight max-w-4xl">
                <?php echo htmlspecialchars($currentArticle['title']); ?>
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-white/80 pt-4 border-t border-white/10">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                        <i class="fas fa-user-md text-xs"></i>
                    </div>
                    <div>
                        <span class="font-medium text-white block leading-tight"><?php echo htmlspecialchars($currentArticle['author']); ?></span>
                        <span class="text-[11px] text-white/60"><?php echo htmlspecialchars($currentArticle['author_role']); ?></span>
                    </div>
                </div>
                <div class="flex items-center gap-2 text-xs text-white/70">
                    <i class="far fa-calendar text-accent"></i>
                    <span><?php echo htmlspecialchars($currentArticle['date']); ?></span>
                </div>
                <div class="flex items-center gap-2 text-xs text-white/70">
                    <i class="far fa-clock text-accent"></i>
                    <span><?php echo htmlspecialchars($currentArticle['read_time']); ?> read</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="max-w-[1200px] mx-auto px-6 py-12">
        <div class="grid lg:grid-cols-12 gap-12">
            <!-- Article Body -->
            <article class="lg:col-span-8 bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-brand/5">
                <div class="relative aspect-[16/9] rounded-2xl overflow-hidden mb-10 bg-brand-pale">
                    <img src="<?php echo htmlspecialchars($currentArticle['image']); ?>" alt="<?php echo htmlspecialchars($currentArticle['title']); ?>" class="w-full h-full object-cover">
                </div>

                <div class="prose prose-lg max-w-none text-gray-800 font-body">
                    <?php echo $currentArticle['content']; ?>
                </div>

                <!-- Author Box -->
                <div class="mt-12 pt-8 border-t border-brand/10 bg-surface-warm rounded-2xl p-6 flex flex-col sm:flex-row items-center sm:items-start gap-5">
                    <div class="w-16 h-16 rounded-full bg-brand text-accent flex items-center justify-center text-2xl flex-shrink-0 shadow-md">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-deeper text-lg font-heading mb-1"><?php echo htmlspecialchars($currentArticle['author']); ?></h4>
                        <p class="text-xs text-accent font-semibold uppercase tracking-wider mb-2"><?php echo htmlspecialchars($currentArticle['author_role']); ?></p>
                        <p class="text-sm text-gray-600 font-light leading-relaxed">Specialized medical practitioner dedicated to providing evidence-based healthcare, medical aesthetics, and personalized patient care.</p>
                    </div>
                </div>

                <div class="mt-8 flex justify-between items-center">
                    <a href="/blog" class="inline-flex items-center gap-2 bg-brand text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-brand-light transition-all shadow-md">
                        <i class="fas fa-arrow-left text-xs"></i> Back to All Articles
                    </a>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Book Appointment Widget -->
                <div class="bg-gradient-to-br from-[#1a0f3c] to-[#432C86] text-white rounded-3xl p-8 shadow-xl relative overflow-hidden">
                    <div class="relative z-10">
                        <span class="inline-block bg-accent/20 text-accent text-xs px-3 py-1 rounded-full font-semibold uppercase tracking-widest mb-4">Refine Consultation</span>
                        <h3 class="text-2xl font-bold font-heading mb-3 text-white">Book a Consultation</h3>
                        <p class="text-sm text-white/80 font-light leading-relaxed mb-6">Discuss your skin, weight loss, or wellness goals with our medical specialists.</p>
                        <a href="/contact" class="block text-center w-full bg-accent hover:bg-accent-light text-brand-deeper font-bold py-3 px-6 rounded-full text-sm transition-all shadow-lg">
                            Book Appointment <i class="fas fa-calendar-check ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Recent Articles List -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-brand/5">
                    <h3 class="font-bold text-brand-deeper text-lg font-heading mb-6 pb-3 border-b border-brand/5 flex items-center justify-between">
                        <span>Related Articles</span>
                        <i class="fas fa-bookmark text-accent"></i>
                    </h3>
                    <div class="space-y-4">
                        <?php 
                        $count = 0;
                        foreach ($articles as $relSlug => $relArt):
                            if ($relSlug === $currentArticle['slug']) continue;
                            if ($count >= 4) break;
                            $count++;
                        ?>
                        <a href="/blog/<?php echo $relSlug; ?>" class="flex items-center gap-4 group">
                            <div class="w-16 h-16 rounded-xl bg-brand-pale flex-shrink-0 overflow-hidden relative">
                                <img src="<?php echo htmlspecialchars($relArt['image']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-accent uppercase tracking-widest block"><?php echo htmlspecialchars($relArt['category']); ?></span>
                                <h4 class="text-xs font-bold text-brand-deeper group-hover:text-accent transition-colors line-clamp-2 leading-snug font-heading"><?php echo htmlspecialchars($relArt['title']); ?></h4>
                                <span class="text-[10px] text-gray-400 font-medium"><?php echo htmlspecialchars($relArt['date']); ?></span>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</main>

<?php else: ?>
<!-- ============================================
     REFINE CLINIC BLOG MAIN INDEX PAGE
     ============================================ -->
<main class="bg-white">

    <!-- Hero Section (Refine Clinic Aesthetic Theme) -->
    <section class="relative pt-32 pb-20 md:pt-40 md:pb-28 bg-gradient-to-br from-[#432C86] via-[#5a3ba8] to-[#1a0f3c] overflow-hidden">
        <!-- Decorative Glow Elements -->
        <div class="absolute inset-0 opacity-15 pointer-events-none">
            <div class="absolute top-10 left-10 w-48 h-48 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-72 h-72 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/3 w-40 h-40 bg-pink-300 rounded-full blur-2xl"></div>
        </div>

        <div class="max-w-[1400px] mx-auto px-6 relative z-10 text-center">
            <span class="inline-flex items-center bg-white/15 backdrop-blur-md text-white px-5 py-2 rounded-full text-xs md:text-sm font-semibold tracking-wide uppercase mb-6 border border-white/20 shadow-inner">
                <i class="fas fa-sparkles text-accent mr-2"></i>
                Refine Clinic Insights & Guides
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6 leading-tight font-heading">
                Refine <span class="italic font-display font-light text-accent">Blog.</span>
            </h1>
            <p class="text-white/80 text-base md:text-xl max-w-2xl mx-auto leading-relaxed font-body font-light">
                Expert aesthetic insights, dermatology guides, medical weight loss advice, surgical insights, and wellness articles from our specialist team.
            </p>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mt-10 relative">
                <div class="relative flex items-center">
                    <i class="fas fa-search absolute left-5 text-gray-400 text-lg pointer-events-none"></i>
                    <input type="text" id="blog-search" placeholder="Search treatments, dermatology, weight loss, or IV therapy..." class="w-full pl-14 pr-12 py-4 bg-white/95 backdrop-blur-md rounded-full text-brand-deeper placeholder-gray-400 font-body text-sm md:text-base outline-none shadow-2xl focus:ring-4 focus:ring-accent/40 transition-all border border-white">
                    <button id="clear-search" class="absolute right-4 text-gray-400 hover:text-brand transition-colors hidden">
                        <i class="fas fa-times-circle text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="py-16 md:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">

            <!-- Category Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2.5 md:gap-3 mb-14" id="category-filters">
                <button class="cat-btn active bg-brand text-white px-6 py-2.5 rounded-full text-xs md:text-sm font-medium transition-all shadow-md shadow-brand/20 border border-brand" data-category="all">
                    All Articles
                </button>
                <button class="cat-btn bg-white/90 text-gray-700 hover:bg-white hover:text-brand px-6 py-2.5 rounded-full text-xs md:text-sm font-medium transition-all border border-brand/10 hover:border-brand/30 shadow-sm" data-category="injectables-anti-aging">
                    <i class="fas fa-face-smile text-accent mr-1.5 text-[11px]"></i> Injectables & Anti-Aging
                </button>
                <button class="cat-btn bg-white/90 text-gray-700 hover:bg-white hover:text-brand px-6 py-2.5 rounded-full text-xs md:text-sm font-medium transition-all border border-brand/10 hover:border-brand/30 shadow-sm" data-category="dermatology-skin">
                    <i class="fas fa-allergies text-accent mr-1.5 text-[11px]"></i> Dermatology & Skin
                </button>
                <button class="cat-btn bg-white/90 text-gray-700 hover:bg-white hover:text-brand px-6 py-2.5 rounded-full text-xs md:text-sm font-medium transition-all border border-brand/10 hover:border-brand/30 shadow-sm" data-category="iv-therapy">
                    <i class="fas fa-syringe text-brand/70 mr-1.5 text-[11px]"></i> Refine IV Lounge
                </button>
                <button class="cat-btn bg-white/90 text-gray-700 hover:bg-white hover:text-brand px-6 py-2.5 rounded-full text-xs md:text-sm font-medium transition-all border border-brand/10 hover:border-brand/30 shadow-sm" data-category="surgical-insights">
                    <i class="fas fa-stethoscope text-accent mr-1.5 text-[11px]"></i> Surgical Insights
                </button>
            </div>

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-brand-deeper font-heading mb-3">Refine Articles</h2>
                <p class="text-gray-600 max-w-2xl mx-auto font-body font-light text-sm md:text-base">Explore treatment guides, clinical insights, and wellness tips from board-certified doctors.</p>
            </div>

            <?php if (count($articles) > 0): ?>
            <!-- Blog Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-cards-grid">
                <?php foreach ($articles as $artKey => $art): ?>
                <article class="blog-card-item bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group overflow-hidden border border-brand/5 flex flex-col h-full"
                         data-category="<?php echo htmlspecialchars($art['category_slug']); ?>"
                         data-search="<?php echo htmlspecialchars(strtolower($art['title'] . ' ' . $art['excerpt'] . ' ' . $art['category'] . ' ' . $art['author'])); ?>">
                    <a href="/blog/<?php echo $art['slug']; ?>" class="flex flex-col h-full">
                        <!-- Image Container -->
                        <div class="relative h-56 bg-gradient-to-br from-brand/15 via-brand-pale to-purple-100 overflow-hidden">
                            <img src="<?php echo htmlspecialchars($art['image']); ?>"
                                 alt="<?php echo htmlspecialchars($art['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-semibold text-brand-deeper shadow-md flex items-center gap-1.5">
                                <i class="fas fa-sparkles text-accent text-[10px]"></i>
                                <?php echo htmlspecialchars($art['category']); ?>
                            </div>

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                                <span class="text-white font-semibold flex items-center text-sm">
                                    Read Article
                                    <i class="fas fa-arrow-right ml-2 text-accent"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col flex-1">
                            <div class="flex items-center text-gray-400 text-xs mb-2.5 gap-1.5">
                                <i class="far fa-calendar"></i>
                                <span><?php echo htmlspecialchars($art['date']); ?></span>
                            </div>
                            <h3 class="text-xl font-bold text-brand-deeper mb-3 line-clamp-2 group-hover:text-accent transition-colors duration-300 font-heading leading-snug">
                                <?php echo htmlspecialchars($art['title']); ?>
                            </h3>
                            <p class="text-gray-600 text-sm mb-5 line-clamp-3 leading-relaxed font-body font-light flex-1">
                                <?php echo htmlspecialchars($art['excerpt']); ?>
                            </p>

                            <!-- Card Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-brand/5 mt-auto">
                                <div class="flex items-center text-brand font-medium text-xs gap-2">
                                    <i class="far fa-user text-accent"></i>
                                    <span><?php echo htmlspecialchars($art['author']); ?></span>
                                </div>
                                <div class="flex items-center text-gray-400 text-xs gap-1.5 font-medium">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo htmlspecialchars($art['read_time']); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <!-- Empty State -->
            <div class="py-16 md:py-24 text-center max-w-lg mx-auto bg-white rounded-3xl p-10 border border-brand/5 shadow-sm">
                <div class="w-20 h-20 rounded-full bg-brand-pale text-brand flex items-center justify-center mx-auto mb-6 text-3xl shadow-inner">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-bold text-brand-deeper font-heading mb-3">No Articles Published Yet</h3>
                <p class="text-gray-600 font-body font-light text-sm leading-relaxed mb-6">We are currently preparing fresh clinical guides, dermatology articles, and wellness insights for Refine Clinic. Check back soon!</p>
                <a href="/contact" class="inline-flex items-center gap-2 bg-brand text-white px-6 py-3 rounded-full text-xs font-semibold hover:bg-brand-light transition-all shadow-md">
                    <span>Book a Consultation</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <?php endif; ?>

            <!-- No Results Message -->
            <div id="no-results" class="hidden py-16 text-center">
                <div class="w-16 h-16 rounded-full bg-brand-pale text-brand flex items-center justify-center mx-auto mb-4 text-2xl">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-2xl font-bold text-brand-deeper font-heading mb-2">No matching articles found</h3>
                <p class="text-gray-500 font-light text-sm max-w-md mx-auto mb-6">Try searching with different keywords or reset your category filter.</p>
                <button id="reset-search" class="bg-brand text-white px-6 py-2.5 rounded-full text-xs font-semibold hover:bg-brand-light transition-all shadow-md">
                    Reset Filters
                </button>
            </div>

        </div>
    </section>

    <!-- Appointment Contact Banner Section -->
    <section id="contact" class="py-16 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-deeper font-heading mb-3">Get in Touch with Refine Clinic</h2>
                <p class="text-gray-600 text-sm sm:text-base font-light">Ready to start your aesthetic or wellness transformation? Contact our team today.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Info Cards -->
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-5 bg-white rounded-2xl shadow-sm border border-brand/5">
                        <div class="w-12 h-12 bg-brand/10 rounded-full flex items-center justify-center text-brand flex-shrink-0">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand-deeper text-sm md:text-base">Clinic Contact</h3>
                            <p class="text-gray-600 text-sm font-light">+256 782 312 600 / +256 700 000 000</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-5 bg-white rounded-2xl shadow-sm border border-brand/5">
                        <div class="w-12 h-12 bg-brand/10 rounded-full flex items-center justify-center text-brand flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand-deeper text-sm md:text-base">Email Enquiries</h3>
                            <p class="text-gray-600 text-sm font-light">info@refineskinandbody.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-5 bg-white rounded-2xl shadow-sm border border-brand/5">
                        <div class="w-12 h-12 bg-brand/10 rounded-full flex items-center justify-center text-brand flex-shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-brand-deeper text-sm md:text-base">Location</h3>
                            <p class="text-gray-600 text-sm font-light">Refine Skin & Body Clinic, Bukoto / Kabalagala, Kampala, Uganda</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Appointment CTA Box -->
                <div class="bg-gradient-to-br from-[#1a0f3c] via-[#432C86] to-[#2e1d5e] text-white p-8 sm:p-10 rounded-3xl shadow-xl border border-white/10 relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-3xl font-bold font-heading mb-4">Book Your Refine Consultation</h3>
                        <p class="text-white/80 font-light text-sm mb-6 leading-relaxed">Connect directly with our dermatologists, plastic surgeons, and aesthetic physicians.</p>
                        <a href="/contact" class="inline-flex items-center justify-center gap-2 w-full bg-accent hover:bg-accent-light text-brand-deeper font-bold py-4 rounded-full text-base transition-all shadow-lg">
                            <span>Book Appointment Now</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    // Live Search & Category Filtering Script
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('blog-search');
        const clearBtn = document.getElementById('clear-search');
        const catButtons = document.querySelectorAll('.cat-btn');
        const cards = document.querySelectorAll('.blog-card-item');
        const noResults = document.getElementById('no-results');
        const resetBtn = document.getElementById('reset-search');

        let activeCategory = 'all';
        let searchQuery = '';

        function filterArticles() {
            let visibleCount = 0;

            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                const cardSearch = card.getAttribute('data-search');

                const matchesCategory = (activeCategory === 'all' || cardCategory === activeCategory);
                const matchesSearch = (!searchQuery || cardSearch.includes(searchQuery.toLowerCase()));

                if (matchesCategory && matchesSearch) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (visibleCount === 0 && cards.length > 0) {
                if (noResults) noResults.classList.remove('hidden');
            } else if (noResults) {
                noResults.classList.add('hidden');
            }
        }

        // Category button click handler
        catButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                catButtons.forEach(b => {
                    b.classList.remove('active', 'bg-brand', 'text-white', 'shadow-md', 'shadow-brand/20');
                    b.classList.add('bg-white/90', 'text-gray-700');
                });

                this.classList.add('active', 'bg-brand', 'text-white', 'shadow-md', 'shadow-brand/20');
                this.classList.remove('bg-white/90', 'text-gray-700');

                activeCategory = this.getAttribute('data-category');
                filterArticles();
            });
        });

        // Search input handler
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                searchQuery = this.value.trim();
                if (searchQuery.length > 0) {
                    clearBtn.classList.remove('hidden');
                } else {
                    clearBtn.classList.add('hidden');
                }
                filterArticles();
            });
        }

        if (clearBtn) {
            clearBtn.addEventListener('click', function() {
                searchInput.value = '';
                searchQuery = '';
                clearBtn.classList.add('hidden');
                filterArticles();
            });
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                if (searchInput) searchInput.value = '';
                searchQuery = '';
                activeCategory = 'all';
                catButtons.forEach(b => {
                    if (b.getAttribute('data-category') === 'all') {
                        b.click();
                    }
                });
            });
        }
    });
</script>

<?php endif; ?>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
