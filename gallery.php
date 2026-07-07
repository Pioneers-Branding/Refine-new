<?php
$pageCategory = "The Results";
$pageTitle = "Clinic <i class='text-brand font-light'>Gallery.</i>";
$pageDescription = "Browse through our collection of authentic transformations, state-of-the-art clinic interiors, and the premium equipment we use to deliver uncompromising results.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CLINIC VIDEO TOUR
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 gs-reveal-fade">
            <div class="relative w-full aspect-video rounded-[40px] overflow-hidden shadow-2xl group cursor-pointer">
                <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_welcome-to1.webp" alt="Video Tour Thumbnail" class="absolute inset-0 w-full h-full object-cover filter brightness-75 group-hover:brightness-50 transition-all duration-700 transform group-hover:scale-105">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-3xl border border-white/30 transform group-hover:scale-110 transition-transform shadow-2xl">
                        <i class="fas fa-play ml-2"></i>
                    </div>
                </div>
                <div class="absolute bottom-10 left-10 text-white">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-2 font-semibold shadow-black drop-shadow-md">Virtual Tour</span>
                    <h3 class="text-section font-display shadow-black drop-shadow-lg">Experience Refine</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         GALLERY FILTERS & GRID
         ============================================ -->
                        <section class="py-16 lg:py-24 bg-surface-warm relative" id="gallery-section">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            
            <div class="text-center mb-16 gs-reveal-text">
                <h2 class="text-section font-display text-brand-deeper mb-6">Our <i class="text-accent font-light">Spaces & Results.</i></h2>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-16 gs-reveal-text">
                <button class="filter-btn px-6 py-2 rounded-full border-none bg-brand text-white text-sm font-semibold transition-colors shadow-md" data-filter="all">All</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="video">Videos</button>
                <button class="filter-btn px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors" data-filter="image">Images</button>
            </div>

            <!-- Masonry Grid -->
            <div class="columns-1 md:columns-3 lg:columns-4 gap-6 space-y-6" id="media-grid">
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-01-18_DE99oi9xPvA.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-01-08_DEkSaviirqa.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-01-13_DExB0ZMBDyC.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-01-24_DFNglaABf3Y.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-01-28_DFXOFK5M2Di.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-02-14_DGDwhMZIO_r.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-02-20_DGSUPOWIHRL.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-02-25_DGfM32gIDnL.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-03-01_DGpTQwLpGYu.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                <!-- Video -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="video" style="display: none;">
                    <video src="/assets/images/refineskinandbodyclinic_2025-03-04_DGxUvxFPG6e.mp4" class="gallery-video w-full h-auto rounded-3xl cursor-pointer" controls preload="metadata"></video>
                </div>
                
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/Rejuvenation_10_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/Sclerotherapy_11_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/PRP_8_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/HydraFacial.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/Microblading-new.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/Facial_4_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/Scrub%20Massage_12_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/hot%20stone%20therapy_5_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/skincare_general/plasma%20pen%20therapy_6_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/injectables/Botox.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/injectables/threadlifts_13_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/injectables/4.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/acne_and_scars/Acne1.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/pigmentation/vitiligo_14_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/services/hair-restoration/prp%20hair%20restoration_7_11zon.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/clinic_and_brand/tempgallery2.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/uncategorized/IV%20THERAPY.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
                <!-- Image -->
                <div class="filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg" data-category="image" style="display: none;">
                    <img src="/assets/images/uncategorized/dermatology-new.webp" alt="Gallery Image" class="gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]" loading="lazy">
                </div>
</div>
            
            <div class="mt-16 text-center flex justify-center gap-4" id="load-more-container">
                <button id="load-more-btn" class="btn-magnetic btn-outline magnetic-target">
                    <span>Load More Imagery</span>
                </button>
                <button id="show-less-btn" class="btn-magnetic magnetic-target" style="display: none; background: transparent; color: #1a0f3c; border: 1px solid rgba(26, 15, 60, 0.2);">
                    <span>Show Less</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Image Lightbox Modal -->
    <div id="lightbox-modal" class="fixed inset-0 z-[9999] bg-black/95 backdrop-blur-md hidden flex items-center justify-center opacity-0 transition-opacity duration-300">
        <button id="lightbox-close" class="absolute top-6 right-6 text-white/70 hover:text-white text-4xl p-4 cursor-pointer focus:outline-none">&times;</button>
        <img id="lightbox-img" src="" alt="Fullscreen Preview" class="max-w-[90vw] max-h-[90vh] object-contain rounded-xl shadow-2xl transform scale-95 transition-transform duration-300">
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.filter-item');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const showLessBtn = document.getElementById('show-less-btn');
        const loadMoreContainer = document.getElementById('load-more-container');
        
        const INITIAL_COUNT = 12;
        let visibleCount = INITIAL_COUNT; // Approx 3 rows of 4 columns
        const itemsArray = Array.from(items);

        function updateVisibility() {
            let activeFilter = 'all';
            filterBtns.forEach(b => {
                if(b.classList.contains('bg-brand')) {
                    activeFilter = b.getAttribute('data-filter');
                }
            });

            // Get items matching current filter
            const filteredItems = itemsArray.filter(item => {
                return activeFilter === 'all' || item.getAttribute('data-category') === activeFilter;
            });

            // Hide all items first
            itemsArray.forEach(item => item.style.display = 'none');

            // Show up to visibleCount
            for(let i=0; i<filteredItems.length; i++) {
                if(i < visibleCount) {
                    filteredItems[i].style.display = 'block';
                }
            }

            // Toggle "Load More"
            if(visibleCount >= filteredItems.length) {
                loadMoreBtn.style.display = 'none';
            } else {
                loadMoreBtn.style.display = 'inline-flex';
            }

            // Toggle "Show Less"
            if(visibleCount > INITIAL_COUNT) {
                showLessBtn.style.display = 'inline-flex';
            } else {
                showLessBtn.style.display = 'none';
            }

            // Hide container entirely if there are 12 or less items in this category
            if(filteredItems.length <= INITIAL_COUNT) {
                loadMoreContainer.style.display = 'none';
            } else {
                loadMoreContainer.style.display = 'flex';
            }
        }

        // --- Filtering Logic ---
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-brand', 'text-white', 'border-none', 'shadow-md');
                    b.classList.add('border', 'border-brand/20', 'text-brand');
                });
                btn.classList.add('bg-brand', 'text-white', 'border-none', 'shadow-md');
                btn.classList.remove('border', 'border-brand/20', 'text-brand');

                visibleCount = INITIAL_COUNT; 
                updateVisibility();
            });
        });

        // --- Load More Logic ---
        loadMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();
            visibleCount += 12; // Load 12 more items
            updateVisibility();
        });

        // --- Show Less Logic ---
        showLessBtn.addEventListener('click', (e) => {
            e.preventDefault();
            visibleCount = INITIAL_COUNT; // Reset back to initial
            updateVisibility();
            
            // Scroll back to the top of the gallery section gently
            const gallerySection = document.getElementById('gallery-section');
            if(gallerySection) {
                gallerySection.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Initialize visibility on page load
        updateVisibility();

        // --- Video Fullscreen Logic ---
        const videos = document.querySelectorAll('.gallery-video');
        videos.forEach(video => {
            video.addEventListener('dblclick', () => {
                if (video.requestFullscreen) {
                    video.requestFullscreen();
                } else if (video.webkitRequestFullscreen) { /* Safari */
                    video.webkitRequestFullscreen();
                } else if (video.msRequestFullscreen) { /* IE11 */
                    video.msRequestFullscreen();
                }
            });
        });

        // --- Image Lightbox Logic ---
        const galleryImages = document.querySelectorAll('.gallery-image');
        const modal = document.getElementById('lightbox-modal');
        const modalImg = document.getElementById('lightbox-img');
        const closeBtn = document.getElementById('lightbox-close');

        function openLightbox(src) {
            modalImg.src = src;
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
        }

        function closeLightbox() {
            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modalImg.src = '';
            }, 300);
        }

        galleryImages.forEach(img => {
            img.addEventListener('click', () => {
                openLightbox(img.src);
            });
        });

        closeBtn.addEventListener('click', closeLightbox);
        
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    });
    </script>

    <!-- ============================================
         TECHNOLOGY SPOTLIGHT
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="text-center mb-16 gs-reveal-text">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Our Arsenal</span>
                <h2 class="text-section font-display text-brand-deeper">Clinical <i class="text-accent font-light">Technology.</i></h2>
                <p class="text-brand-muted font-body text-sm mt-4 font-light max-w-2xl mx-auto">We utilize only the gold standard in FDA-approved aesthetic technology.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 gs-stagger-bento">
                <!-- Tech 1 -->
                <div class="glass-panel p-8 rounded-[32px] group hover:bg-surface-warm transition-colors border border-brand/5 flex items-center gap-8">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 relative">
                        <img src="/assets/imagesfromsite/Refine-hydra-facial.webp" alt="HydraFacial Machine" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-brand-deeper text-xl mb-2">HydraFacial MDÃ‚Â®</h3>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">Medical-grade resurfacing and hydration system.</p>
                    </div>
                </div>

                <!-- Tech 2 -->
                <div class="glass-panel p-8 rounded-[32px] group hover:bg-surface-warm transition-colors border border-brand/5 flex items-center gap-8">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 relative">
                        <img src="/assets/imagesfromsite/Refine-skin-tightening.webp" alt="Laser Tech" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-brand-deeper text-xl mb-2">Candela Nd:YAG Laser</h3>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">The safest, most effective laser hair removal for dark skin types.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
