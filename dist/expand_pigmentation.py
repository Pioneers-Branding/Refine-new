import re

def expand_hyperpigmentation():
    filename = 'Hyperpigmentation-Melasma-treatment-kampala-juba.php'
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # We will add a robust FAQ section and a process section to make it not "too simple".
    
    # We will replace the entire section below the hero and before appointment-form
    # Actually, we can just insert more sections before appointment form.
    
    new_sections = """
    <!-- The Process -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-16 gs-reveal-text text-center max-w-3xl mx-auto">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Treatment Journey</span>
                <h3 class="text-section font-display text-brand-deeper mb-6">Our <i class="text-accent font-light">Approach</i></h3>
                <p class="text-brand-muted font-body text-xl font-light leading-relaxed">
                    We employ a multi-modal strategy to tackle stubborn pigmentation, combining advanced clinical treatments with targeted home care.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 gs-stagger-bento">
                <div class="glass-panel p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 transition-all duration-500 group">
                    <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-brand/5 mb-6 flex items-center justify-center text-accent text-xl group-hover:scale-110 transition-transform duration-500">
                        1
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">Skin Analysis</h4>
                    <p class="text-brand-muted font-light leading-relaxed">Detailed assessment to identify the depth, type, and underlying causes of your pigmentation.</p>
                </div>
                
                <div class="glass-panel p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 transition-all duration-500 group">
                    <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-brand/5 mb-6 flex items-center justify-center text-accent text-xl group-hover:scale-110 transition-transform duration-500">
                        2
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">Targeted Therapy</h4>
                    <p class="text-brand-muted font-light leading-relaxed">A bespoke combination of medical-grade peels, laser treatments, or specialized injectables.</p>
                </div>
                
                <div class="glass-panel p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 transition-all duration-500 group">
                    <div class="w-14 h-14 rounded-full bg-white shadow-sm border border-brand/5 mb-6 flex items-center justify-center text-accent text-xl group-hover:scale-110 transition-transform duration-500">
                        3
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">Maintenance & Protection</h4>
                    <p class="text-brand-muted font-light leading-relaxed">Prescriptive home-care regimens and sun protection protocols to sustain your luminous results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Treatments -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white font-body text-xs tracking-[0.2em] uppercase mb-8 font-semibold backdrop-blur-md">
                        Comprehensive Solutions
                    </span>
                    <h3 class="text-section font-display leading-tight mb-6">Cutting-Edge <br/><i class="text-accent font-light">Pigmentation Treatments</i></h3>
                    <p class="text-white/70 text-lg font-light leading-relaxed mb-8">
                        There is no one-size-fits-all solution for melasma and hyperpigmentation. We offer a sophisticated arsenal of treatments to lift away dark spots and reveal your natural radiance.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4 text-white/90">
                            <i class="fas fa-check-circle text-accent"></i> Chemical Peels (Cosmelan & Dermamelan)
                        </li>
                        <li class="flex items-center gap-4 text-white/90">
                            <i class="fas fa-check-circle text-accent"></i> Q-Switched Nd:YAG Laser Toning
                        </li>
                        <li class="flex items-center gap-4 text-white/90">
                            <i class="fas fa-check-circle text-accent"></i> Microneedling with Depigmenting Serums
                        </li>
                        <li class="flex items-center gap-4 text-white/90">
                            <i class="fas fa-check-circle text-accent"></i> Prescription Topical Medications
                        </li>
                    </ul>
                </div>
                <div class="relative rounded-3xl overflow-hidden aspect-square border border-white/10">
                    <img src="/assets/imagesfromsite/dermatology-new-04.webp" alt="Laser skin treatment" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
    <section class="py-16 lg:py-24 bg-[#faf9f6]">
        <div class="max-w-[900px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold border-b border-accent/30 pb-1">Answers</span>
                <h3 class="text-section font-display text-brand-deeper mb-6 mt-4">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
            </div>

            <div class="space-y-3">
                <div class="glass-panel rounded-xl overflow-hidden faq-item cursor-pointer group bg-white border border-brand/5 transition-all duration-300">
                    <div class="px-5 py-4 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent">Can melasma be completely cured?</h4>
                        <div class="w-8 h-8 rounded-full bg-surface-cool flex items-center justify-center transition-colors group-[.active]:bg-accent/10">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent group-[.active]:rotate-45 transition-transform duration-500"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500">
                        <div class="px-5 pb-4">
                            <p class="text-brand-muted font-light leading-relaxed mt-0 border-t border-brand/5 pt-4">Melasma is a chronic condition that currently has no permanent cure. However, with the right combination of clinical treatments and a strict maintenance routine (especially diligent sun protection), it can be highly effectively managed and cleared.</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel rounded-xl overflow-hidden faq-item cursor-pointer group bg-white border border-brand/5 transition-all duration-300">
                    <div class="px-5 py-4 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent">How long does it take to see results?</h4>
                        <div class="w-8 h-8 rounded-full bg-surface-cool flex items-center justify-center transition-colors group-[.active]:bg-accent/10">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent group-[.active]:rotate-45 transition-transform duration-500"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500">
                        <div class="px-5 pb-4">
                            <p class="text-brand-muted font-light leading-relaxed mt-0 border-t border-brand/5 pt-4">Improvements are typically noticed within 4 to 8 weeks depending on the treatment modality chosen. Pigmentation clears gradually as skin turns over and produces less melanin.</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel rounded-xl overflow-hidden faq-item cursor-pointer group bg-white border border-brand/5 transition-all duration-300">
                    <div class="px-5 py-4 flex justify-between items-center">
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg group-hover:text-accent">How much does it cost?</h4>
                        <div class="w-8 h-8 rounded-full bg-surface-cool flex items-center justify-center transition-colors group-[.active]:bg-accent/10">
                            <i class="fas fa-plus text-brand group-[.active]:text-accent group-[.active]:rotate-45 transition-transform duration-500"></i>
                        </div>
                    </div>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-500">
                        <div class="px-5 pb-4">
                            <p class="text-brand-muted font-light leading-relaxed mt-0 border-t border-brand/5 pt-4">The actual cost will totally depend on your diagnosis, the severity of your condition, the amount and length of time required and your ultimate goals. The first step will be a consultation to define the treatment plan and then a cost can be accurately shared.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.maxHeight = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });
    </script>
"""
    
    # insert before <?php include 'includes/appointment-form.php'; ?>
    if "<?php include 'includes/appointment-form.php'; ?>" in content:
        content = content.replace("<?php include 'includes/appointment-form.php'; ?>", new_sections + "\n    <?php include 'includes/appointment-form.php'; ?>")
    
    with open(filename, 'w', encoding='utf-8') as f:
        f.write(content)


def fix_melasma():
    filename = 'melasma-treatment-kampala-juba.php'
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
        
    replacements = [
        (
            'Strategic, micro-precise injections of dermal filler are administered by Dr. Chirag to reshape, elevate, and contour your nose.',
            'Expertly applied treatments, which may include advanced peels, laser therapy, or topical prescriptions, are administered to target excess pigmentation and restore an even skin tone.'
        ),
        (
            'Walk out immediately with your stunning, refined new profile.',
            'Receive personalized skincare guidance and a maintenance routine to protect your skin, ensuring long-lasting, clear, and radiant results.'
        ),
        (
            'A keen, masterful aesthetic eye ensuring beautifully harmonious and perfectly proportioned results.',
            'A deep understanding of diverse skin types and pigmentation triggers, ensuring safe, effective, and customized care.'
        ),
        (
            'Uncompromising standards using only premium, high-quality, FDA-approved dermal fillers.',
            'Uncompromising safety standards using scientifically proven, medical-grade treatments and clinically validated technologies.'
        )
    ]
    
    for old, new in replacements:
        content = content.replace(old, new)
        
    with open(filename, 'w', encoding='utf-8') as f:
        f.write(content)

expand_hyperpigmentation()
fix_melasma()

