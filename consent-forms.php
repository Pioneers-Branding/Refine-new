<?php
$pageCategory = "Resources";
$pageTitle = "Patient <i class='text-brand font-light'>Consent Forms.</i>";
$pageDescription = "Download and review the consent forms required for your specific treatments prior to your visit. Preparedness ensures a smooth and informed aesthetic journey.";
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
                    <input type="text" id="pdfSearch" placeholder="Search forms (e.g. Botox, Laser)..." class="w-full bg-surface-warm border-none rounded-xl pl-12 pr-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-accent transition-all">
                </div>
                <div class="flex gap-2 w-full md:w-auto overflow-x-auto hide-scrollbar">
                    <button class="px-4 py-2 rounded-lg bg-brand text-white text-xs font-semibold whitespace-nowrap">All Forms</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Injectables</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Lasers</button>
                    <button class="px-4 py-2 rounded-lg bg-surface-cool text-brand-muted hover:text-brand text-xs font-semibold whitespace-nowrap transition-colors">Skin Care</button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="pdfGrid">
                
                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="injectables" data-title="botox consent">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Botox® Consent</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">120 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="injectables" data-title="dermal filler consent">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Dermal Filler Consent</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">135 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>
                
                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="injectables" data-title="sculptra consent">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Sculptra® Consent</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">140 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="lasers" data-title="laser hair removal">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Laser Hair Removal</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">110 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>
                
                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="lasers" data-title="co2 laser resurfacing">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">CO2 Laser Resurfacing</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">160 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="skin care" data-title="chemical peel">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">Chemical Peel</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">95 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>
                
                <!-- PDF Box -->
                <div class="pdf-item glass-panel p-6 flex items-center justify-between group hover:bg-white transition-colors rounded-2xl cursor-pointer border border-brand/5 hover:border-accent/30 shadow-sm" data-category="skin care" data-title="hydrafacial">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent text-xl">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm">HydraFacial MD®</h4>
                            <p class="text-xs text-brand-muted font-light mt-1">85 KB PDF</p>
                        </div>
                    </div>
                    <i class="fas fa-download text-brand opacity-0 group-hover:opacity-100 transition-opacity transform group-hover:-translate-y-1"></i>
                </div>

            </div>

        </div>
    </section>

    <!-- Simple Search JS -->
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
