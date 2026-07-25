<?php
/**
 * Landing Page Header — Minimal Header for Landing Pages
 * Features ONLY the Clinic Logo and direct Call Button.
 */
?>
<header id="landing-header" class="fixed top-0 left-0 w-full z-[999] bg-brand-deeper/90 backdrop-blur-md border-b border-white/10 py-3 lg:py-4 transition-all duration-300">
    <div class="max-w-[1400px] mx-auto px-6 lg:px-10 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0 relative z-10 group">
            <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="h-9 lg:h-12 w-auto object-contain transition-all duration-300">
        </a>

        <!-- Call Button -->
        <div class="flex items-center gap-3">
            <a href="tel:+256758232889" class="inline-flex items-center gap-2 px-4 sm:px-6 py-2.5 rounded-full bg-accent hover:bg-white text-brand-deeper font-semibold text-xs tracking-wider uppercase transition-all duration-300 shadow-lg hover:shadow-accent/20">
                <i class="fas fa-phone-alt text-xs animate-pulse"></i>
                <span class="hidden sm:inline">Call Us: +256 758 232889</span>
                <span class="sm:hidden font-bold">Call Now</span>
            </a>
        </div>
    </div>
</header>
