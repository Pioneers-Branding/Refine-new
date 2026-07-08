<?php
$pageCategory = "Thank You";
$pageTitle = "Thank <i class='text-brand font-light'>You.</i>";
$pageDescription = "We have received your message. Our team will get back to you shortly.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm min-h-[40vh] flex items-center justify-center">
        <div class="max-w-[800px] mx-auto px-6 lg:px-10 text-center">
            <div class="glass-panel p-10 md:p-16 rounded-[40px] bg-white shadow-xl border border-brand/5 relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-brand/5 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-accent/5 rounded-full blur-3xl"></div>
                
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-20 h-20 bg-brand/10 text-brand rounded-full flex items-center justify-center mb-8">
                        <i class="fas fa-check text-3xl"></i>
                    </div>
                    <h2 class="font-display text-3xl md:text-4xl text-brand-deeper mb-6">Your Request has been Received</h2>
                    <p class="font-body text-brand-muted font-light leading-relaxed text-lg mb-10 max-w-[600px] mx-auto">
                        Thank you for reaching out to Refine Skin & Body Clinic. A member of our team will review your inquiry and contact you shortly. In the meantime, feel free to explore our services or read our latest updates.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center w-full max-w-[400px]">
                        <a href="/" class="btn-magnetic w-full magnetic-target block text-center">
                            <span>Return Home</span>
                        </a>
                        <a href="services" class="w-full text-center px-8 py-4 rounded-full border border-brand/20 text-brand font-semibold text-sm uppercase tracking-wide hover:bg-brand/5 transition-colors flex items-center justify-center">
                            Explore Services
                        </a>
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
