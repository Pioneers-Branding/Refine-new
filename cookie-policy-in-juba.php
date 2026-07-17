<?php
$pageCategory = "Legal";
$pageTitle = "Cookie <i class='text-brand font-light'>Policy.</i>";
$pageDescription = "Information on how we use cookies and tracking technologies to improve your experience on our website.";
$canonicalUrl = "https://refineskinandbody.com/cookie-policy-in-juba";
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
                            <li><a href="terms-and-conditions" class="block px-4 py-2 rounded-lg hover:bg-brand/5 text-brand-muted hover:text-brand transition-colors text-sm font-light">Terms & Conditions</a></li>
                            <li><a href="cookie-policy" class="block px-4 py-2 rounded-lg bg-brand/5 text-brand font-semibold text-sm">Cookie Policy</a></li>
                            <li class="pt-4 mt-4 border-t border-brand/10"><a href="contact" class="block px-4 py-2 text-accent hover:text-brand font-semibold transition-colors text-sm">Contact Admin <i class="fas fa-arrow-right ml-1"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:col-span-9 glass-panel p-8 md:p-12 lg:p-16 rounded-[40px] bg-white shadow-xl border border-brand/5">
                    <div class="max-w-[800px] font-body text-brand-muted font-light leading-relaxed space-y-8">
                        
                        <p class="text-xs uppercase tracking-widest font-semibold text-brand-deeper"><strong>Last Updated:</strong> January 2026</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">1. What Are Cookies?</h3>
                        <p>Cookies are small text files that are placed on your computer or mobile device when you browse websites. They are widely used to make websites work more efficiently and provide information to the site owners. They help us understand how you interact with our content, allowing us to improve the aesthetic and functional experience of the Refine Skin & Body Clinic website.</p>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">2. How We Use Cookies</h3>
                        <p>We use different types of cookies for the following purposes:</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Essential Cookies:</strong> These are strictly necessary to provide you with services available through our website and to use some of its features, such as accessing secure areas or filling out the booking form.</li>
                            <li><strong>Analytics and Performance Cookies:</strong> These cookies collect information that is used either in aggregate form to help us understand how our website is being used or how effective our marketing campaigns are, or to help us customize our website for you.</li>
                            <li><strong>Preference Cookies:</strong> These allow our website to remember choices you make, such as your preferred clinic branch (Juba vs Juba) or language preferences.</li>
                        </ul>

                        <h3 class="font-display text-2xl text-brand-deeper mt-12 mb-4">3. Managing Cookies</h3>
                        <p>You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. The methods for doing this vary from browser to browser, and from version to version.</p>
                        <p>However, if you disable or refuse cookies, please note that some parts of this website may become inaccessible or not function properly, particularly the online booking system.</p>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/locations-selector.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
