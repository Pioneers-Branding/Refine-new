<?php
$pageCategory = "Specialty";
$pageTitle = "Advanced Anti-Aging & Skin Rejuvenation in Kampala & Juba";
$pageDescription = "Restore youthfulness, smooth fine lines, and enhance natural facial contours with physician-led Anti-Aging treatments at Refine Skin and Body Clinic.";
$metaTitle = "Advanced Anti-Aging & Facial Rejuvenation in Kampala | Refine Clinic";
$metaDescription = "Experience East Africa's premier anti-aging clinic. Expert Botox®, Dermal Fillers, Sculptra®, Thread Lifting, Coolifting® & BHRT at Refine Skin & Body Clinic.";
$canonicalUrl = "https://refineskinandbody.com/anti-aging";
$metaKeywords = "Anti Aging Kampala, Botox Uganda, Dermal Fillers Kampala, Sculptra Face Lift, Thread Lifting Kampala, Skin Tightening Uganda";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/landing-header.php'; ?>

<main>
    <!-- ============================================
         HOMEPAGE-STYLE FULL HERO BANNER FOR ANTI-AGING
         ============================================ -->
    <section class="relative min-h-[80vh] lg:min-h-[780px] w-full flex items-center justify-center overflow-hidden pt-24 pb-16 bg-brand-deeper text-white">
        <!-- Hero Background Image with Parallax & Duotone Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="/assets/images/services/injectables/dermal-filter-09.png" alt="Advanced Anti-Aging Banner" class="w-full h-full object-cover object-top filter brightness-[0.45] contrast-[1.1] scale-105 transform translateZ(0)">
            <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper via-brand-deeper/60 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-brand-deeper/80 via-transparent to-brand-deeper/80"></div>
        </div>

        <!-- Ambient Glow Orbs -->
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-accent/20 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-brand/40 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-[1400px] w-full mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Column: Content (Ultra-Minimal) -->
                <div class="lg:col-span-7 text-left flex flex-col items-start pr-0 lg:pr-6">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-xl border border-white/20 shadow-lg mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                        </span>
                        <span class="text-white font-body text-[11px] tracking-[0.2em] uppercase font-semibold">Anti-Aging Specialty Clinic</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl leading-[1.1] mb-6 drop-shadow-lg">
                        Reverse Time. <br/>
                        <i class="bg-clip-text text-transparent bg-gradient-to-r from-accent-cream via-accent to-accent-light font-light">Preserve Elegance.</i>
                    </h1>

                    <!-- Short Description -->
                    <p class="font-body text-base md:text-lg text-white/80 font-light leading-relaxed max-w-md">
                        Physician-led, non-surgical anti-aging treatments tailored for subtle, timeless rejuvenation.
                    </p>
                </div>

                <!-- Right Column: Formester Form Card -->
                <div class="lg:col-span-5 w-full">
                    <div class="glass-panel p-6 sm:p-8 rounded-3xl bg-brand-deeper/85 backdrop-blur-2xl border border-white/15 shadow-[0_20px_50px_rgba(0,0,0,0.35)] relative overflow-hidden">
                        <!-- Card ambient glow -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-accent/20 blur-3xl pointer-events-none"></div>

                        <div class="relative z-10 mb-6">
                            <span class="text-accent text-[10px] tracking-[0.25em] uppercase font-semibold block mb-1">Priority Booking</span>
                            <h3 class="font-display text-2xl text-white">Book Anti-Aging Consultation</h3>
                            <p class="text-white/60 text-xs font-light mt-1">Reserve your physician-led assessment today.</p>
                        </div>

                        <!-- Formester Integration -->
                        <form accept-charset="UTF-8" action="https://app.formester.com/forms/9f739eec-3fbd-49bf-a7a9-ebf490069756/submissions" method="POST" class="relative z-10 space-y-4">
                            <div>
                                <label for="hero-name" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Full Name *</label>
                                <input type="text" id="hero-name" name="name" required placeholder="Enter your full name" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-xs text-white placeholder-white/30 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label for="hero-email" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Email *</label>
                                    <input type="email" id="hero-email" name="email" required placeholder="your@email.com" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-xs text-white placeholder-white/30 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                </div>
                                <div>
                                    <label for="hero-phone" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Phone *</label>
                                    <input type="tel" id="hero-phone" name="phone" required placeholder="+256 / +211..." class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-xs text-white placeholder-white/30 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label for="hero-location" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Location *</label>
                                    <select id="hero-location" name="location" required class="w-full bg-[#1a0f3c] border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-accent transition-all">
                                        <option value="" class="bg-[#1a0f3c]">Select Location</option>
                                        <option value="forest_mall" class="bg-[#1a0f3c]">Forest Mall (HQ) — Kampala</option>
                                        <option value="kabalagala" class="bg-[#1a0f3c]">Kabalagala — Kampala</option>
                                        <option value="bukoto" class="bg-[#1a0f3c]">Bukoto — Kampala</option>
                                        <option value="juba" class="bg-[#1a0f3c]">Juba — South Sudan</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="hero-treatment" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Treatment *</label>
                                    <select id="hero-treatment" name="treatment_interest" required class="w-full bg-[#1a0f3c] border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-accent transition-all">
                                        <option value="anti_aging" selected class="bg-[#1a0f3c]">Anti-Aging & Renewal</option>
                                        <option value="botox_fillers" class="bg-[#1a0f3c]">Botox® & Dermal Fillers</option>
                                        <option value="sculptra" class="bg-[#1a0f3c]">Sculptra® Collagen</option>
                                        <option value="thread_lift" class="bg-[#1a0f3c]">PDO Thread Lifting</option>
                                        <option value="coolifting" class="bg-[#1a0f3c]">Coolifting® Gun</option>
                                        <option value="bhrt" class="bg-[#1a0f3c]">BHRT Anti-Aging</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label for="hero-date" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Date *</label>
                                    <input type="date" id="hero-date" name="appointment_date" required class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-accent transition-all [color-scheme:dark]">
                                </div>
                                <div>
                                    <label for="hero-time" class="block text-white/70 text-[11px] tracking-wider uppercase mb-1 font-medium">Time *</label>
                                    <input type="time" id="hero-time" name="appointment_time" required class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white focus:outline-none focus:border-accent transition-all [color-scheme:dark]">
                                </div>
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-accent hover:bg-white text-brand-deeper font-semibold text-xs tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-accent/20 flex items-center justify-center gap-2">
                                    <span>Confirm Consultation Request</span>
                                    <i class="fas fa-calendar-check text-xs"></i>
                                </button>
                            </div>

                            <p class="text-[10px] text-white/40 text-center font-light mt-1">
                                <i class="fas fa-lock text-[9px] mr-1"></i> Your information is confidential & secure.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         UNIQUE SECTION: THE SCIENCE OF FACIAL AGING (4 LAYERS)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid xl:grid-cols-12 gap-12 lg:gap-16 items-center mb-16">
                <div class="xl:col-span-6">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand/5 border border-brand/10 text-accent font-body text-xs tracking-[0.25em] uppercase font-semibold mb-4">
                        Clinical Insights
                    </span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight mb-6">
                        Understanding the <br/><i class="text-accent font-light">4 Layers of Facial Aging</i>
                    </h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                        True anti-aging requires addressing facial structural changes at every physiological depth—not just patching surface wrinkles.
                    </p>
                </div>
                <div class="xl:col-span-6">
                    <div class="p-8 rounded-3xl bg-white border border-brand/5 shadow-md">
                        <p class="text-brand-deeper font-body text-base font-light leading-relaxed italic mb-4">
                            "Aging occurs across skin, fat compartments, muscle activity, and bone structure simultaneously. Our multi-modality approach targets each layer precisely to deliver natural, long-lasting rejuvenation."
                        </p>
                        <span class="text-xs uppercase tracking-widest text-accent font-semibold">— Dr. Chirag Kotecha, Lead Dermatologist</span>
                    </div>
                </div>
            </div>

            <!-- Interactive 4 Layer Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Layer 1 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-display font-semibold mb-6 group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            L1
                        </div>
                        <span class="text-accent text-[10px] uppercase tracking-widest font-semibold block mb-2">Surface Layer</span>
                        <h4 class="font-display text-xl text-brand-deeper mb-3">Epidermis & Dermal Texture</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light mb-6">
                            Fine lines, pigmentation, and loss of hydration.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand/5">
                        <span class="text-[11px] font-semibold text-brand uppercase tracking-wider">Solution:</span>
                        <p class="text-xs text-brand-muted font-light mt-1">Coolifting®, LED Phototherapy, PRP Facials</p>
                    </div>
                </div>

                <!-- Layer 2 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-display font-semibold mb-6 group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            L2
                        </div>
                        <span class="text-accent text-[10px] uppercase tracking-widest font-semibold block mb-2">Dynamic Layer</span>
                        <h4 class="font-display text-xl text-brand-deeper mb-3">Expression Muscles</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light mb-6">
                            Repetitive contraction causing forehead, frown, & eye wrinkles.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand/5">
                        <span class="text-[11px] font-semibold text-brand uppercase tracking-wider">Solution:</span>
                        <p class="text-xs text-brand-muted font-light mt-1">Botox® Neuromodulators</p>
                    </div>
                </div>

                <!-- Layer 3 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-display font-semibold mb-6 group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            L3
                        </div>
                        <span class="text-accent text-[10px] uppercase tracking-widest font-semibold block mb-2">Volume Layer</span>
                        <h4 class="font-display text-xl text-brand-deeper mb-3">Subcutaneous Fat Pads</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light mb-6">
                            Hollow cheeks, sunken under-eyes, and cheek volume loss.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand/5">
                        <span class="text-[11px] font-semibold text-brand uppercase tracking-wider">Solution:</span>
                        <p class="text-xs text-brand-muted font-light mt-1">Dermal Fillers & Sculptra® Collagen</p>
                    </div>
                </div>

                <!-- Layer 4 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-display font-semibold mb-6 group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            L4
                        </div>
                        <span class="text-accent text-[10px] uppercase tracking-widest font-semibold block mb-2">Structural Layer</span>
                        <h4 class="font-display text-xl text-brand-deeper mb-3">SMAS & Ligaments</h4>
                        <p class="text-brand-muted text-xs leading-relaxed font-light mb-6">
                            Sagging jowls, marionette lines, and loss of jawline definition.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand/5">
                        <span class="text-[11px] font-semibold text-brand uppercase tracking-wider">Solution:</span>
                        <p class="text-xs text-brand-muted font-light mt-1">PDO Thread Lifting & BHRT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         UNIQUE SECTION: INTERACTIVE ANTI-AGING PORTFOLIO (BENTO GRID)
         ============================================ -->
    <section id="treatments-portfolio" class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-14">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.25em] uppercase font-semibold mb-3 border border-accent/20">
                        Curated Offerings
                    </span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight">
                        Anti-Aging <i class="bg-clip-text text-transparent bg-gradient-to-r from-brand to-brand-light font-light">Treatments Portfolio</i>
                    </h2>
                </div>
                <p class="text-brand-muted font-body text-sm font-light leading-relaxed max-w-md">
                    Each procedure is tailored specifically to your facial structure, skin type, and aesthetic goals.
                </p>
            </div>

            <!-- Bento Grid Showcase -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 1: Botox -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/images/services/injectables/botox-09.png" alt="Botox Treatment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Wrinkle Relaxer</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">Botox® Anti-Aging</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Smooth forehead creases, crow's feet, and frown lines with precision micro-injections that preserve natural facial expressions.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Duration: 15-20 Mins</span>
                            <a href="/botox" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2: Dermal Fillers -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/images/services/injectables/dermal-filter-09.png" alt="Dermal Fillers Treatment" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Volume & Contour</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">Dermal Fillers</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Restore mid-face volume, refine jawlines, lift cheeks, and soften nasolabial folds instantly with premium Hyaluronic Acid.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Results: 9 - 18 Months</span>
                            <a href="/dermal-fillers" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3: Sculptra -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/images/services/injectables/sculptra-face-lift-09.png" alt="Sculptra Treatment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Collagen Biostimulator</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">Sculptra® Face Lift</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Poly-L-lactic acid biostimulator that triggers your body's natural collagen production to gradually rebuild structural volume up to 2 years.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Longevity: Up to 24 Months</span>
                            <a href="/sculptra-face-lift" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4: Thread Lifting -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/images/services/injectables/thread-lifting-09.png" alt="Thread Lifting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Non-Surgical Lift</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">PDO Thread Lifting</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Absorbable PDO threads provide immediate mechanical lifting of sagging cheeks, jowls, and neck tissues while stimulating neocollagenesis.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Target: Cheeks, Jowls, Neck</span>
                            <a href="/thread-lifting" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5: Coolifting -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/imagesfromsite/Facial-Spa-09.webp" alt="Coolifting Treatment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Cryo Hyaluronic Facial</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">Coolifting®</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Painless 5-minute treatment delivering a high-pressure CO2 flow combined with concentrated hyaluronic acid for instant smoothing and glow.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Downtime: 0 Minutes</span>
                            <a href="/cool-lifting" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 6: BHRT -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/images/services/injectables/bhrt_09.png" alt="BHRT Therapy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Systemic Hormone Renewal</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">Bio-Identical Hormones (BHRT)</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Balance hormones at the cellular level to boost energy, preserve skin elasticity, enhance vitality, and slow metabolic aging.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Scope: Systemic Cellular Health</span>
                            <a href="/bio-identical-hormone-replacement-therapy" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         UNIQUE SECTION: MODALITY COMPARISON MATRIX
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white font-body text-xs tracking-[0.25em] uppercase font-semibold mb-4 backdrop-blur-md border border-white/10">
                    Decision Guide
                </span>
                <h2 class="text-section font-display leading-tight mb-4">
                    Which Modality Suits <i class="text-accent font-light">Your Aesthetic Goals?</i>
                </h2>
                <p class="text-white/70 font-body text-base font-light leading-relaxed">
                    Compare key Anti-Aging treatments to find your ideal solution.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm border-collapse min-w-[700px]">
                    <thead>
                        <tr class="border-b border-white/15 bg-white/5 font-display text-accent text-base">
                            <th class="py-5 px-6">Treatment</th>
                            <th class="py-5 px-6">Primary Target</th>
                            <th class="py-5 px-6">Mechanism</th>
                            <th class="py-5 px-6">Onset of Results</th>
                            <th class="py-5 px-6">Duration</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10 font-body font-light text-white/80">
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">Botox®</td>
                            <td class="py-4 px-6">Forehead, Crow's Feet, Frown</td>
                            <td class="py-4 px-6">Muscle Relaxation</td>
                            <td class="py-4 px-6">3 - 7 Days</td>
                            <td class="py-4 px-6 text-accent">3 - 6 Months</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">Dermal Fillers</td>
                            <td class="py-4 px-6">Cheeks, Lips, Jawline, Folds</td>
                            <td class="py-4 px-6">Hyaluronic Volume Restoration</td>
                            <td class="py-4 px-6">Immediate</td>
                            <td class="py-4 px-6 text-accent">9 - 18 Months</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">Sculptra®</td>
                            <td class="py-4 px-6">Full Facial Volume Loss</td>
                            <td class="py-4 px-6">Collagen Biostimulation</td>
                            <td class="py-4 px-6">Gradual (4 - 8 Weeks)</td>
                            <td class="py-4 px-6 text-accent">Up to 24 Months</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">PDO Thread Lift</td>
                            <td class="py-4 px-6">Sagging Jowls & Lower Face</td>
                            <td class="py-4 px-6">Mechanical Lift & Neocollagenesis</td>
                            <td class="py-4 px-6">Immediate + Progressive</td>
                            <td class="py-4 px-6 text-accent">12 - 18 Months</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">Coolifting®</td>
                            <td class="py-4 px-6">Dehydrated & Fine Lines</td>
                            <td class="py-4 px-6">CO2 + Hyaluronic Cryo Infusion</td>
                            <td class="py-4 px-6">Instant (5 Mins)</td>
                            <td class="py-4 px-6 text-accent">Event Glow / Cumulative</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="py-4 px-6 font-semibold text-white">BHRT Therapy</td>
                            <td class="py-4 px-6">Hormonal Skin Aging & Fatigue</td>
                            <td class="py-4 px-6">Bio-Identical Hormone Balance</td>
                            <td class="py-4 px-6">2 - 4 Weeks</td>
                            <td class="py-4 px-6 text-accent">Continuous Optimization</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ============================================
         PHYSICIAN SPOTLIGHT (DR CHIRAG)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-5">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-brand/5 group">
                        <img src="/assets/imagesfromsite/dr_chirag_kotecha.png" alt="Dr. Chirag Kotecha - Lead Specialist" class="w-full h-[480px] object-cover object-top filter grayscale-[0.1] group-hover:grayscale-0 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h4 class="font-display text-2xl">Dr. Chirag Kotecha</h4>
                            <span class="text-xs text-accent font-semibold tracking-wider uppercase">Lead Dermatologist & Aesthetic Specialist</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.25em] uppercase font-semibold mb-4 border border-accent/20">
                        Mastery & Vision
                    </span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight mb-6">
                        "The Highest Art in Anti-Aging is <i class="text-accent font-light">Subtlety."</i>
                    </h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-6">
                        "Our goal at Refine Clinic is not to make you look like someone else. We aim to restore your facial proportions, relax unnatural stress tension, and return the vitality of your younger self."
                    </p>
                    <div class="grid sm:grid-cols-2 gap-6 pt-4 border-t border-brand/10">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="font-heading font-semibold text-brand-deeper text-sm">Individualized Micro-Dosing</h5>
                                <p class="text-xs text-brand-muted font-light mt-1">Precise, customized units tuned specifically to your face.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="font-heading font-semibold text-brand-deeper text-sm">Safety First Protocol</h5>
                                <p class="text-xs text-brand-muted font-light mt-1">FDA-approved injectables & medical sterility.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         MYTHS & PATIENT REVIEWS
         ============================================ -->

    <!-- ============================================
         VIDEO TESTIMONIALS & INSIGHTS
         ============================================ -->
    <?php include 'includes/video-testimonials.php'; ?>

    <section id="patient-reviews" class="py-16 lg:py-24 bg-surface-cool relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand/5 border border-brand/10 mb-4">
                    <span class="text-accent font-body text-[10px] tracking-[0.25em] uppercase font-semibold">Testimonials</span>
                </div>
                <h2 class="font-display text-section text-brand-deeper leading-tight mb-4">
                    Stories of Renewal & <i class="bg-clip-text text-transparent bg-gradient-to-r from-brand to-brand-light font-light">Confidence.</i>
                </h2>
                <p class="text-brand-muted font-body text-base font-light leading-relaxed">
                    Verified experiences from our anti-aging client family in Kampala & Juba.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-6 italic">
                        "I was hesitant about Botox and Fillers, but Dr. Chirag explained everything so thoroughly. The results are incredibly natural—my friends said I look well-rested!"
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-brand/5">
                        <div class="w-10 h-10 rounded-full bg-accent/20 text-brand font-display font-semibold flex items-center justify-center">G</div>
                        <div>
                            <h5 class="font-heading font-semibold text-brand-deeper text-sm">Grace K.</h5>
                            <span class="text-xs text-brand-muted font-light">Kampala Branch</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-6 italic">
                        "The Sculptra treatment exceeded my expectations. Over a few months, my cheeks regained their youthful firmness without any obvious signs of work done."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-brand/5">
                        <div class="w-10 h-10 rounded-full bg-accent/20 text-brand font-display font-semibold flex items-center justify-center">M</div>
                        <div>
                            <h5 class="font-heading font-semibold text-brand-deeper text-sm">Michael N.</h5>
                            <span class="text-xs text-brand-muted font-light">Bukoto Branch</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-6 italic">
                        "Coolifting and LED Light Therapy before my event gave my skin an instant glowing boost. Refine Clinic is by far the top aesthetic medical clinic in Uganda."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-brand/5">
                        <div class="w-10 h-10 rounded-full bg-accent/20 text-brand font-display font-semibold flex items-center justify-center">J</div>
                        <div>
                            <h5 class="font-heading font-semibold text-brand-deeper text-sm">Josefin A.</h5>
                            <span class="text-xs text-brand-muted font-light">Kabalagala Branch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         FAQS SECTION
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1000px] mx-auto px-6 lg:px-10">
            <div class="text-center mb-16">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Common Inquiries</span>
                <h3 class="text-section font-display text-brand-deeper mb-6">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
                <p class="text-brand-muted font-body text-base font-light leading-relaxed">
                    Clear answers to help you feel confident in your Anti-Aging journey.
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-[#faf9f6] border border-brand/5 shadow-sm hover:border-accent/30 transition-all duration-300">
                    <div class="p-6 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent transition-colors">1. What age should I start anti-aging treatments?</h4>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-6 pb-6 pt-0 border-t border-brand/5">
                            <p class="text-brand-muted font-body text-sm leading-relaxed pt-4">Preventative anti-aging treatments often begin in the late 20s to early 30s when natural collagen synthesis slows down. However, treatments can be customized for any age group to restore volume or smooth existing lines.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-[#faf9f6] border border-brand/5 shadow-sm hover:border-accent/30 transition-all duration-300">
                    <div class="p-6 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent transition-colors">2. How long do Botox and Dermal Filler results last?</h4>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-6 pb-6 pt-0 border-t border-brand/5">
                            <p class="text-brand-muted font-body text-sm leading-relaxed pt-4">Botox® typically lasts 3 to 6 months. Dermal Fillers last 9 to 18 months depending on product density and placement, while Sculptra® collagen biostimulator can last up to 2 years.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-[#faf9f6] border border-brand/5 shadow-sm hover:border-accent/30 transition-all duration-300">
                    <div class="p-6 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent transition-colors">3. Is there any downtime after Anti-Aging procedures?</h4>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-6 pb-6 pt-0 border-t border-brand/5">
                            <p class="text-brand-muted font-body text-sm leading-relaxed pt-4">Most non-surgical procedures like Botox, Fillers, and Coolifting require minimal to zero downtime, allowing you to return to work or daily activities immediately.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-[#faf9f6] border border-brand/5 shadow-sm hover:border-accent/30 transition-all duration-300">
                    <div class="p-6 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent transition-colors">4. Can different anti-aging treatments be combined?</h4>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-6 pb-6 pt-0 border-t border-brand/5">
                            <p class="text-brand-muted font-body text-sm leading-relaxed pt-4">Yes! Combining treatments—such as Botox for dynamic lines, Fillers for volume loss, and LED therapy for skin texture—yields the most harmonious, complete facial renewal.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group bg-[#faf9f6] border border-brand/5 shadow-sm hover:border-accent/30 transition-all duration-300">
                    <div class="p-6 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent transition-colors">5. How do I choose the right treatment for my face?</h4>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center flex-shrink-0 transition-colors">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent transition-transform duration-500 transform group-[.active]:rotate-45"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="px-6 pb-6 pt-0 border-t border-brand/5">
                            <p class="text-brand-muted font-body text-sm leading-relaxed pt-4">We start every patient journey with an in-depth consultation. Our specialists assess your facial anatomy, skin elasticity, and personal desires to curate a tailored anti-aging roadmap.</p>
                        </div>
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
                    const content = el.querySelector('.faq-content');
                    if (content) content.style.maxHeight = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    if (content) content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });
    </script>

    <?php include 'includes/locations-selector.php'; ?>
</main>

<?php include 'includes/landing-footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
