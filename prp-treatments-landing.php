<?php
$pageCategory = "Specialty Landing";
$pageTitle = "Advanced PRP Treatments Landing Page";
$pageDescription = "Experience natural PRP therapy at Refine Clinic. Physician-led PRP Hair Restoration, PRP Facial (Vampire Facial®), and PRP Facelift in Kampala & Juba.";
$metaTitle = "PRP Hair & Facial Treatments Landing Page | Refine Clinic";
$metaDescription = "Harness your body's growth factors with PRP Hair Restoration, PRP Facials, PRP Facelift & Breast Lifting at Refine Skin & Body Clinic.";
$canonicalUrl = "https://refineskinandbody.com/prp-treatments-landing";
$metaKeywords = "PRP Kampala, PRP Hair Restoration Uganda, Vampire Facial Kampala, PRP Face Lift Uganda";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/landing-header.php'; ?>

<main>
    <!-- ============================================
         HERO SECTION: PRP TREATMENTS LANDING
         ============================================ -->
    <section class="relative min-h-[80vh] lg:min-h-[760px] w-full flex items-center justify-center overflow-hidden pt-24 pb-16 bg-brand-deeper text-white">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="/assets/imagesfromsite/prp facia-09.png" alt="PRP Treatments Banner" class="w-full h-full object-cover object-center filter brightness-[0.40] contrast-[1.1] scale-105 transform translateZ(0)">
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
                        <span class="text-white font-body text-[11px] tracking-[0.2em] uppercase font-semibold">Cellular Regeneration Clinic</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl leading-[1.1] mb-6 drop-shadow-lg">
                        Natural Healing. <br/>
                        <i class="bg-clip-text text-transparent bg-gradient-to-r from-accent-cream via-accent to-accent-light font-light">Unlock Cellular Renewal.</i>
                    </h1>

                    <!-- Short Description -->
                    <p class="font-body text-base md:text-lg text-white/80 font-light leading-relaxed max-w-md">
                        Physician-led Platelet-Rich Plasma (PRP) for Hair Restoration, PRP Facials, and PRP Facelift.
                    </p>
                </div>

                <!-- Right Column: Formester Form Card -->
                <div class="lg:col-span-5 w-full">
                    <div class="glass-panel p-6 sm:p-8 rounded-3xl bg-brand-deeper/85 backdrop-blur-2xl border border-white/15 shadow-[0_20px_50px_rgba(0,0,0,0.35)] relative overflow-hidden">
                        <!-- Card ambient glow -->
                        <div class="absolute -top-24 -right-24 w-60 h-60 rounded-full bg-accent/20 blur-3xl pointer-events-none"></div>

                        <div class="relative z-10 mb-6">
                            <span class="text-accent text-[10px] tracking-[0.25em] uppercase font-semibold block mb-1">Priority Booking</span>
                            <h3 class="font-display text-2xl text-white">Book PRP Consultation</h3>
                            <p class="text-white/60 text-xs font-light mt-1">Schedule your cellular rejuvenation assessment today.</p>
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
                                        <option value="prp_hair" selected class="bg-[#1a0f3c]">PRP Hair Restoration</option>
                                        <option value="prp_facial" class="bg-[#1a0f3c]">PRP Facial (Vampire Facial®)</option>
                                        <option value="prp_facelift" class="bg-[#1a0f3c]">PRP Facelift</option>
                                        <option value="prp_breast" class="bg-[#1a0f3c]">PRP Breast Lifting</option>
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
                                    <span>Confirm Booking Request</span>
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
         SCIENCE OF PRP REGENERATION
         ============================================ -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid xl:grid-cols-12 gap-12 lg:gap-16 items-center mb-16">
                <div class="xl:col-span-6">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand/5 border border-brand/10 text-accent font-body text-xs tracking-[0.25em] uppercase font-semibold mb-4">
                        Cellular Biology
                    </span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight mb-6">
                        Harnessing Your Body's <br/><i class="text-accent font-light">Natural Growth Factors</i>
                    </h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                        Platelet-Rich Plasma (PRP) isolates rich autologous growth factors (PDGF, VEGF, TGF-beta) from your own blood sample to awaken dormant tissue cells and rebuild collagen.
                    </p>
                </div>
                <div class="xl:col-span-6">
                    <div class="p-8 rounded-3xl bg-white border border-brand/5 shadow-md">
                        <p class="text-brand-deeper font-body text-base font-light leading-relaxed italic mb-4">
                            "Because PRP utilizes your own biological blood platelets, there is zero risk of allergic reaction, synthetic rejection, or artificial side effects."
                        </p>
                        <span class="text-xs uppercase tracking-widest text-accent font-semibold">— Dr. Henry Owiny, Aesthetic Physician</span>
                    </div>
                </div>
            </div>

            <!-- 3 Pillars -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-bold mb-6">1</div>
                    <h4 class="font-display text-xl text-brand-deeper mb-3">Centrifugal Concentration</h4>
                    <p class="text-brand-muted text-xs leading-relaxed font-light">A small blood sample is spun in a medical centrifuge to concentrate platelets up to 5x higher than normal blood plasma.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-bold mb-6">2</div>
                    <h4 class="font-display text-xl text-brand-deeper mb-3">Targeted Micro-Injection</h4>
                    <p class="text-brand-muted text-xs leading-relaxed font-light">Concentrated plasma is delivered precisely into the scalp micro-environment or facial dermis where renewal is needed.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="w-12 h-12 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-xl font-bold mb-6">3</div>
                    <h4 class="font-display text-xl text-brand-deeper mb-3">Neovascularization</h4>
                    <p class="text-brand-muted text-xs leading-relaxed font-light">Growth factors stimulate new blood vessel formation, bringing nutrients directly to hair roots and skin tissue.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         PRP PORTFOLIO
         ============================================ -->
    <section id="treatments-portfolio" class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-14">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.25em] uppercase font-semibold mb-3 border border-accent/20">
                        Regenerative Suite
                    </span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight">
                        PRP Treatments <i class="bg-clip-text text-transparent bg-gradient-to-r from-brand to-brand-light font-light">Portfolio</i>
                    </h2>
                </div>
                <p class="text-brand-muted font-body text-sm font-light leading-relaxed max-w-md">
                    Harness autologous cellular healing for hair density, facial radiance, and breast tissue firming.
                </p>
            </div>

            <!-- Bento Grid Showcase -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 1: PRP Hair Restoration -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/imagesfromsite/prp-hair-restoration-09.png" alt="PRP Hair Restoration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Hair Density</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">PRP Hair Restoration</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Micro-injections into the scalp reactivate shrinking hair follicles, increase shaft diameter, and prevent progressive thinning.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Target: Scalp Hair Density</span>
                            <a href="/prp-hair-restoration" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2: PRP Facial -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/imagesfromsite/prp facia-09.png" alt="PRP Facial" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Vampire Facial®</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">PRP Facial (Vampire Facial®)</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Microneedling combined with concentrated plasma topical infusion to fade acne scars, shrink pores, and brighten skin tone.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Results: Glowing Skin Tone</span>
                            <a href="/platelet-rich-plasma-facial" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3: PRP Facelift -->
                <div class="group rounded-3xl bg-[#faf9f6] border border-brand/5 overflow-hidden shadow-sm hover:shadow-2xl hover:border-accent/30 transition-all duration-500 flex flex-col justify-between">
                    <div class="relative h-64 overflow-hidden bg-brand-pale">
                        <img src="/assets/imagesfromsite/dermal-filter-09.png" alt="PRP Facelift" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold">Structural Volume</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display text-2xl text-brand-deeper mb-3">PRP Facelift</h3>
                            <p class="text-brand-muted text-sm font-light leading-relaxed mb-6">
                                Combination of hyaluronic acid fillers with PRP growth factor injections to lift hollow cheeks and restore youthful facial contours.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-brand/5 flex items-center justify-between">
                            <span class="text-xs text-brand-muted">Longevity: 12-18 Months</span>
                            <a href="/prp-face-lift" class="inline-flex items-center gap-2 text-accent font-semibold text-xs uppercase tracking-wider group-hover:gap-3 transition-all">
                                Explore <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         VIDEO TESTIMONIALS & INSIGHTS
         ============================================ -->
    <?php include 'includes/video-testimonials.php'; ?>


    <?php include 'includes/locations-selector.php'; ?>
</main>

<?php include 'includes/landing-footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
