<!-- ============================================
     OUR HAPPY PATIENTS SECTION
     Pure Image-Only Horizontal Scroll Carousel with Lightbox
     ============================================ -->
<style>
#hp-scroll-container {
    -ms-overflow-style: none !important;
    scrollbar-width: none !important;
}
#hp-scroll-container::-webkit-scrollbar {
    display: none !important;
    width: 0 !important;
    height: 0 !important;
}
</style>

<section id="happy-patients" class="py-16 lg:py-24 bg-surface-cool/60 relative overflow-hidden">
    <!-- Ambient Gradient Orbs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none -ml-20 -mt-20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl pointer-events-none -mr-20 -mb-20"></div>

    <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10">

        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-10 gs-reveal-text">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand/5 border border-brand/10 mb-4">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-accent font-body text-[10px] tracking-[0.25em] uppercase font-semibold">Real Patient Stories &amp; Highlights</span>
                </div>
                <h2 class="font-display text-section text-brand-deeper leading-tight">
                    Our Happy <i class="bg-clip-text text-transparent bg-gradient-to-r from-brand via-brand-light to-accent font-light">Patients.</i>
                </h2>
                <p class="text-brand-muted font-body text-base lg:text-lg font-light leading-relaxed mt-3">
                    Explore real skin transformation highlights, treatment insights, and patient results shared directly from <strong>Refine Skin &amp; Body Clinic</strong>.
                </p>
            </div>

            <!-- Carousel Controls -->
            <div class="flex items-center gap-3 self-start lg:self-end">
                <button id="hp-scroll-prev" aria-label="Previous Stories"
                        class="w-12 h-12 rounded-full border border-brand/15 bg-white text-brand-deeper hover:bg-brand hover:text-white hover:border-brand flex items-center justify-center transition-all duration-300 shadow-sm disabled:opacity-40 disabled:cursor-not-allowed">
                    <i class="fas fa-chevron-left text-sm"></i>
                </button>
                <button id="hp-scroll-next" aria-label="Next Stories"
                        class="w-12 h-12 rounded-full border border-brand/15 bg-white text-brand-deeper hover:bg-brand hover:text-white hover:border-brand flex items-center justify-center transition-all duration-300 shadow-sm disabled:opacity-40 disabled:cursor-not-allowed">
                    <i class="fas fa-chevron-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Horizontal Scroll Cards Container (Image-Only Cards) -->
        <div id="hp-scroll-container" 
             class="flex gap-6 lg:gap-8 overflow-x-auto scrollbar-none snap-x snap-mandatory py-4 px-1 scroll-smooth">

            <!-- Card 1 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-1.jpg', 'Smooth Skin Texture - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-1.jpg" 
                         alt="Happy Patient Story 1" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-2.jpg', 'Clear Skin Journey - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-2.jpg" 
                         alt="Happy Patient Story 2" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-3.jpg', 'Microneedling with Polynucleotides - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-3.jpg" 
                         alt="Happy Patient Story 3" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-4.jpg', 'Radiant Holiday Glow - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-4.jpg" 
                         alt="Happy Patient Story 4" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-5.jpg', 'Clinical Microneedling Care - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-5.jpg" 
                         alt="Happy Patient Story 5" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-6.jpg', 'Before & After Microneedling (4 Sessions) - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-6.jpg" 
                         alt="Happy Patient Story 6" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="snap-start flex-none w-[280px] sm:w-[320px] lg:w-[360px] bg-white rounded-2xl border border-brand/10 shadow-md hover:shadow-2xl transition-all duration-500 group overflow-hidden cursor-pointer"
                 onclick="openHpModal('/assets/images/happy-patients/patient-story-7.jpg', 'Harmony XL Pro Laser Tattoo Removal - Refine Clinic')">
                <div class="relative aspect-square sm:aspect-[4/5] overflow-hidden bg-brand-deeper">
                    <img src="/assets/images/happy-patients/patient-story-7.jpg" 
                         alt="Happy Patient Story 7" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-accent/90 text-brand-deeper shadow-xl flex items-center justify-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="fas fa-search-plus text-base"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================
     HAPPY PATIENTS IMAGE LIGHTBOX MODAL
     ============================================ -->
<div id="hp-image-modal" 
     class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/90 backdrop-blur-md transition-opacity duration-300 opacity-0"
     onclick="closeHpModal(event)">
    <div class="relative w-full max-w-3xl bg-brand-deeper rounded-2xl overflow-hidden shadow-2xl border border-white/10"
         onclick="event.stopPropagation()">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-white/10 bg-brand-deeper/90">
            <div class="pr-4 flex-1">
                <h4 id="hp-modal-title" class="font-display text-base sm:text-lg text-white font-semibold line-clamp-1">Refine Clinic Patient Story</h4>
                <p id="hp-modal-subtitle" class="text-xs text-accent font-light">Refine Skin &amp; Body Clinic</p>
            </div>
            
            <button onclick="closeHpModal()" 
                    aria-label="Close Preview"
                    class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors flex-shrink-0">
                <i class="fas fa-times text-base"></i>
            </button>
        </div>

        <!-- Modal Image Container -->
        <div class="relative max-h-[80vh] overflow-y-auto p-4 flex items-center justify-center bg-black/60">
            <img id="hp-modal-img" src="" alt="Patient Story Preview" class="max-w-full max-h-[72vh] object-contain rounded-lg shadow-xl">
        </div>
    </div>
</div>

<!-- ============================================
     JS HANDLER FOR HAPPY PATIENTS SCROLL & MODAL
     ============================================ -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('hp-scroll-container');
    const prevBtn = document.getElementById('hp-scroll-prev');
    const nextBtn = document.getElementById('hp-scroll-next');

    if (container && prevBtn && nextBtn) {
        const scrollAmount = 360;

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

function openHpModal(imageSrc, title, subtitle) {
    const modal = document.getElementById('hp-image-modal');
    const img = document.getElementById('hp-modal-img');
    const titleEl = document.getElementById('hp-modal-title');
    const subtitleEl = document.getElementById('hp-modal-subtitle');

    if (!modal || !img) return;

    img.src = imageSrc;
    titleEl.textContent = title || 'Refine Clinic Patient Story';
    subtitleEl.textContent = subtitle || 'Refine Skin & Body Clinic';

    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
    }, 10);

    document.body.style.overflow = 'hidden';
}

function closeHpModal(event) {
    const modal = document.getElementById('hp-image-modal');
    const img = document.getElementById('hp-modal-img');

    if (!modal || !img) return;

    modal.classList.add('opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
        img.src = '';
        document.body.style.overflow = '';
    }, 300);
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeHpModal();
    }
});
</script>
