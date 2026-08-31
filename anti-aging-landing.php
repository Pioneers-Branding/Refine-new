<?php
$pageCategory = "Specialty Landing";
$pageTitle = "Advanced Anti-Aging & Skin Rejuvenation Landing Page";
$pageDescription = "Restore youthfulness, smooth fine lines, and enhance natural facial contours with physician-led Anti-Aging treatments at Refine Skin and Body Clinic.";
$metaTitle = "Advanced Anti-Aging & Facial Rejuvenation | Refine Clinic";
$metaDescription = "Experience East Africa's premier anti-aging clinic. Expert Botox®, Dermal Fillers, Sculptra®, Thread Lifting, Coolifting® & BHRT at Refine Skin & Body Clinic.";
$canonicalUrl = "https://refineskinandbody.com/anti-aging-landing";
$metaKeywords = "Anti Aging Kampala, Botox Uganda, Dermal Fillers Kampala, Sculptra Face Lift, Thread Lifting Kampala, Skin Tightening Uganda";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/landing-header.php'; ?>

<main>
    <!-- ============================================
         HERO BANNER FOR ANTI-AGING LANDING
         ============================================ -->
    <section class="relative min-h-[80vh] lg:min-h-[780px] w-full flex items-center justify-center overflow-hidden pt-24 pb-16 bg-brand-deeper text-white">
        <!-- Hero Background Image -->
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
         VIDEO TESTIMONIALS & INSIGHTS
         ============================================ -->
    <?php include 'includes/video-testimonials.php'; ?>


    <?php include 'includes/locations-selector.php'; ?>
</main>

<?php include 'includes/landing-footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
