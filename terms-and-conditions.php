<?php
$pageCategory = "Legal";
$pageTitle = "Terms & <i class='text-brand font-light'>Conditions.</i>";
$pageDescription = "Please read these terms carefully before booking a treatment or using our website.";
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
                            <li><a href="privacy-policy" class="block px-4 py-2 rounded-lg hover:bg-brand/5 text-brand-muted hover:text-brand transition-colors text-sm font-light">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions" class="block px-4 py-2 rounded-lg bg-brand/5 text-brand font-semibold text-sm">Terms & Conditions</a></li>
                            <li><a href="cookie-policy" class="block px-4 py-2 rounded-lg hover:bg-brand/5 text-brand-muted hover:text-brand transition-colors text-sm font-light">Cookie Policy</a></li>
                            <li class="pt-4 mt-4 border-t border-brand/10"><a href="contact" class="block px-4 py-2 text-accent hover:text-brand font-semibold transition-colors text-sm">Contact Clinic Admin <i class="fas fa-arrow-right ml-1"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:col-span-9 glass-panel p-8 md:p-12 lg:p-16 rounded-[40px] bg-white shadow-xl border border-brand/5">
                    <div class="max-w-[800px] font-body text-brand-muted font-light leading-relaxed space-y-8">
                        
                        <p class="text-xs uppercase tracking-widest font-semibold text-brand-deeper"><strong>Last Updated:</strong> January 2026</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">1. Agreement to Terms</h3>
                        <p>By accessing our website or booking a consultation at Refine Skin & Body Clinic, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you are prohibited from using this site or our services. These terms constitute a legally binding agreement between you and Refine Skin & Body Clinic.</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">2. Medical Disclaimer</h3>
                        <p>The information provided on this website, including text, graphics, images, and other material, is for educational and informational purposes only. It does not constitute medical advice, diagnosis, or treatment. A formal consultation with our board-certified specialists is required before any aesthetic or medical treatment can commence.</p>
                        <p>Never disregard professional medical advice or delay in seeking it because of something you have read on this website.</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">3. Appointments, Deposits, and Cancellations</h3>
                        <p>We respect the time of our specialists and our clients. To secure an appointment, a nominal deposit may be required, which is fully redeemable against your treatment cost.</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>We require a minimum of 24 hours' notice to cancel or reschedule an appointment.</li>
                            <li>Failure to provide sufficient notice or a "no-show" will result in a cancellation fee or forfeiture of your deposit.</li>
                            <li>Late arrivals may result in a shortened treatment time to avoid inconveniencing the next patient, but the full treatment fee will apply.</li>
                        </ul>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">4. Treatment Outcomes</h3>
                        <p>Aesthetic medicine is both an art and a science; outcomes vary significantly from patient to patient based on anatomy, skin quality, age, and adherence to aftercare instructions. While our specialists strive for clinical excellence, we cannot guarantee specific or identical results as shown in before-and-after photographs.</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">5. Pricing & Payments</h3>
                        <p>All prices quoted on the website are indicative and subject to change without notice. The final cost of your treatment plan will be confirmed during your formal consultation. Payment is due in full at the time of service unless a financing plan has been pre-approved.</p>
                        
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
