<?php
/**
 * Landing Page Footer — Simplified Footer for Landing Pages
 */
?>
<footer id="landing-footer" class="bg-brand-deeper text-white py-12 border-t border-white/10 relative overflow-hidden">
    <!-- Ambient decorative glow -->
    <div class="absolute top-0 right-1/4 w-80 h-80 rounded-full bg-accent/5 blur-3xl pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-8 border-b border-white/10">
            <!-- Brand & Logo -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <a href="/" class="mb-3 inline-block">
                    <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="h-10 w-auto object-contain">
                </a>
                <p class="text-white/60 text-xs font-light max-w-sm">
                    East Africa's premier physician-led destination for aesthetic dermatology and anti-aging excellence.
                </p>
            </div>

            <!-- Call & Email Quick Contact -->
            <div class="flex flex-wrap items-center justify-center md:justify-end gap-6 text-xs text-white/80">
                <a href="tel:+256758232889" class="inline-flex items-center gap-2 hover:text-accent transition-colors">
                    <i class="fas fa-phone-alt text-accent"></i>
                    <span>+256 758 232889</span>
                </a>
                <a href="mailto:frontdesk@refineskinandbody.com" class="inline-flex items-center gap-2 hover:text-accent transition-colors">
                    <i class="fas fa-envelope text-accent"></i>
                    <span>frontdesk@refineskinandbody.com</span>
                </a>
            </div>
        </div>

        <!-- Copyright & Locations -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-white/40 font-light">
            <p>© <?php echo date('Y'); ?> Refine Skin and Body Clinic. All Rights Reserved.</p>
            <p>Locations: Kampala (Forest Mall, Kabalagala, Bukoto) • Juba, South Sudan</p>
        </div>
    </div>
</footer>
