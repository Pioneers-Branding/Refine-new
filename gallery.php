<?php
$metaTitle = "Gallery | Clinic Photos, Treatment Videos & Instagram Archive | Refine Skin & Body Clinic";
$metaDescription = "Browse the complete Refine Skin & Body Clinic gallery: clinic tours, real treatment photos and videos, and our full Instagram archive from 2025 to 2026.";
$canonicalUrl = "https://refineskinandbody.com/gallery";
$pageCategory = "The Results";
$pageTitle = "Clinic <i class='text-brand font-light'>Gallery.</i>";
$pageDescription = "Clinic tours, real treatment moments and every post from our Instagram — all in one place.";

// Web-friendly clinic, treatment-result, and team images from the cloud-drive export.
$staticImages = [
    "/assets/images/gallery/Kabalagala1.webp", "/assets/images/gallery/Kabalagala2.webp", "/assets/images/gallery/Kabalagala3.webp",
    "/assets/images/gallery/DJI_20260717142756_0228_D.webp", "/assets/images/gallery/DJI_20260717143417_0234_D.webp",
    "/assets/images/gallery/DJI_20260717143422_0235_D.webp", "/assets/images/gallery/DJI_20260717143433_0237_D.webp",
    "/assets/images/gallery/DJI_20260717143437_0238_D.webp", "/assets/images/gallery/DJI_20260717150407_0260_D.webp",
    "/assets/images/gallery/DJI_20260717150435_0262_D.webp", "/assets/images/gallery/DJI_20260717150442_0263_D.webp",
    "/assets/images/gallery/DJI_20260717150447_0264_D.webp", "/assets/images/gallery/DJI_20260717150451_0265_D.webp",
    "/assets/images/gallery/DJI_20260717150457_0266_D.webp", "/assets/images/gallery/DJI_20260717150531_0267_D.webp",
    "/assets/images/gallery/after5.webp", "/assets/images/gallery/after6.webp", "/assets/images/gallery/after7.webp",
    "/assets/images/gallery/after8.webp", "/assets/images/gallery/after9.webp", "/assets/images/gallery/after10.webp", "/assets/images/gallery/after11.webp",
    "/assets/images/gallery/1.webp", "/assets/images/gallery/2.webp", "/assets/images/gallery/3.webp",
    "/assets/images/gallery/4.webp", "/assets/images/gallery/5.webp", "/assets/images/gallery/6.webp",
    "/assets/images/gallery/7.webp", "/assets/images/gallery/8.webp", "/assets/images/gallery/9.webp",
    "/assets/images/gallery/10.webp", "/assets/images/gallery/11.webp", "/assets/images/gallery/t2.webp",
    "/assets/images/gallery/t4.webp", "/assets/images/gallery/t5.webp", "/assets/images/gallery/t6.webp",
];

// Archive stats (read from the generated JSON if present)
$archiveFile = __DIR__ . '/assets/data/instagram-archive.json';
$archiveCount = 0; $archiveVideos = 0; $archiveImages = 0;
if (file_exists($archiveFile)) {
    $arc = json_decode(file_get_contents($archiveFile), true);
    if (!empty($arc['items'])) {
        $archiveCount = count($arc['items']);
        foreach ($arc['items'] as $it) { if ($it['type'] === 'video') $archiveVideos++; else $archiveImages++; }
    }
}
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CLINIC VIDEO TOUR (Kabalagala + Bukoto)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-8 items-stretch gs-reveal-fade">
                <div class="lg:col-span-8 relative rounded-[40px] overflow-hidden shadow-2xl bg-brand-deeper min-h-[420px]">
                    <iframe id="tour-video" title="Gumlet video player" class="absolute inset-0 w-full h-full" src="https://play.gumlet.io/embed/6ab97afbde5918773f54ed17" loading="lazy" referrerpolicy="origin" allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture; fullscreen; clipboard-write" allowfullscreen></iframe>
                    <div id="tour-overlay" class="absolute inset-0 flex flex-col items-center justify-center bg-brand-deeper/40 cursor-pointer group transition-opacity duration-500">
                        <div class="w-24 h-24 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-3xl border border-white/30 transform group-hover:scale-110 transition-transform shadow-2xl">
                            <i class="fas fa-play ml-2"></i>
                        </div>
                        <div class="absolute bottom-10 left-10 text-white pointer-events-none">
                            <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-2 font-semibold drop-shadow-md">Virtual Tour</span>
                            <h3 class="text-section font-display drop-shadow-lg">Experience Refine Kabalagala</h3>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 flex flex-col gap-6">
                    <div class="tv-card group relative flex-1 rounded-[32px] overflow-hidden shadow-xl bg-brand-deeper min-h-[200px] cursor-pointer" data-video="https://play.gumlet.io/embed/6ab988533518a22dd8b8b486" data-title="Bukoto Branch Premises" data-desc="Refine Skin & Body Clinic at UMC Victoria Hospital, Bukoto" role="button" tabindex="0">
                        <img src="https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/6ab988533518a22dd8b8b486/thumbnail-1-0.png" alt="Bukoto branch" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/90 via-brand-deeper/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center"><div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center group-hover:bg-accent transition-colors"><i class="fas fa-play text-brand-deeper ml-1"></i></div></div>
                        <div class="absolute bottom-6 left-6 text-white"><span class="text-accent text-[10px] uppercase tracking-widest font-semibold">Branch Tour</span><h4 class="font-heading font-semibold text-lg">Bukoto @ UMC Victoria</h4></div>
                    </div>
                    <div class="tv-card group relative flex-1 rounded-[32px] overflow-hidden shadow-xl bg-brand-deeper min-h-[200px] cursor-pointer" data-video="https://play.gumlet.io/embed/6ab97a423518a22dd8b86ef1" data-title="Inside the Refine IV Lounge" data-desc="IV drip therapy at our Kabalagala branch" role="button" tabindex="0">
                        <img src="https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/6ab97a423518a22dd8b86ef1/thumbnail-1-0.png" alt="IV lounge" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/90 via-brand-deeper/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center"><div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center group-hover:bg-accent transition-colors"><i class="fas fa-play text-brand-deeper ml-1"></i></div></div>
                        <div class="absolute bottom-6 left-6 text-white"><span class="text-accent text-[10px] uppercase tracking-widest font-semibold">IV Lounge</span><h4 class="font-heading font-semibold text-lg">Refine IV Lounge</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CLINIC & TREATMENT PHOTOS (curated)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative" id="gallery-section">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="text-center mb-12 gs-reveal-text">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Curated</span>
                <h2 class="text-section font-display text-brand-deeper mb-4">Our <i class="text-accent font-light">Spaces &amp; Results.</i></h2>
                <p class="text-brand-muted font-body text-lg font-light max-w-2xl mx-auto">Our branches, treatment rooms, team and results. Tap any photo to enlarge.</p>
            </div>
            <div class="columns-2 md:columns-3 lg:columns-4 gap-4 md:gap-6 space-y-4 md:space-y-6">
                <?php foreach ($staticImages as $img): ?>
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group shadow-lg cursor-pointer gl-img" data-src="<?php echo $img; ?>">
                    <img src="<?php echo $img; ?>" alt="Refine Skin & Body Clinic" class="w-full h-auto rounded-3xl transform transition-transform duration-700 group-hover:scale-[1.03]" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================
         INSTAGRAM ARCHIVE (every post, JSON-driven)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative" id="instagram-archive">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10 gs-reveal-text">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand/5 border border-brand/10 mb-4">
                        <i class="fab fa-instagram text-accent"></i>
                        <span class="text-accent font-body text-[10px] tracking-[0.25em] uppercase font-semibold">@refineskinandbodyclinic</span>
                    </div>
                    <h2 class="text-section font-display text-brand-deeper leading-tight">The Complete <i class="text-accent font-light">Instagram Archive.</i></h2>
                    <p class="text-brand-muted font-body text-base lg:text-lg font-light leading-relaxed mt-4">
                        Every reel and post we have shared since January 2025<?php if ($archiveCount): ?> — <strong><?php echo $archiveCount; ?> items</strong> (<?php echo $archiveVideos; ?> videos, <?php echo $archiveImages; ?> photos)<?php endif; ?>, plus features from creators and partners who have visited the clinic.
                    </p>
                </div>
                <a href="https://www.instagram.com/refineskinandbodyclinic/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-3 rounded-full border border-brand/15 bg-white hover:bg-brand-deeper hover:text-white text-brand-deeper text-xs font-semibold uppercase tracking-wider transition-all shadow-sm self-start">
                    <i class="fab fa-instagram text-base"></i> Follow on Instagram
                </a>
            </div>

            <!-- Filters -->
            <div class="flex flex-col md:flex-row md:items-center gap-4 mb-8 sticky top-20 z-30 bg-white/90 backdrop-blur-md py-3 -mx-2 px-2 rounded-2xl">
                <div class="flex flex-wrap items-center gap-2" id="ig-type-filters">
                    <button class="ig-btn active px-5 py-2 rounded-full bg-brand text-white text-xs font-semibold shadow-md" data-type="all">All</button>
                    <button class="ig-btn px-5 py-2 rounded-full border border-brand/20 text-brand text-xs font-semibold hover:bg-brand/5" data-type="video">Videos</button>
                    <button class="ig-btn px-5 py-2 rounded-full border border-brand/20 text-brand text-xs font-semibold hover:bg-brand/5" data-type="image">Photos</button>
                </div>
                <div class="flex flex-wrap items-center gap-2 md:ml-auto">
                    <select id="ig-month" class="bg-white border border-brand/15 rounded-full px-4 py-2 text-xs font-semibold text-brand-deeper focus:outline-none focus:border-accent">
                        <option value="all">All months</option>
                    </select>
                    <select id="ig-source" class="bg-white border border-brand/15 rounded-full px-4 py-2 text-xs font-semibold text-brand-deeper focus:outline-none focus:border-accent">
                        <option value="all">All sources</option>
                        <option value="refineskinandbodyclinic">Refine Clinic</option>
                        <option value="others">Creators &amp; Partners</option>
                    </select>
                    <span id="ig-count" class="text-xs text-brand-muted font-light ml-1"></span>
                </div>
            </div>

            <div id="ig-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 md:gap-4"></div>
            <div id="ig-empty" class="hidden text-center py-16 text-brand-muted font-light">No posts match this filter.</div>
            <div id="ig-loading" class="text-center py-16 text-brand-muted font-light">Loading archive…</div>

            <div class="mt-12 text-center flex justify-center gap-4">
                <button id="ig-more" class="btn-magnetic btn-outline magnetic-target" style="display:none"><span>Load More</span></button>
            </div>
        </div>
    </section>

    <?php
    // Shared video modal + player (renders modal + script only)
    $treatmentVideos = [['src' => '__none__']];
    ob_start(); include 'includes/treatment-videos.php'; $tvHtml = ob_get_clean();
    $modalPos = strpos($tvHtml, '<!-- Self-hosted Video Modal -->');
    echo $modalPos !== false ? substr($tvHtml, $modalPos) : '';
    ?>

    <!-- Image lightbox -->
    <div id="img-lightbox" class="fixed inset-0 z-[9999] hidden opacity-0 transition-opacity duration-300 bg-brand-deeper/95 backdrop-blur-md flex items-center justify-center p-4">
        <button id="img-lightbox-close" aria-label="Close" class="absolute top-6 right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-accent hover:text-brand-deeper text-white flex items-center justify-center border border-white/20"><i class="fas fa-times"></i></button>
        <img id="img-lightbox-img" src="" alt="" class="max-w-full max-h-[88vh] rounded-2xl shadow-2xl object-contain">
        <a id="img-lightbox-link" href="#" target="_blank" rel="noopener noreferrer" class="absolute bottom-6 left-1/2 -translate-x-1/2 hidden items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white text-xs font-semibold border border-white/20 hover:bg-accent hover:text-brand-deeper"><i class="fab fa-instagram"></i> View on Instagram</a>
    </div>

    <script>
    (function () {
        // ----- Tour video overlay -----
        const tour = document.getElementById('tour-video'), ov = document.getElementById('tour-overlay');
        if (tour && ov) {
            ov.addEventListener('click', () => { ov.style.opacity = 0; ov.style.pointerEvents = 'none'; });
        }

        // ----- Image lightbox -----
        const lb = document.getElementById('img-lightbox'), lbImg = document.getElementById('img-lightbox-img'), lbLink = document.getElementById('img-lightbox-link');
        function openImg(src, href) {
            lbImg.src = src;
            if (href) { lbLink.href = href; lbLink.classList.remove('hidden'); lbLink.classList.add('flex'); } else { lbLink.classList.add('hidden'); lbLink.classList.remove('flex'); }
            lb.classList.remove('hidden'); requestAnimationFrame(() => lb.classList.remove('opacity-0')); document.body.style.overflow = 'hidden';
        }
        function closeImg() { lb.classList.add('opacity-0'); setTimeout(() => { lb.classList.add('hidden'); lbImg.src = ''; }, 300); document.body.style.overflow = ''; }
        lb.addEventListener('click', (e) => { if (e.target === lb || e.target === lbImg) closeImg(); });
        document.getElementById('img-lightbox-close').addEventListener('click', closeImg);
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeImg(); });
        document.querySelectorAll('.gl-img').forEach(el => el.addEventListener('click', () => openImg(el.dataset.src, null)));

        // ----- Instagram archive -----
        const grid = document.getElementById('ig-grid'), more = document.getElementById('ig-more'), empty = document.getElementById('ig-empty'),
              loading = document.getElementById('ig-loading'), count = document.getElementById('ig-count'),
              monthSel = document.getElementById('ig-month'), srcSel = document.getElementById('ig-source');
        const PAGE = 30; let items = [], filtered = [], shown = 0, type = 'all';
        const MONTHS = ['January','February','March','April','May','June','July','August','September','October','November','December'];

        fetch('/assets/data/instagram-archive.json', { cache: 'force-cache' }).then(r => r.json()).then(data => {
            items = data.items || [];
            const months = [...new Set(items.map(i => i.date.slice(0, 7)))].sort().reverse();
            months.forEach(m => { const o = document.createElement('option'); o.value = m; o.textContent = MONTHS[parseInt(m.slice(5), 10) - 1] + ' ' + m.slice(0, 4); monthSel.appendChild(o); });
            loading.style.display = 'none';
            applyFilters();
        }).catch(() => { loading.textContent = 'The archive could not be loaded.'; });

        function applyFilters() {
            const m = monthSel.value, s = srcSel.value;
            filtered = items.filter(i => (type === 'all' || i.type === type) && (m === 'all' || i.date.startsWith(m)) &&
                (s === 'all' || (s === 'others' ? i.creator !== 'refineskinandbodyclinic' : i.creator === s)));
            grid.innerHTML = ''; shown = 0; renderMore();
        }
        function card(i) {
            const isVid = i.type === 'video', thumb = isVid ? i.thumbnail : i.src, ig = 'https://www.instagram.com/p/' + i.code + '/';
            const ext = i.creator !== 'refineskinandbodyclinic';
            const el = document.createElement('div');
            el.className = 'group relative rounded-2xl overflow-hidden bg-brand-deeper shadow-sm hover:shadow-xl transition-all duration-500 cursor-pointer aspect-[4/5]';
            el.innerHTML = `<img src="${thumb}" alt="Refine Skin & Body Clinic — Instagram ${i.date}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent opacity-80"></div>
                ${isVid ? '<div class="absolute inset-0 flex items-center justify-center"><div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center group-hover:bg-accent transition-colors"><i class="fas fa-play text-brand-deeper text-sm ml-0.5"></i></div></div>' : ''}
                <span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-white/20 backdrop-blur-md text-[9px] uppercase tracking-widest text-white font-semibold border border-white/20">${isVid ? 'Reel' : 'Post'}</span>
                ${ext ? `<span class="absolute top-3 right-3 px-2 py-0.5 rounded-full bg-accent/90 text-[9px] text-brand-deeper font-bold">@${i.creator}</span>` : ''}
                <div class="absolute bottom-0 left-0 right-0 p-3 flex items-center justify-between text-white">
                    <span class="text-[11px] font-semibold">${i.date}</span>
                    <a href="${ig}" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()" title="View on Instagram" class="w-7 h-7 rounded-full bg-white/15 hover:bg-accent hover:text-brand-deeper flex items-center justify-center text-xs"><i class="fab fa-instagram"></i></a>
                </div>`;
            el.addEventListener('click', () => isVid ? tvOpenModal(i.embed_url, (ext ? '@' + i.creator + ' — ' : '') + 'Instagram ' + i.date, 'Tap the Instagram icon on the card to view the original post') : openImg(i.src, ig));
            return el;
        }
        function renderMore() {
            const slice = filtered.slice(shown, shown + PAGE);
            slice.forEach(i => grid.appendChild(card(i)));
            shown += slice.length;
            more.style.display = shown < filtered.length ? 'inline-flex' : 'none';
            empty.classList.toggle('hidden', filtered.length > 0);
            count.textContent = filtered.length ? `Showing ${shown} of ${filtered.length}` : '';
        }
        more.addEventListener('click', (e) => { e.preventDefault(); renderMore(); });
        monthSel.addEventListener('change', applyFilters); srcSel.addEventListener('change', applyFilters);
        document.querySelectorAll('.ig-btn').forEach(b => b.addEventListener('click', () => {
            document.querySelectorAll('.ig-btn').forEach(x => { x.classList.remove('active', 'bg-brand', 'text-white', 'shadow-md'); x.classList.add('border', 'border-brand/20', 'text-brand'); });
            b.classList.add('active', 'bg-brand', 'text-white', 'shadow-md'); b.classList.remove('border', 'border-brand/20', 'text-brand');
            type = b.dataset.type; applyFilters();
        }));
    })();
    </script>

    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
