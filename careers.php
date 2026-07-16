<?php
$pageCategory = "Join Our Team";
$pageTitle = "Careers at <i class='text-brand font-light'>Refine.</i>";
$pageDescription = "We are always looking for passionate, skilled professionals to join our growing family. Build your career at East Africa's leading aesthetic clinic.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         APPLICATION FORM
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[900px] mx-auto px-6 lg:px-10">

            <div class="glass-panel p-8 md:p-12 rounded-[40px] bg-surface-warm shadow-xl gs-reveal-fade border border-brand/5">

                <form accept-charset='UTF-8' action='https://app.formester.com/forms/9f739eec-3fbd-49bf-a7a9-ebf490069756/submissions' method='POST' enctype="multipart/form-data" class="space-y-10">
                    <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
                    <input type="hidden" name="subject" value="New Career Application – Refine Skin & Body">

                    <!-- Section 1: Personal Details -->
                    <div>
                        <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-user-circle text-accent"></i> Your Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Full Name</label>
                                <input type="text" name="full_name" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="Jane Doe" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Email Address</label>
                                <input type="email" name="email" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="jane@example.com" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Phone Number</label>
                                <input type="tel" name="phone" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="+256 700 000 000" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Position of Interest</label>
                                <div class="relative">
                                    <select name="position" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent appearance-none transition-colors cursor-pointer" required>
                                        <option value="" disabled selected>Select a role…</option>
                                        <option value="Aesthetic Nurse">Aesthetic Nurse</option>
                                        <option value="Beauty Therapist">Beauty Therapist</option>
                                        <option value="Dermatologist">Dermatologist</option>
                                        <option value="Clinic Coordinator">Clinic Coordinator</option>
                                        <option value="Marketing & Social Media">Marketing & Social Media</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-brand/40 pointer-events-none"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Application -->
                    <div>
                        <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-file-alt text-accent"></i> Your Application</h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Upload Your CV / Resume</label>
                                <input type="file" name="attachment" accept=".pdf,.doc,.docx" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-brand/5 file:text-brand-deeper hover:file:bg-brand/10 file:cursor-pointer file:transition-colors">
                                <p class="text-[11px] text-brand-muted mt-1.5 font-light">Accepted formats: PDF, DOC, DOCX (max 5 MB)</p>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Cover Message</label>
                                <textarea name="message" rows="5" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors resize-none" placeholder="Tell us a bit about yourself, your experience, and why you'd love to join Refine…"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="pt-6 border-t border-brand/10">
                        <button type="submit" class="btn-magnetic w-full magnetic-target">
                            <span>Submit Application</span>
                        </button>
                        <p class="text-xs text-brand-muted mt-4 font-light text-center"><i class="fas fa-lock text-accent mr-1"></i> Your information is securely encrypted and kept strictly confidential.</p>
                    </div>

                </form>
            </div>

        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
