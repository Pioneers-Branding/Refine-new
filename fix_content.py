import re

def update_file(filename, replacements):
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    for old, new in replacements:
        content = content.replace(old, new)
        
    with open(filename, 'w', encoding='utf-8') as f:
        f.write(content)

# OMG Shot Fixes
omg_replacements = [
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Medical Weight Loss</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Achieve sustainable weight loss with medically supervised programmes that combine nutritional guidance, lifestyle coaching, and advanced treatments. Our expert team creates personalised plans that address your unique metabolism, health goals, and lifestyle.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Decreased Libido</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Helps rejuvenate intimate tissues and increase sexual desire by stimulating natural cell regeneration and blood flow.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Appetite Control</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Innovative treatments that help manage hunger cues and reduce cravings, making it easier to maintain a healthy eating plan.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Difficulty Achieving Orgasm</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Enhances clitoral and vaginal sensitivity, making orgasms easier to achieve and often more intense.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Metabolic Boost</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Treatments and supplements designed to support healthy metabolism and energy expenditure for more effective weight management.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Vaginal Dryness</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improves natural lubrication by restoring healthy tissue, reducing discomfort and enhancing intimacy.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Composition</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improve your body composition with treatments that target fat reduction while preserving lean muscle mass for a healthier, more toned physique.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Urinary Incontinence</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Strengthens the tissues around the urethra, significantly improving or resolving mild to moderate stress incontinence.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Lifestyle Integration</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Ongoing support and guidance to help you integrate healthy habits into your daily life for lasting, sustainable weight management success.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Pain During Intercourse</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Reduces pain (dyspareunia) by healing and rejuvenating the vaginal walls, leading to more comfortable and enjoyable sex.</p>'
    )
]
update_file('omg-shot-treatment-kampala-juba.php', omg_replacements)


# M-Shot Fixes
m_replacements = [
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Energy & Vitality</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Combat fatigue and low energy with a potent blend of B vitamins, minerals, and amino acids delivered directly into your bloodstream. Our IV therapy supports cellular energy production and helps you feel revitalised and ready to take on the day.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Erectile Dysfunction (ED)</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Improves blood flow and stimulates the growth of new blood vessels, resulting in stronger, firmer, and more sustainable erections.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Immune Support</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Strengthen your immune system with high-dose vitamin C, zinc, and other immune-supporting nutrients for maximum absorption and effectiveness.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Decreased Sensitivity</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Regenerates nerve tissue to heighten sensitivity and increase overall sexual pleasure and satisfaction.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hydration & Recovery</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Rapidly rehydrate and replenish electrolytes after illness, travel, or intense physical activity for fast, effective recovery.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Performance Anxiety</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">By enhancing physical performance and function, the M-Shot can significantly boost sexual confidence and reduce anxiety.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Detox & Glow</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Support your body\'s natural detoxification pathways with glutathione and antioxidants that help clear toxins and promote radiant health.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Peyronie\'s Disease</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Helps break down scar tissue and plaque, which can reduce penile curvature and associated pain or discomfort.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Total Wellness Boost</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our comprehensive IV therapy combines essential nutrients, hydration, and vitamins to support your overall health and wellbeing — helping you feel your best every day.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Overall Sexual Wellness</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Promotes healthier tissue and optimal function for a revitalized sex life and improved intimate wellness.</p>'
    )
]
update_file('m-shot-treatment-kampala-juba.php', m_replacements)

# Wonder Axon Fixes
wonder_axon_replacements = m_replacements.copy()  # Uses the exact same IV texts currently!
wonder_axon_replacements = [
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Energy & Vitality</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Combat fatigue and low energy with a potent blend of B vitamins, minerals, and amino acids delivered directly into your bloodstream. Our IV therapy supports cellular energy production and helps you feel revitalised and ready to take on the day.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Muscle Toning & Building</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Stimulates intense muscle contractions that build, strengthen, and tone core, glute, arm, and leg muscles far beyond normal exercise.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Immune Support</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Strengthen your immune system with high-dose vitamin C, zinc, and other immune-supporting nutrients for maximum absorption and effectiveness.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Fat Reduction</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">The high-intensity metabolic stimulation accelerates fat burning in targeted areas, helping to reduce stubborn localized fat deposits.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hydration & Recovery</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Rapidly rehydrate and replenish electrolytes after illness, travel, or intense physical activity for fast, effective recovery.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Contouring</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Sculpts and defines the body without surgery or downtime, providing a noticeable lifting and firming effect.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Detox & Glow</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Support your body\'s natural detoxification pathways with glutathione and antioxidants that help clear toxins and promote radiant health.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Post-Natal Recovery</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Helps restore abdominal muscle tone and strength after pregnancy, safely assisting in diastasis recti improvement.</p>'
    ),
    (
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Total Wellness Boost</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our comprehensive IV therapy combines essential nutrients, hydration, and vitamins to support your overall health and wellbeing — helping you feel your best every day.</p>',
        '<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Athletic Performance</h4>\n          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Enhances muscular endurance and strength, providing a supplementary boost for athletes and fitness enthusiasts.</p>'
    ),
    (
        'muscle wasting, metabolic disturbance',
        'muscle building process, metabolic stimulation'
    ),
    (
        'muscle wasting',
        'muscle building'
    )
]
update_file('wonder-axon-treatment-kampala-juba.php', wonder_axon_replacements)

