<?php
/**
 * Treatment Videos Section
 * Reusable in-house video block (self-hosted MP4s in /assets/videos).
 *
 * Usage (set before including):
 *   $treatmentVideos = [
 *     ['src' => 'slug', 'title' => '...', 'desc' => '...', 'tag' => 'Procedure', 'preview' => true],
 *   ];
 *   $treatmentVideosTitle    = 'Watch the <i>Treatment</i>';   (optional)
 *   $treatmentVideosSubtitle = '...';                          (optional)
 *   $treatmentVideosEyebrow  = 'From Our Clinic';              (optional)
 */
if (empty($treatmentVideos) || !is_array($treatmentVideos)) { return; }
require_once __DIR__ . '/gumlet-video.php';

$tvTitle    = isset($treatmentVideosTitle) ? $treatmentVideosTitle : 'Watch It <i class="text-accent font-light">In Action.</i>';
$tvSubtitle = isset($treatmentVideosSubtitle) ? $treatmentVideosSubtitle : 'Real footage filmed inside Refine Skin &amp; Body Clinic — see how the treatment is performed, what the room looks like, and hear our team explain each step.';
$tvEyebrow  = isset($treatmentVideosEyebrow) ? $treatmentVideosEyebrow : 'Filmed At Refine';
$tvCount    = count($treatmentVideos);
$tvGridCols = $tvCount === 1 ? 'grid-cols-1 max-w-sm mx-auto' : ($tvCount === 2 ? 'grid-cols-2 max-w-3xl mx-auto' : ($tvCount === 3 ? 'grid-cols-2 md:grid-cols-3 max-w-5xl mx-auto' : 'grid-cols-2 md:grid-cols-3 lg:grid-cols-4'));
?>
<!-- ============================================
     TREATMENT VIDEOS (Self-hosted)
     ============================================ -->
<section id="treatment-videos" class="py-16 lg:py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] -translate-y-1/2 -translate-x-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[100px] translate-y-1/3 translate-x-1/4 pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16 gs-reveal-text">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand/5 text-accent font-body text-xs tracking-[0.2em] uppercase mb-6 font-semibold border border-brand/10">
                <i class="fas fa-video text-[11px]"></i> <?php echo $tvEyebrow; ?>
            </div>
            <h2 class="text-section font-display text-brand-deeper mb-6 leading-tight"><?php echo $tvTitle; ?></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed"><?php echo $tvSubtitle; ?></p>
        </div>

        <div class="grid <?php echo $tvGridCols; ?> gap-4 md:gap-6 gs-stagger-bento">
            <?php foreach ($treatmentVideos as $tv):
                $local  = '/assets/videos/' . $tv['src'] . '.mp4';
                $src    = gumlet_video_embed($tv['src'], $local);
                $posterFallback = isset($tv['poster']) ? $tv['poster'] : '/assets/videos/posters/' . $tv['src'] . '.jpg';
                $poster = gumlet_video_thumbnail($tv['src'], $posterFallback);
                $title  = isset($tv['title']) ? $tv['title'] : 'Refine Clinic Video';
                $desc   = isset($tv['desc']) ? $tv['desc'] : '';
                $tag    = isset($tv['tag']) ? $tv['tag'] : 'Treatment';
                $isPrev = !empty($tv['preview']);
            ?>
            <div class="tv-card group bento-item bg-white rounded-3xl border border-brand/10 shadow-sm hover:shadow-xl hover:border-accent/30 transition-all duration-500 overflow-hidden flex flex-col cursor-pointer"
                 data-video="<?php echo htmlspecialchars($src); ?>"
                 data-title="<?php echo htmlspecialchars($title); ?>"
                 data-desc="<?php echo htmlspecialchars($desc); ?>"
                 role="button" tabindex="0" aria-label="Play video: <?php echo htmlspecialchars($title); ?>">
                <div class="relative aspect-[9/16] overflow-hidden bg-brand-deeper">
                    <img src="<?php echo htmlspecialchars($poster); ?>" alt="<?php echo htmlspecialchars($title); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" onerror="this.remove()">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/90 via-brand-deeper/20 to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] uppercase tracking-widest text-white font-semibold border border-white/20"><?php echo htmlspecialchars($tag); ?></span>
                    <?php if ($isPrev): ?>
                    <span class="absolute top-4 right-4 px-2.5 py-1 bg-accent/90 rounded-full text-[9px] uppercase tracking-widest text-brand-deeper font-bold">Preview</span>
                    <?php endif; ?>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-white/90 flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-accent transition-all duration-300">
                            <i class="fas fa-play text-brand-deeper ml-1 text-lg"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <h4 class="font-heading font-semibold text-white text-base leading-snug drop-shadow"><?php echo htmlspecialchars($title); ?></h4>
                    </div>
                </div>
                <?php if ($desc): ?>
                <div class="p-5">
                    <p class="text-sm text-brand-muted font-light leading-relaxed line-clamp-3"><?php echo htmlspecialchars($desc); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($treatmentVideosMore) && is_array($treatmentVideosMore)): ?>
        <!-- Compact strip of additional short clips -->
        <div class="mt-12">
            <div class="flex items-center justify-between mb-5">
                <h4 class="font-heading font-semibold text-brand-deeper text-lg"><?php echo isset($treatmentVideosMoreTitle) ? $treatmentVideosMoreTitle : 'More clips from this session'; ?> <span class="text-brand-muted font-light text-sm ml-1">(<?php echo count($treatmentVideosMore); ?>)</span></h4>
            </div>
            <div class="flex gap-3 overflow-x-auto pb-3 snap-x" style="scrollbar-width: thin;">
                <?php foreach ($treatmentVideosMore as $i => $tv):
                    $local = '/assets/videos/' . $tv['src'] . '.mp4';
                    $src = gumlet_video_embed($tv['src'], $local);
                    $poster = gumlet_video_thumbnail($tv['src'], '/assets/videos/posters/' . $tv['src'] . '.jpg');
                    $title = isset($tv['title']) ? $tv['title'] : ('Clip ' . ($i + 1));
                ?>
                <div class="tv-card snap-start flex-none w-[120px] sm:w-[140px] group cursor-pointer" data-video="<?php echo htmlspecialchars($src); ?>" data-title="<?php echo htmlspecialchars($title); ?>" data-desc="" role="button" tabindex="0" aria-label="Play clip: <?php echo htmlspecialchars($title); ?>">
                    <div class="relative aspect-[9/16] rounded-2xl overflow-hidden bg-brand-deeper border border-brand/10 group-hover:border-accent/40 transition-colors">
                        <img src="<?php echo htmlspecialchars($poster); ?>" alt="<?php echo htmlspecialchars($title); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" onerror="this.remove()">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/70 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center"><div class="w-9 h-9 rounded-full bg-white/90 flex items-center justify-center group-hover:bg-accent transition-colors"><i class="fas fa-play text-brand-deeper text-xs ml-0.5"></i></div></div>
                        <span class="absolute bottom-2 left-2 right-2 text-[10px] text-white font-semibold leading-tight line-clamp-2"><?php echo htmlspecialchars($title); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php if (empty($GLOBALS['__tvModalPrinted'])): $GLOBALS['__tvModalPrinted'] = true; ?>
<!-- Self-hosted Video Modal -->
<div id="tv-modal" class="fixed inset-0 z-[9999] hidden opacity-0 transition-opacity duration-300 bg-brand-deeper/95 backdrop-blur-md flex items-center justify-center p-4" onclick="tvCloseModal(event)">
    <div class="relative w-full max-w-[420px] md:max-w-[440px]" onclick="event.stopPropagation()">
        <button onclick="tvCloseModal()" aria-label="Close video" class="absolute -top-12 right-0 md:-right-12 md:top-0 w-10 h-10 rounded-full bg-white/10 hover:bg-accent hover:text-brand-deeper text-white flex items-center justify-center transition-colors border border-white/20">
            <i class="fas fa-times"></i>
        </button>
        <div class="rounded-3xl overflow-hidden bg-black shadow-2xl aspect-[9/16] max-h-[82vh] mx-auto">
            <iframe id="tv-modal-embed" title="Gumlet video player" class="hidden w-full h-full bg-black" loading="lazy" referrerpolicy="origin" allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture; fullscreen; clipboard-write" allowfullscreen></iframe>
            <video id="tv-modal-video" class="w-full h-full object-contain bg-black" controls playsinline preload="metadata" controlsList="nodownload"></video>
        </div>
        <div class="mt-4 text-center px-2">
            <h4 id="tv-modal-title" class="font-heading font-semibold text-white text-lg"></h4>
            <p id="tv-modal-desc" class="text-white/60 text-sm font-light mt-1"></p>
        </div>
    </div>
</div>
<script>
(function () {
    const modal = document.getElementById('tv-modal');
    const vid = document.getElementById('tv-modal-video');
    const frame = document.getElementById('tv-modal-embed');
    const titleEl = document.getElementById('tv-modal-title');
    const descEl = document.getElementById('tv-modal-desc');

    window.tvOpenModal = function (src, title, desc) {
        if (!modal || !vid || !frame) return;
        const isGumlet = /^https:\/\/play\.gumlet\.io\/embed\//i.test(src || '');
        if (isGumlet) {
            vid.pause(); vid.removeAttribute('src'); vid.load(); vid.classList.add('hidden');
            frame.src = src; frame.classList.remove('hidden');
        } else {
            frame.removeAttribute('src'); frame.classList.add('hidden');
            vid.src = src; vid.classList.remove('hidden');
        }
        titleEl.textContent = title || '';
        descEl.textContent = desc || '';
        modal.classList.remove('hidden');
        requestAnimationFrame(() => modal.classList.remove('opacity-0'));
        document.body.style.overflow = 'hidden';
        if (!isGumlet) vid.play().catch(() => {});
    };
    window.tvCloseModal = function (e) {
        if (e && e.target && e.target !== modal) return;
        if (!modal || !vid || !frame) return;
        vid.pause();
        modal.classList.add('opacity-0');
        setTimeout(() => { modal.classList.add('hidden'); vid.removeAttribute('src'); vid.load(); frame.removeAttribute('src'); }, 300);
        document.body.style.overflow = '';
    };
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') tvCloseModal(); });
    document.querySelectorAll('.tv-card').forEach((card) => {
        const open = () => tvOpenModal(card.dataset.video, card.dataset.title, card.dataset.desc);
        card.addEventListener('click', open);
        card.addEventListener('keydown', (e) => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(); } });
    });
})();
</script>
<?php endif; ?>
