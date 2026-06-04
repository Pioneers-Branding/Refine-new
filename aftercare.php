<?php
$pageCategory = "Resources";
$pageTitle = "Post-Treatment <i class='text-brand font-light'>Aftercare.</i>";
$pageDescription = "Proper aftercare is crucial for achieving optimal results and minimizing downtime. Download the specific instructions for your recent treatment.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm min-h-[60vh]">
        <div class="max-w-[1200px] mx-auto px-6 lg:px-10">
            
            <!-- Search & Filter Bar -->
            <div class="glass-panel p-4 rounded-2xl bg-white border border-brand/5 mb-12 flex flex-col md:flex-row gap-4 items-center justify-between shadow-sm">
                <div class="relative w-full md:w-96">
                    <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-brand/30"></i>
                    <input type="text" id="pdfSearch" placeholder="Search aftercare (e.g. Fillers, Peel)..." class="w-full bg-surface-warm border-none rounded-xl pl-12 pr-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-accent transition-all">
                </div>
                <div class="flex gap-2 w-full md:w-auto overflow-x-auto hide-scrollbar">
                    <button class="px-4 py-2 rounded-lg bg-brand text-white text-xs font-semibold whitespace-nowrap">All Aftercare</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Injectables</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Lasers & Devices</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Wellness</button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="pdfGrid">
                
                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-brand/30 shadow-sm" data-category="injectables" data-title="botox aftercare">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand/10 rounded-xl flex items-center justify-center text-brand text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Botox® Aftercare</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">115 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-accent opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-brand/30 shadow-sm" data-category="injectables" data-title="dermal filler aftercare">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand/10 rounded-xl flex items-center justify-center text-brand text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Dermal Filler Aftercare</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">130 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-accent opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-brand/30 shadow-sm" data-category="lasers & devices" data-title="co2 laser recovery">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand/10 rounded-xl flex items-center justify-center text-brand text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">CO2 Laser Recovery</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">150 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-accent opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-brand/30 shadow-sm" data-category="lasers & devices" data-title="laser hair removal aftercare">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand/10 rounded-xl flex items-center justify-center text-brand text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">LHR Aftercare</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">90 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-accent opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-brand/30 shadow-sm" data-category="wellness" data-title="iv therapy post-care">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand/10 rounded-xl flex items-center justify-center text-brand text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">IV Therapy Post-Care</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">75 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-accent opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

            </div>

            <div class="mt-20 glass-panel-dark p-8 rounded-[32px] bg-brand-deeper border border-brand-deeper shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h4 class="font-display text-2xl text-white mb-2">Urgent Concerns?</h4>
                    <p class="text-sm font-light text-white/70">If you experience any severe or unexpected reactions, please contact our emergency clinic line immediately.</p>
                </div>
                <a href="tel:+256758232889" class="btn-magnetic bg-accent text-brand-deeper border-none magnetic-target whitespace-nowrap">
                    <span><i class="fas fa-phone mr-2"></i> +256 758 232 889</span>
                </a>
            </div>

        </div>
    </section>

    <script>
        document.getElementById('pdfSearch').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase();
            document.querySelectorAll('.pdf-item').forEach(item => {
                const title = item.getAttribute('data-title');
                if (title.includes(term)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
    <style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
