<?php
$pageCategory = "Legal";
$pageTitle = "Privacy <i class='text-brand font-light'>Policy.</i>";
$pageDescription = "Your privacy and the security of your medical data are of paramount importance to us. Read how we handle and protect your information.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- Legal Sidebar Navigation -->
                <div class="lg:col-span-3">
                    <div class="sticky top-32 glass-panel p-6 rounded-3xl bg-white border border-brand/5 shadow-sm">
                        <h4 class="font-heading font-semibold text-brand-deeper uppercase tracking-widest text-xs mb-4">Legal Directory</h4>
                        <ul class="space-y-2">
                            <li><a href="privacy-policy" class="block px-4 py-2 rounded-lg bg-brand/5 text-brand font-semibold text-sm">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions" class="block px-4 py-2 rounded-lg hover:bg-brand/5 text-brand-muted hover:text-brand transition-colors text-sm font-light">Terms & Conditions</a></li>
                            <li><a href="cookie-policy" class="block px-4 py-2 rounded-lg hover:bg-brand/5 text-brand-muted hover:text-brand transition-colors text-sm font-light">Cookie Policy</a></li>
                            <li class="pt-4 mt-4 border-t border-brand/10"><a href="contact" class="block px-4 py-2 text-accent hover:text-brand font-semibold transition-colors text-sm">Contact Data Protection Officer <i class="fas fa-arrow-right ml-1"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:col-span-9 glass-panel p-8 md:p-12 lg:p-16 rounded-[40px] bg-white shadow-xl border border-brand/5">
                    <div class="max-w-[800px] font-body text-brand-muted font-light leading-relaxed space-y-8">
                        
                        <p class="text-xs uppercase tracking-widest font-semibold text-brand-deeper"><strong>Last Updated:</strong> January 2026</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">1. Introduction</h3>
                        <p>At Refine Skin & Body Clinic ("we", "our", "us"), we are committed to protecting and respecting your privacy. This policy explains how we collect, use, process, and protect your personal and medical data when you visit our clinics or use our website.</p>
                        <p>We adhere strictly to international best practices regarding patient confidentiality and medical data protection.</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">2. Data We Collect</h3>
                        <p>We may collect and process the following data about you:</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Identity Data:</strong> First name, last name, date of birth, gender.</li>
                            <li><strong>Contact Data:</strong> Billing address, email address, telephone numbers.</li>
                            <li><strong>Medical and Health Data:</strong> Medical history, allergies, previous aesthetic treatments, current medications, strictly for providing safe dermatological care.</li>
                            <li><strong>Financial Data:</strong> Details about payments to and from you, strictly encrypted and handled by our secure payment processors.</li>
                        </ul>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">3. How We Use Your Data</h3>
                        <p>Your data is used solely to:</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Provide you with the highest standard of personalized medical and aesthetic care.</li>
                            <li>Manage your appointments and send crucial pre-care and aftercare instructions.</li>
                            <li>Process payments securely.</li>
                            <li>Comply with legal medical record-keeping requirements mandated by regional health authorities.</li>
                        </ul>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">4. Data Security & Storage</h3>
                        <p>We have implemented strict electronic and physical security measures to prevent your personal data from being accidentally lost, used, or accessed in an unauthorized way. Access to your medical data is limited exclusively to the treating physicians and authorized medical staff. Patient records are encrypted and stored on secure cloud servers compliant with healthcare data regulations.</p>
                        
                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">5. Your Rights</h3>
                        <p>You have the right to request access to the personal data we hold about you, request corrections to any inaccuracies, or request the deletion of your non-medical data (subject to legal retention requirements). To exercise these rights, please contact our Data Protection Officer.</p>

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
