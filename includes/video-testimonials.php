<!-- ============================================
     VIDEO TESTIMONIALS & INSIGHTS SECTION
     Horizontal Scroll Carousel with Modal Lightbox
     ============================================ -->
<!-- Custom CSS to hide scrollbars while scrolling across all browsers -->
<style>
#vt-scroll-container {
    -ms-overflow-style: none !important;
    scrollbar-width: none !important;
}
#vt-scroll-container::-webkit-scrollbar {
    display: none !important;
    width: 0 !important;
    height: 0 !important;
}
</style>

<section id="video-testimonials" class="py-16 lg:py-24 bg-surface-warm/40 relative overflow-hidden">
    <!-- Subtle Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl pointer-events-none -mr-20 -mt-20"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none -ml-20 -mb-20"></div>

    <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10">

        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-12 gs-reveal-text">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand/5 border border-brand/10 mb-4">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-accent font-body text-[10px] tracking-[0.25em] uppercase font-semibold">Official Refine Channel</span>
                </div>
                <h2 class="font-display text-section text-brand-deeper leading-tight">
                    Video Testimonials <i class="bg-clip-text text-transparent bg-gradient-to-r from-brand via-brand-light to-accent font-light">& Insights.</i>
                </h2>
                <p class="text-brand-muted font-body text-base lg:text-lg font-light leading-relaxed mt-4">
                    Watch authentic patient transformations, treatment demonstrations, and clinical insights directly from <strong>Refine Skin & Body Clinic</strong>.
                </p>
            </div>

            <!-- Navigation Controls & YouTube Link -->
            <div class="flex items-center gap-4 self-start lg:self-end">
                <a href="https://www.youtube.com/@refineskinandbodyclinic" target="_blank" rel="noopener noreferrer"
                   class="hidden sm:inline-flex items-center gap-2 px-5 py-3 rounded-full border border-brand/15 bg-white hover:bg-brand-deeper hover:text-white hover:border-brand-deeper text-brand-deeper text-xs font-semibold uppercase tracking-wider transition-all duration-300 shadow-sm group">
                    <i class="fab fa-youtube text-red-600 group-hover:text-accent text-base transition-colors"></i>
                    <span>Visit YouTube Channel</span>
                </a>

                <div class="flex items-center gap-2">
                    <button id="vt-scroll-prev" aria-label="Previous Videos"
                            class="w-12 h-12 rounded-full border border-brand/15 bg-white text-brand-deeper hover:bg-brand hover:text-white hover:border-brand flex items-center justify-center transition-all duration-300 shadow-sm disabled:opacity-40 disabled:cursor-not-allowed">
                        <i class="fas fa-chevron-left text-sm"></i>
                    </button>
                    <button id="vt-scroll-next" aria-label="Next Videos"
                            class="w-12 h-12 rounded-full border border-brand/15 bg-white text-brand-deeper hover:bg-brand hover:text-white hover:border-brand flex items-center justify-center transition-all duration-300 shadow-sm disabled:opacity-40 disabled:cursor-not-allowed">
                        <i class="fas fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Horizontal Scroll Cards Container -->
        <div id="vt-scroll-container" 
             class="flex gap-6 lg:gap-8 overflow-x-auto scrollbar-none snap-x snap-mandatory py-4 px-1 scroll-smooth">

            <!-- Video Card 1 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('PcZRu7c50tA', 'Refine Clinical Consultation & Treatment Demonstration', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/PcZRu7c50tA/hqdefault.jpg" 
                             alt="Refine Clinical Consultation & Treatment Demonstration" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            Clinical Dermatology
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 1
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-accent"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            Refine Clinical Consultation & Aesthetic Treatment Demonstration
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "Expert clinical assessment and personalized aesthetic skin treatment at Refine Skin & Body Clinic."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('PcZRu7c50tA', 'Refine Clinical Consultation & Aesthetic Treatment Demonstration', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Video Card 2 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('OJh3P4kADCk', 'Chickenpox Scars: PRP & Microneedling Treatment', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/OJh3P4kADCk/hqdefault.jpg" 
                             alt="Chickenpox Scars: PRP & Microneedling Treatment" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            PRP & Microneedling
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 2
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-accent"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            Chickenpox Scars: PRP & Microneedling Treatment
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "Demonstrating platelet-rich plasma and microneedling therapy for chickenpox scar reduction."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('OJh3P4kADCk', 'Chickenpox Scars: PRP & Microneedling Treatment', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('VVzZ22XlhKM', 'Botox, Dermal Fillers & Clinical Dermatology Masterclass', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/VVzZ22XlhKM/hqdefault.jpg" 
                             alt="Botox, Dermal Fillers & Clinical Dermatology Masterclass" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            Botox & Fillers
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 3
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-accent"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            Botox, Dermal Fillers & Clinical Dermatology Masterclass
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "Insights on wrinkle relaxation, pore tightening, and facial contouring with Botox and fillers."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('VVzZ22XlhKM', 'Botox, Dermal Fillers & Clinical Dermatology Masterclass', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Video Card 4 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('sTRAlYMFir0', 'Semaglutide Medical Weight Loss Journey & Body Contouring', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/sTRAlYMFir0/hqdefault.jpg" 
                             alt="Semaglutide Medical Weight Loss Journey & Body Contouring" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            Medical Weight Loss
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 4
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            Semaglutide Medical Weight Loss Journey & Body Contouring
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "Safe medical weight loss program with Semaglutide under physician care at Refine Clinic."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('sTRAlYMFir0', 'Semaglutide Medical Weight Loss Journey & Body Contouring', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Video Card 5 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('6xqmFsXHOxc', 'Corn Removal Treatment with Fractional CO2 Laser', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/6xqmFsXHOxc/hqdefault.jpg" 
                             alt="Corn Removal Treatment with Fractional CO2 Laser" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            CO2 Laser Treatment
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 5
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-purple-500"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            Corn Removal Treatment with Fractional CO2 Laser
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "Precision fractional CO2 laser ablation for painless corn and lesion removal."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('6xqmFsXHOxc', 'Corn Removal Treatment with Fractional CO2 Laser', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Video Card 6 -->
            <div class="snap-start flex-none w-[300px] sm:w-[360px] lg:w-[400px] bg-white rounded-2xl border border-brand/10 shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                <div>
                    <!-- Thumbnail Container -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-brand-deeper cursor-pointer"
                         onclick="openVideoModal('mW2HSLJmeTA', 'HydraFacial MD & Deep Cleansing Rejuvenation', 'Dr. Chirag Kotecha — Refine Clinic')">
                        <img src="https://img.youtube.com/vi/mW2HSLJmeTA/hqdefault.jpg" 
                             alt="HydraFacial MD & Deep Cleansing Rejuvenation" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-brand-deeper/30 to-transparent"></div>
                        
                        <!-- Top Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20">
                            HydraFacial MD
                        </span>

                        <!-- Duration Tag -->
                        <span class="absolute bottom-4 right-4 px-2.5 py-1 bg-brand-deeper/80 backdrop-blur-md rounded-md text-[11px] text-white font-mono font-medium flex items-center gap-1.5 border border-white/10">
                            <i class="fas fa-play text-[9px] text-accent"></i> Refine Video 6
                        </span>

                        <!-- Centered Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-accent/90 text-brand-deeper shadow-xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300 flex items-center justify-center pl-1">
                                <i class="fas fa-play text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2 h-2 rounded-full bg-accent"></span>
                            <span class="text-xs font-semibold text-brand tracking-wide uppercase">Dr. Chirag Kotecha — Refine Clinic</span>
                        </div>
                        <h3 class="font-display text-lg lg:text-xl text-brand-deeper group-hover:text-brand transition-colors line-clamp-2 leading-snug mb-3">
                            HydraFacial MD & Deep Cleansing Rejuvenation
                        </h3>
                        <p class="text-brand-muted text-xs font-light leading-relaxed line-clamp-2 italic pl-1">
                            "3-step vortex extraction, exfoliation, and hydration treatment for glowing skin."
                        </p>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                    <span class="text-[11px] text-brand-muted font-medium">Refine Channel</span>
                    <button onclick="openVideoModal('mW2HSLJmeTA', 'HydraFacial MD & Deep Cleansing Rejuvenation', 'Dr. Chirag Kotecha — Refine Clinic')"
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand group-hover:text-brand-deeper uppercase tracking-wider group-hover:gap-2.5 transition-all">
                        Watch Video <i class="fas fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================
     VIDEO LIGHTBOX MODAL
     ============================================ -->
<div id="vt-video-modal" 
     class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/85 backdrop-blur-md transition-opacity duration-300 opacity-0"
     onclick="closeVideoModal(event)">
    <div class="relative w-full max-w-4xl bg-brand-deeper rounded-2xl overflow-hidden shadow-2xl border border-white/10"
         onclick="event.stopPropagation()">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-white/10 bg-brand-deeper/90">
            <div class="pr-4 flex-1">
                <h4 id="vt-modal-title" class="font-display text-base sm:text-lg text-white font-semibold line-clamp-1">Video Title</h4>
                <p id="vt-modal-speaker" class="text-xs text-accent font-light">Speaker Name</p>
            </div>
            
            <div class="flex items-center gap-3">
                <!-- Direct YouTube Watch Fallback Button -->
                <a id="vt-modal-yt-btn" href="https://www.youtube.com/@refineskinandbodyclinic" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-red-600 hover:bg-red-700 text-white text-xs font-semibold transition-all shadow-sm">
                    <i class="fab fa-youtube text-sm"></i>
                    <span>Watch on YouTube</span>
                </a>

                <button onclick="closeVideoModal()" 
                        aria-label="Close Video"
                        class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors flex-shrink-0">
                    <i class="fas fa-times text-base"></i>
                </button>
            </div>
        </div>

        <!-- Modal Video Player Container (16:9) -->
        <div class="relative aspect-video w-full bg-black">
            <iframe id="vt-modal-iframe" 
                    class="w-full h-full border-0" 
                    src="" 
                    title="YouTube Video Player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<!-- ============================================
     JS HANDLER FOR SCROLL & LIGHTBOX MODAL
     ============================================ -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('vt-scroll-container');
    const prevBtn = document.getElementById('vt-scroll-prev');
    const nextBtn = document.getElementById('vt-scroll-next');

    if (container && prevBtn && nextBtn) {
        const scrollAmount = 400;

        prevBtn.addEventListener('click', () => {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        const updateButtons = () => {
            const maxScroll = container.scrollWidth - container.clientWidth;
            prevBtn.disabled = container.scrollLeft <= 5;
            nextBtn.disabled = container.scrollLeft >= maxScroll - 5;
        };

        container.addEventListener('scroll', updateButtons, { passive: true });
        updateButtons();
    }
});

function openVideoModal(videoId, title, speaker) {
    const modal = document.getElementById('vt-video-modal');
    const iframe = document.getElementById('vt-modal-iframe');
    const titleEl = document.getElementById('vt-modal-title');
    const speakerEl = document.getElementById('vt-modal-speaker');
    const ytBtn = document.getElementById('vt-modal-yt-btn');

    if (!modal || !iframe) return;

    titleEl.textContent = title || 'Refine Clinic Video';
    speakerEl.textContent = speaker || 'Dr. Chirag Kotecha — Refine Clinic';

    // Update direct YouTube watch link
    if (ytBtn) {
        ytBtn.href = `https://www.youtube.com/watch?v=${videoId}`;
    }

    // Embed YouTube player using exact provided ID with autoplay
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;

    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
    }, 10);

    document.body.style.overflow = 'hidden';
}

function closeVideoModal(event) {
    const modal = document.getElementById('vt-video-modal');
    const iframe = document.getElementById('vt-modal-iframe');

    if (!modal || !iframe) return;

    modal.classList.add('opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
        iframe.src = '';
        document.body.style.overflow = '';
    }, 300);
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeVideoModal();
    }
});
</script>
