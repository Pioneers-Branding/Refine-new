<?php
/**
 * Header — Conditional transparent navbar.
 * - On the homepage (root or /index.php), the navbar is transparent at the top
 *   and gets a solid background once the user scrolls. This is the "hero" mode.
 * - On all other pages, the navbar is always solid (white) because the page
 *   hero has a coloured background. This avoids the "invisible" navbar problem.
 */
$currentPath = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$currentPath = rtrim($currentPath, '/');
if ($currentPath === '' || $currentPath === '/index' || $currentPath === '/index.php') {
    $isHome = true;
} else {
    $isHome = false;
}
?>
<!-- ============================================
     EDITORIAL HEADER (Conditional)
     ============================================ -->
<header id="site-header" class="site-header fixed top-0 left-0 w-full z-[999] <?php echo $isHome ? 'bg-transparent hero-mode' : 'bg-white/95 backdrop-blur-md border-b border-brand/5 shadow-sm'; ?> py-1 lg:py-2 transition-all duration-300">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-[60px] lg:h-[80px]">

            <!-- Logo -->
            <a href="/" class="flex-shrink-0 relative z-10 group">
                <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="logo-white h-10 lg:h-16 w-auto object-contain transition-all duration-300">
                <img src="/assets/images/refine-logo-transparent.png" alt="Refine Clinic Logo" class="logo-dark h-10 lg:h-16 w-auto object-contain transition-all duration-300">
            </a>

            <!-- Desktop Navigation (original site structure) -->
            <nav class="hidden lg:flex items-center gap-7 z-10">
                <a href="/" class="nav-link-item">Home</a>

                <!-- About Us Dropdown -->
                <div class="nav-item-dropdown static py-6">
                    <a href="about" class="nav-link-item flex items-center gap-1.5">
                        About Us <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-0 right-0 mx-auto pt-4 w-[1000px] max-w-[95vw]">
                        <div class="mega-menu-panel p-8 grid grid-cols-3 gap-8 relative">
                            <!-- Col 1: The Clinic -->
                            <div>
                                <img src="/assets/imagesfromsite/about2026.webp" alt="The Clinic" class="w-full aspect-video object-cover bg-brand-faint rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">The Clinic</h5>
                                <div class="space-y-2.5">
                                    <a href="about" class="block text-sm text-gray-600 hover:text-brand transition-colors">About Us</a>
                                    <a href="gallery" class="block text-sm text-gray-600 hover:text-brand transition-colors">Gallery</a>
                                    <a href="blog" class="block text-sm text-gray-600 hover:text-brand transition-colors">Blogs</a>
                                    <a href="patient-reviews" class="block text-sm text-gray-600 hover:text-brand transition-colors">Patient Reviews</a>
                                    <a href="before-after" class="block text-sm text-gray-600 hover:text-brand transition-colors">Before & After</a>
                                </div>
                            </div>
                            <!-- Col 2: Our Specialists -->
                            <div>
                                <img src="/assets/images/team/dr_chirag_kotecha.png" alt="Our Specialists" class="w-full aspect-video object-cover object-top bg-brand-faint rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Our Specialists</h5>
                                <div class="space-y-2.5">
                                    <a href="dr-chirag-kotecha" class="block text-sm text-gray-600 hover:text-brand transition-colors">Lead Specialist</a>
                                    <a href="dr-william-lubega" class="block text-sm text-gray-600 hover:text-brand transition-colors">Plastic Surgeon</a>
                                    <a href="dr-henry-owiny" class="block text-sm text-gray-600 hover:text-brand transition-colors">Aesthetic Physician</a>
                                    <a href="dr-ahmed-ashraf" class="block text-sm text-gray-600 hover:text-brand transition-colors">Dermatologist (Egypt)</a>
                                    <a href="dr-vicky-koojo-nganzi" class="block text-sm text-gray-600 hover:text-brand transition-colors">Kabalagala Branch</a>
                                </div>
                            </div>
                            <!-- Col 3: Wellness & Support -->
                            <div>
                                <img src="/assets/imagesfromsite/Ms_Wendy_Emyedu_Ayayo.png" alt="Wellness & Support" class="w-full aspect-video object-cover object-top bg-brand-faint rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Wellness &amp; Support</h5>
                                <div class="space-y-2.5">
                                    <a href="alison-gallagher" class="block text-sm text-gray-600 hover:text-brand transition-colors">Psychotherapist</a>
                                    <a href="wendy-emyedu-ayayo" class="block text-sm text-gray-600 hover:text-brand transition-colors">Nutritionist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cosmetic Dermatology Mega Menu -->
                <div class="nav-item-dropdown static py-6">
                    <a href="cosmetic-dermatology-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Cosmetic Dermatology <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-0 right-0 mx-auto pt-4 w-[1400px] max-w-[95vw]">
                        <div class="mega-menu-panel p-8 grid grid-cols-6 gap-4 lg:gap-6 relative">
                            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-faint -z-10 rounded-r-1.5rem"></div>
                            
                            <!-- Col 1: Skin/Body Rejuvenation -->
                            <div>
                                <img src="/assets/imagesfromsite/hydra-facial-09.png" alt="Skin/Body Rejuvenation" class="w-full aspect-video object-cover bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">Skin/Body Rejuvenation</h5>
                                <div class="space-y-2">
                                    <a href="hydrafacial" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">HydraFacial</a>
                                    <a href="chemical-peel" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Chemical Peel</a>
                                    <a href="iv-therapy" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">IV Therapy</a>
                                    <a href="bio-identical-hormone-replacement-therapy" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Bio-Identical Hormone Replacement Therapy</a>
                                    <a href="rf-microneedling" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">RF Microneedling for Scars</a>
                                    <a href="stretch-marks" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Stretch Marks</a>
                                    <a href="non-surgical-brazilian-butt-lift" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Non-Surgical Brazilian Butt Lift</a>
                                    <a href="lip-volumization" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Lip Volumization</a>
                                    <a href="non-surgical-liquid-rhinoplasty" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Liquid Rhinoplasty</a>
                                    <a href="double-chin" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Double Chin</a>
                                    <a href="platelet-rich-plasma-facial" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Platelet-Rich Plasma Therapy (PRP)</a>
                                </div>
                            </div>
                            
                            <!-- Col 2: Laser Treatments -->
                            <div>
                                <img src="/assets/imagesfromsite/Laser%20Skin%20Rejuvenation-09.png" alt="Laser Treatments" class="w-full aspect-video object-cover bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">Laser Treatments</h5>
                                <div class="space-y-2">
                                    <a href="laser-hair-removal" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Laser Hair Removal</a>
                                    <a href="laser-tattoo-removal" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Laser Tattoo Removal</a>
                                    <a href="co2-laser-scar-removal" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">CO2 Laser for Scars</a>
                                    <a href="laser-skin-rejuvenation" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Laser Skin Rejuvenation</a>
                                </div>
                            </div>

                            <!-- Col 3: Anti Aging -->
                            <div>
                                <img src="/assets/imagesfromsite/dermal-filter-09.png" alt="Anti Aging" class="w-full aspect-video object-cover object-top bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">Anti Aging</h5>
                                <div class="space-y-2">
                                    <a href="botox" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Botox&reg;</a>
                                    <a href="dermal-fillers" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Dermal Fillers</a>
                                    <a href="thread-lifting" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Thread Lifting</a>
                                    <a href="sculptra-face-lift" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Sculptra Face Lift</a>
                                    <a href="cool-lifting" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Coolifting&reg;</a>
                                    <a href="led-light-therapy" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">LED Light Therapy</a>
                                </div>
                            </div>

                            <!-- Col 4: PRP Treatments -->
                            <div>
                                <img src="/assets/imagesfromsite/prp-hair-restoration-09.png" alt="PRP Treatments" class="w-full aspect-video object-cover object-top bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">PRP Treatments</h5>
                                <div class="space-y-2">
                                    <a href="hair-transplant" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Hair Transplant</a>
                                    <a href="prp-face-lift" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">The PRP Facelift</a>
                                    <a href="prp-breast-lift" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">The PRP Breast Lift</a>
                                    <a href="platelet-rich-plasma-facial" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">PRP Facial</a>
                                    <a href="prp-hair-restoration" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">PRP Hair Restoration</a>
                                    <a href="plasma-pen-therapy" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Plasma Pen Therapy</a>
                                    <a href="omg-shot" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">The OMG-Shot</a>
                                    <a href="m-shot" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">The M-Shot</a>
                                    <a href="joint-and-tissue-rejuvenation" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Joint &amp; Tissue Rejuvenation with PRP</a>
                                </div>
                            </div>

                            <!-- Col 5: Weight Loss -->
                            <div>
                                <img src="/assets/imagesfromsite/Gastric%20Sleeve%20and%20Bypass-09.png" alt="Weight Loss" class="w-full aspect-video object-cover bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">Weight Loss</h5>
                                <div class="space-y-2">
                                    <a href="allurion-weight-loss" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Allurion</a>
                                    <a href="semaglutide-ozempic-weight-loss" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Semaglutide/Ozempic</a>
                                    <a href="gastric-sleeve-and-bypass-surgery" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Gastric Sleeve and Bypass</a>
                                </div>
                            </div>

                            <!-- Col 6: Body Contouring -->
                            <div>
                                <img src="/assets/imagesfromsite/Fat%20Dissolving-09.png" alt="Body Contouring" class="w-full aspect-video object-cover object-top bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-[11px] lg:text-xs text-accent font-semibold uppercase tracking-widest mb-4">Body Contouring</h5>
                                <div class="space-y-2">
                                    <a href="wonder-axon-treatment" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Wonder Axon Treatment</a>
                                    <a href="cryolipolysis" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Cryolipolysis</a>
                                    <a href="pcdc-fat-dissolving" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">PCDC Fat Dissolving Injections</a>
                                    <a href="tummy-tuck" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors leading-tight">Tummy Tuck / Abdominoplasty</a>
                                    <a href="em-body-sculpt" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">Em Body Sculpt</a>
                                    <a href="6d-green-laser" class="block text-xs lg:text-sm text-gray-600 hover:text-brand transition-colors">6D Green Laser</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medical Dermatology Mega Menu -->
                <div class="nav-item-dropdown static py-6">
                    <a href="medical-dermatology" class="nav-link-item flex items-center gap-1.5">
                        Medical Dermatology <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-0 right-0 mx-auto pt-4 w-[800px] max-w-[95vw]">
                        <div class="mega-menu-panel p-8 grid grid-cols-2 gap-8 relative">
                            <div>
                                <img src="/assets/imagesfromsite/acne-09.png" alt="Inflammatory Skin" class="w-full aspect-video object-cover rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Inflammatory Skin</h5>
                                <div class="space-y-2.5">
                                    <a href="acne" class="block text-sm text-gray-600 hover:text-brand transition-colors">Acne</a>
                                    <a href="scar" class="block text-sm text-gray-600 hover:text-brand transition-colors">Scars</a>
                                    <a href="hyperpigmentation-melasma" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hyperpigmentation/Melasma</a>
                                    <a href="hair-loss" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hair Loss</a>
                                    <a href="rosacea" class="block text-sm text-gray-600 hover:text-brand transition-colors">Rosacea</a>
                                </div>
                            </div>
                            <div>
                                <img src="/assets/imagesfromsite/skin-cancer-09.png" alt="Autoimmune Disorders" class="w-full aspect-video object-cover rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Autoimmune Disorders</h5>
                                <div class="space-y-2.5">
                                    <a href="vitiligo" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vitiligo</a>
                                    <a href="alopecia-areata" class="block text-sm text-gray-600 hover:text-brand transition-colors">Alopecia Areata</a>
                                    <a href="skin-cancer" class="block text-sm text-gray-600 hover:text-brand transition-colors">Skin Cancer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refine IV Lounge Mega Menu -->
                <div class="nav-item-dropdown static py-6">
                    <a href="refine-iv-lounge-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Refine IV Lounge <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-0 right-0 mx-auto pt-4 w-[1100px] max-w-[95vw]">
                        <div class="mega-menu-panel p-8 grid grid-cols-3 gap-8 relative">
                            <!-- Col 1: IV Therapy -->
                            <div>
                                <img src="/assets/imagesfromsite/Combo%20of%20vit%20B-12%20and%20B%20complex-09_.png" alt="IV Therapy" class="w-full aspect-video object-cover bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">IV Therapy</h5>
                                <div class="space-y-2.5">
                                    <a href="inner-beauty-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Inner Beauty</a>
                                    <a href="jet-lag-iv-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Jet Lag</a>
                                    <a href="pre-party-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Pre-Party</a>
                                    <a href="myers-magic-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Myers Magic</a>
                                    <a href="post-party-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Post Party</a>
                                    <a href="anti-migraine-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Anti Migraine</a>
                                    <a href="total-sport-iv-therapy" class="block text-sm text-gray-600 hover:text-brand transition-colors">Total Sport</a>
                                    <a href="skin-lightening-with-tatioactive-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Skin Lightening with Tatioactive</a>
                                    <a href="vitamin-b12-combo-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Combo of Vit B 12 and B Complex</a>
                                    <a href="vitamin-c-treatment-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vitamin C</a>
                                </div>
                            </div>
                            <!-- Col 2: Wellness Infusions -->
                            <div>
                                <img src="/assets/imagesfromsite/Amino%20acid-9.png" alt="Wellness Infusions" class="w-full aspect-video object-cover bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Wellness Infusions</h5>
                                <div class="space-y-2.5">
                                    <a href="amino-acids-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Amino Acids</a>
                                    <a href="glutathione-IV-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Glutathione</a>
                                </div>
                            </div>
                            <!-- Col 3: Our Affiliates -->
                            <div>
                                <img src="/assets/imagesfromsite/neo_derma_clinic.png" alt="Neoderma Clinic" class="w-full aspect-video object-cover object-center bg-brand-faint/50 rounded-2xl mb-3" loading="lazy">
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Our Affiliates</h5>
                                <div class="space-y-2.5">
                                    <a href="https://www.neodermaclinica.com/" target="_blank" class="block text-sm text-gray-600 hover:text-brand transition-colors">Neoderma Clinic</a>
                                    <a href="https://refinebytulsi.com/" target="_blank" class="block text-sm text-gray-600 hover:text-brand transition-colors">Refine by Tulsi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book Appointment -->
                <a href="contact" class="nav-link-item">Book Appointment</a>
            </nav>

            <!-- CTA + Mobile Toggle -->
            <div class="flex items-center gap-3 z-10">
                <div class="hidden md:block">
                    <a href="book-appointment" class="btn-magnetic magnetic-target">
                        <span>Book Now</span>
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-toggle" aria-label="Open menu" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-full <?php echo $isHome ? 'bg-white/10 backdrop-blur-md text-white' : 'bg-brand/5 text-brand'; ?> transition-all hover:bg-accent/20">
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-transform origin-center" id="menu-line-1"></span>
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-opacity" id="menu-line-2"></span>
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-transform origin-center" id="menu-line-3"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ============================================
     MOBILE MENU DRAWER (Editorial overlay)
     ============================================ -->
<div id="mobile-overlay" class="mobile-menu-overlay fixed inset-0 bg-brand-deeper/90 backdrop-blur-xl z-[1000] hidden opacity-0"></div>
<aside id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-full max-w-[420px] bg-brand text-white z-[1001] shadow-2xl overflow-y-auto border-l border-white/10 translate-x-full">
    <div class="p-8 flex flex-col h-full">
        <div class="flex items-center justify-between mb-8">
            <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="h-8 w-auto object-contain">
            <button id="mobile-menu-close" aria-label="Close menu" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-white/10">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <nav class="flex-1 flex flex-col space-y-4 mobile-nav-links overflow-y-auto pr-2 pb-24">
            <a href="/" class="font-display italic text-2xl py-2 text-white hover:text-accent transition-colors border-b border-white/10 pb-4">Home</a>

            <!-- About Us Accordion -->
            <details class="group border-b border-white/10 pb-3">
                <summary class="font-display italic text-xl text-white hover:text-accent cursor-pointer list-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                    About Us
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-open:-rotate-180 opacity-70"></i>
                </summary>
                <div class="mt-4 mb-2 space-y-5 pl-3 border-l-2 border-brand-light/20">
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">The Clinic</p>
                        <a href="about" class="block font-body text-sm text-white/80 py-1 hover:text-accent">About Us</a>
                        <a href="gallery" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Gallery</a>
                        <a href="blog" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Blogs</a>
                        <a href="patient-reviews" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Patient Reviews</a>
                        <a href="before-after" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Before & After</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Our Specialists</p>
                        <a href="dr-chirag-kotecha" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Lead Specialist</a>
                        <a href="dr-william-lubega" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Plastic Surgeon</a>
                        <a href="dr-henry-owiny" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Aesthetic Physician</a>
                        <a href="dr-ahmed-ashraf" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Dermatologist (Egypt)</a>
                        <a href="dr-vicky-koojo-nganzi" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Kabalagala Branch</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Wellness &amp; Support</p>
                        <a href="alison-gallagher" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Psychotherapist</a>
                        <a href="wendy-emyedu-ayayo" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Nutritionist</a>
                    </div>
                </div>
            </details>

            <!-- Cosmetic Dermatology Accordion -->
            <details class="group border-b border-white/10 pb-3">
                <summary class="font-display italic text-xl text-white hover:text-accent cursor-pointer list-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                    Cosmetic Derm
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-open:-rotate-180 opacity-70"></i>
                </summary>
                <div class="mt-4 mb-2 space-y-5 pl-3 border-l-2 border-brand-light/20">
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Skin/Body Rejuvenation</p>
                        <a href="hydrafacial" class="block font-body text-sm text-white/80 py-1 hover:text-accent">HydraFacial</a>
                        <a href="chemical-peel" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Chemical Peel</a>
                        <a href="iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">IV Therapy</a>
                        <a href="bio-identical-hormone-replacement-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent leading-tight">Bio-Identical Hormone Replacement</a>
                        <a href="rf-microneedling" class="block font-body text-sm text-white/80 py-1 hover:text-accent">RF Microneedling</a>
                        <a href="stretch-marks" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Stretch Marks</a>
                        <a href="non-surgical-brazilian-butt-lift" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Non-Surgical BBL</a>
                        <a href="lip-volumization" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Lip Volumization</a>
                        <a href="non-surgical-liquid-rhinoplasty" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Liquid Rhinoplasty</a>
                        <a href="double-chin" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Double Chin</a>
                        <a href="platelet-rich-plasma-facial" class="block font-body text-sm text-white/80 py-1 hover:text-accent">PRP Therapy</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Laser Treatments</p>
                        <a href="laser-hair-removal" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Laser Hair Removal</a>
                        <a href="laser-tattoo-removal" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Laser Tattoo Removal</a>
                        <a href="co2-laser-scar-removal" class="block font-body text-sm text-white/80 py-1 hover:text-accent">CO2 Laser for Scars</a>
                        <a href="laser-skin-rejuvenation" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Laser Skin Rejuvenation</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Anti Aging</p>
                        <a href="botox" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Botox&reg;</a>
                        <a href="dermal-fillers" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Dermal Fillers</a>
                        <a href="thread-lifting" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Thread Lifting</a>
                        <a href="sculptra-face-lift" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Sculptra Face Lift</a>
                        <a href="cool-lifting" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Coolifting&reg;</a>
                        <a href="led-light-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">LED Light Therapy</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">PRP Treatments</p>
                        <a href="hair-transplant" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Hair Transplant</a>
                        <a href="prp-face-lift" class="block font-body text-sm text-white/80 py-1 hover:text-accent">The PRP Facelift</a>
                        <a href="prp-breast-lift" class="block font-body text-sm text-white/80 py-1 hover:text-accent">The PRP Breast Lift</a>
                        <a href="platelet-rich-plasma-facial" class="block font-body text-sm text-white/80 py-1 hover:text-accent">PRP Facial</a>
                        <a href="prp-hair-restoration" class="block font-body text-sm text-white/80 py-1 hover:text-accent">PRP Hair Restoration</a>
                        <a href="plasma-pen-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Plasma Pen Therapy</a>
                        <a href="omg-shot" class="block font-body text-sm text-white/80 py-1 hover:text-accent">The OMG-Shot</a>
                        <a href="m-shot" class="block font-body text-sm text-white/80 py-1 hover:text-accent">The M-Shot</a>
                        <a href="joint-and-tissue-rejuvenation" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Joint &amp; Tissue Rejuvenation</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Weight Loss</p>
                        <a href="allurion-weight-loss" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Allurion</a>
                        <a href="semaglutide-ozempic-weight-loss" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Semaglutide/Ozempic</a>
                        <a href="gastric-sleeve-and-bypass-surgery" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Gastric Sleeve and Bypass</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Body Contouring</p>
                        <a href="wonder-axon-treatment" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Wonder Axon Treatment</a>
                        <a href="cryolipolysis" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Cryolipolysis</a>
                        <a href="pcdc-fat-dissolving" class="block font-body text-sm text-white/80 py-1 hover:text-accent">PCDC Fat Dissolving</a>
                        <a href="tummy-tuck" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Tummy Tuck / Abdominoplasty</a>
                        <a href="em-body-sculpt" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Em Body Sculpt</a>
                        <a href="6d-green-laser" class="block font-body text-sm text-white/80 py-1 hover:text-accent">6D Green Laser</a>
                    </div>
                </div>
            </details>

            <!-- Medical Dermatology Accordion -->
            <details class="group border-b border-white/10 pb-3">
                <summary class="font-display italic text-xl text-white hover:text-accent cursor-pointer list-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                    Medical Derm
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-open:-rotate-180 opacity-70"></i>
                </summary>
                <div class="mt-4 mb-2 space-y-5 pl-3 border-l-2 border-brand-light/20">
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Inflammatory Skin</p>
                        <a href="acne" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Acne Treatment</a>
                        <a href="rosacea" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Rosacea</a>
                        <a href="eczema-dermatitis-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Eczema (Dermatitis)</a>
                        <a href="psoriasis" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Psoriasis</a>
                        <a href="contact-dermatitis-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Contact Dermatitis</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Autoimmune Disorders</p>
                        <a href="vitiligo" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Vitiligo</a>
                        <a href="melasma" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Melasma</a>
                        <a href="keloid-scar" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Keloids</a>
                    </div>
                </div>
            </details>

            <!-- Refine IV Lounge Accordion -->
            <details class="group border-b border-white/10 pb-3">
                <summary class="font-display italic text-xl text-white hover:text-accent cursor-pointer list-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                    Refine IV Lounge
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 group-open:-rotate-180 opacity-70"></i>
                </summary>
                <div class="mt-4 mb-2 space-y-5 pl-3 border-l-2 border-brand-light/20">
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">IV Therapy</p>
                        <a href="inner-beauty-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Inner Beauty</a>
                        <a href="jet-lag-iv-therapy-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Jet Lag</a>
                        <a href="pre-party-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Pre-Party</a>
                        <a href="myers-magic-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Myers Magic</a>
                        <a href="post-party-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Post Party</a>
                        <a href="anti-migraine-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Anti Migraine</a>
                        <a href="total-sport-iv-therapy" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Total Sport</a>
                        <a href="skin-lightening-with-tatioactive-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Skin Lightening with Tatioactive</a>
                        <a href="vitamin-b12-combo-IV-therapy-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Combo of Vit B 12 and B Complex</a>
                        <a href="vitamin-c-treatment-IV-therapy-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Vitamin C</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Wellness Infusions</p>
                        <a href="amino-acids-IV-therapy-treatment-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Amino Acids</a>
                        <a href="glutathione-IV-therapy-kampala-juba" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Glutathione</a>
                    </div>
                    <div>
                        <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mb-2">Our Affiliates</p>
                        <a href="https://www.neodermaclinica.com/" target="_blank" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Neoderma Clinic</a>
                        <a href="https://refinebytulsi.com/" target="_blank" class="block font-body text-sm text-white/80 py-1 hover:text-accent">Refine by Tulsi</a>
                    </div>
                </div>
            </details>

            <a href="contact" class="font-display italic text-xl py-3 text-accent mt-4">Book Appointment</a>
        </nav>

        <div class="mt-auto pt-8 border-t border-white/10 flex items-center justify-between mobile-menu-footer">
            <span class="text-xs tracking-widest uppercase text-white/50">Follow Us</span>
            <div class="flex gap-4">
                <a href="https://www.instagram.com/refineskinandbodyclinic/" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/refineskinandbodyclinic?rdid=7FBWkw4HlxQOf0lC&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1b4epu5tXm%2F" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://x.com/Refine_Skin" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.tiktok.com/discover/refine-skin-and-body-clinic-uganda" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.youtube.com/channel/UC7u54E9nKohl8w4MziXB-Zg" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</aside>
