import os
import requests
from bs4 import BeautifulSoup
import re

# The user explicitly provided these 115 files
FILES = [
    "6d-green-laser.php",
    "acne.php",
    "allurion-weight-loss.php",
    "alopecia-areata.php",
    "amino-acids-IV-therapy-treatment-kampala-juba.php",
    "anti-aging-kampala-juba.php",
    "anti-migraine-iv-therapy.php",
    "anti-migraine.php",
    "anti-wrinkle-treatment-kampala-juba.php",
    "arm-lift-kampala-juba.php",
    "beard-transplant-kampala-juba.php",
    "bio-identical-hormone-replacement-therapy.php",
    "body-contouring.php",
    "botox.php",
    "breast-augmentation-kampala-juba.php",
    "bridal-packages-kampala-juba.php",
    "carbon-laser-facial-kampala-juba.php",
    "cellulite-treatment-kampala-juba.php",
    "cheek-enhancement-kampala-juba.php",
    "chemical-peel.php",
    "co2-laser-scar-removal.php",
    "cool-lifting.php",
    "cosmetic-dermatology-kampala-juba.php",
    "cryolipolysis.php",
    "dermal-fillers.php",
    "dermaplaning-kampala-juba.php",
    "double-chin.php",
    "eczema.php",
    "ed-treatment-kampala-juba.php",
    "em-body-sculpt.php",
    "eyebrow-transplant-kampala-juba.php",
    "eyelash-treatment-kampala-juba.php",
    "gastric-sleeve-and-bypass-surgery.php",
    "glutathione-IV-therapy-kampala-juba.php",
    "hair-mesotherapy-kampala-juba.php",
    "hair-restoration-kampala-juba.php",
    "hair-transplant.php",
    "hand-rejuvenation-kampala-juba.php",
    "hangover-iv-therapy.php",
    "hydrafacial.php",
    "hyperpigmentation.php",
    "immunity-iv-therapy.php",
    "injectables-kampala-juba.php",
    "inner-beauty-iv-therapy.php",
    "iron-infusion-kampala-juba.php",
    "iv-therapy.php",
    "jawline-contouring-kampala-juba.php",
    "jet-lag-iv-therapy-treatment-kampala-juba.php",
    "joint-and-tissue-rejuvenation.php",
    "laser-hair-removal.php",
    "laser-skin-rejuvenation.php",
    "laser-tattoo-removal.php",
    "laser-treatments-kampala-juba.php",
    "led-light-therapy.php",
    "lip-volumization.php",
    "liposuction-kampala-juba.php",
    "m-shot.php",
    "medical-dermatology.php",
    "melasma.php",
    "menopause-management-kampala-juba.php",
    "mens-aesthetics-kampala-juba.php",
    "mesotherapy-kampala-juba.php",
    "microblading-kampala-juba.php",
    "microdermabrasion-kampala-juba.php",
    "mobile-iv-service-kampala-juba.php",
    "mole-wart-removal.php",
    "mommy-makeover-kampala-juba.php",
    "myers-magic-iv-therapy.php",
    "myers-plus-plenish.php",
    "nad-iv-therapy.php",
    "non-surgical-brazilian-butt-lift.php",
    "non-surgical-liquid-rhinoplasty.php",
    "nutrition-counselling-kampala-juba.php",
    "omg-shot.php",
    "open-pores-treatment-kampala-juba.php",
    "pcdc-fat-dissolving.php",
    "plasma-pen-therapy.php",
    "platelet-rich-plasma-facial.php",
    "podcast.php",
    "post-party-iv-therapy.php",
    "pre-party-iv-therapy.php",
    "profhilo-treatment-kampala-juba.php",
    "prp-breast-lift.php",
    "prp-face-lift.php",
    "prp-hair-restoration.php",
    "prp-treatments-kampala-juba.php",
    "psoriasis.php",
    "refine-iv-lounge-kampala-juba.php",
    "rf-microneedling.php",
    "rosacea.php",
    "scalp-micropigmentation-kampala-juba.php",
    "sculptra-face-lift.php",
    "semaglutide-ozempic-weight-loss.php",
    "skin-and-body-rejuvenation-kampala-juba.php",
    "skin-boosters-kampala-juba.php",
    "skin-cancer.php",
    "skin-lightening-with-tatioactive-kampala-juba.php",
    "skin-tag-removal.php",
    "skin-tightening.php",
    "stress-sleep-wellness-kampala-juba.php",
    "stretch-marks.php",
    "tear-trough-filler-kampala-juba.php",
    "testosterone-therapy-kampala-juba.php",
    "thigh-lift-kampala-juba.php",
    "total-sport-iv-therapy.php",
    "tummy-tuck.php",
    "under-eye-treatment-kampala-juba.php",
    "vaginal-rejuvenation-kampala-juba.php",
    "vaser-lipo-kampala-juba.php",
    "vitamin-b12-combo-IV-therapy-treatment-kampala-juba.php",
    "vitamin-c-treatment-IV-therapy-treatment-kampala-juba.php",
    "vitamin-shots-kampala-juba.php",
    "vitiligo.php",
    "weight-loss-kampala-juba.php",
    "wonder-axon-treatment.php"
]

def clean_html(text):
    if not text:
        return ""
    # remove special chars and newlines that break formatting
    text = text.replace('\n', ' ').replace('\r', '').replace('"', '&quot;')
    return ' '.join(text.split())

def scrape_page(url):
    try:
        response = requests.get(url, timeout=10)
        if response.status_code != 200:
            return None
    except Exception as e:
        print(f"Failed to fetch {url}: {e}")
        return None
        
    soup = BeautifulSoup(response.text, 'html.parser')
    
    data = {
        'title': '',
        'intro': '',
        'benefits': [],
        'conditions': [],
        'faqs': [],
        'myth': '',
        'fact': ''
    }
    
    # 1. Title (H1)
    h1 = soup.find('h1')
    if h1:
        data['title'] = clean_html(h1.text)
        
    # 2. Intro (Look for 'What is...' in h3 or h4)
    intro_header = soup.find(lambda tag: tag.name in ['h3', 'h4'] and 'what is' in tag.text.lower())
    if intro_header:
        p = intro_header.find_next_sibling('p')
        if p:
            data['intro'] = clean_html(p.text)
            
    # 3. Benefits / Process
    experience_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and ('experience' in tag.text.lower() or 'process' in tag.text.lower() or 'benefits' in tag.text.lower()))
    if experience_header:
        ul = experience_header.find_next_sibling('ul')
        if ul:
            for li in ul.find_all('li'):
                p = li.find('p')
                if p:
                    data['benefits'].append(clean_html(p.text))
                    
    # 4. Conditions / Target areas
    cond_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and ('conditions treated' in tag.text.lower() or 'target' in tag.text.lower()))
    if cond_header:
        ul = cond_header.find_next_sibling('ul')
        if ul:
            for li in ul.find_all('li'):
                p = li.find('p')
                if p:
                    data['conditions'].append(clean_html(p.text))
                    
    # 5. FAQs
    for q_div in soup.find_all('div', class_='question'):
        q_tag = q_div.find('h5')
        a_tag = q_div.find('p')
        if q_tag and a_tag:
            q_text = clean_html(re.sub(r'^\d+\.\s*', '', q_tag.text))
            a_text = clean_html(a_tag.text)
            data['faqs'].append({'q': q_text, 'a': a_text})
            
    # 6. Myths and Facts
    myths_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and 'myth' in tag.text.lower())
    if myths_header:
        ul = myths_header.find_next_sibling('ul')
        if ul:
            lis = ul.find_all('li')
            for li in lis:
                text = li.text
                if 'Myth:' in text:
                    data['myth'] = clean_html(text.replace('Myth:', '').strip())
                elif 'Fact:' in text:
                    data['fact'] = clean_html(text.replace('Fact:', '').strip())
                    
    return data

def process_file(filename):
    filepath = os.path.join('/home/veer/Ranveer/refine', filename)
    if not os.path.exists(filepath):
        print(f"File not found: {filename}")
        return
        
    url_slug = filename.replace('.php', '')
    live_url = f"https://refineskinandbody.com/{url_slug}"
    
    print(f"Processing {filename} ...")
    data = scrape_page(live_url)
    if not data:
        print(f"  -> Failed to scrape data from {live_url}")
        return
        
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # Replace the What is Liquid Rhinoplasty header & text
    # Finding the exact block is tough with regex, we'll try to target the exact dummy strings where possible
    
    # 1. Main Intro Header & Text
    content = re.sub(
        r'<h2 class="font-display text-5xl lg:text-6xl text-brand-deeper mb-6 leading-\[1\.1\]">What is <br/><i class="text-accent font-light">Liquid Rhinoplasty\?</i></h2>',
        f'<h2 class="font-display text-5xl lg:text-6xl text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">{data["title"] or "This Treatment"}?</i></h2>',
        content
    )
    if data['intro']:
        content = re.sub(
            r'Liquid Rhinoplasty, often termed a non-surgical nose job, employs fillers to tweak the nose\'s shape and profile without the downtime and invasiveness of surgery\. Dr Chirag Kotecha masterfully uses this technique, delivering astounding results highlighting a patient\'s natural beauty\.',
            data['intro'],
            content
        )
        
    # 2. Conditions Treated Grid Titles
    # Dummy titles: Dorsal Humps & Bumps, Asymmetry, Tip Elevation, Bridge Enhancement, Post-Surgical Fixes
    dummy_conditions = [
        "Dorsal Humps &amp; Bumps", "Asymmetry", "Tip Elevation", "Bridge Enhancement", "Post-Surgical Fixes"
    ]
    # Sometimes it's written with & instead of &amp;
    dummy_conditions_alt = [
        "Dorsal Humps & Bumps", "Asymmetry", "Tip Elevation", "Bridge Enhancement", "Post-Surgical Fixes"
    ]
    
    for i in range(5):
        cond_text = data['conditions'][i] if i < len(data['conditions']) else f"Benefit {i+1}"
        # split cond_text into Title: Description if possible
        parts = cond_text.split(':')
        c_title = parts[0].strip() if len(parts) > 1 else f"Benefit {i+1}"
        c_desc = parts[1].strip() if len(parts) > 1 else cond_text
        
        # Replace title
        content = content.replace(f'<h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-4 relative z-10">{dummy_conditions[i]}</h4>', f'<h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-4 relative z-10">{c_title}</h4>')
        content = content.replace(f'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">{dummy_conditions[i]}</h4>', f'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">{c_title}</h4>')
        
        content = content.replace(f'<h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-4 relative z-10">{dummy_conditions_alt[i]}</h4>', f'<h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-4 relative z-10">{c_title}</h4>')
        content = content.replace(f'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">{dummy_conditions_alt[i]}</h4>', f'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">{c_title}</h4>')

    # 3. Myths & Facts
    if data['myth'] and data['fact']:
        content = re.sub(
            r'"Results from Liquid Rhinoplasty are permanent\."',
            f'"{data["myth"]}"',
            content
        )
        content = re.sub(
            r'The effects last gracefully between 6-18 months, varying beautifully per individual\.',
            data['fact'],
            content
        )
        
    # 4. FAQs
    dummy_faqs = [
        "1. Is Liquid Rhinoplasty painful?",
        "2. When can I resume normal activities?",
        "3. Can I combine this with other treatments?",
        "4. What if I don't like the results?",
        "5. Are there any risks involved?",
        "6. What is the cost of Liquid Rhinoplasty in Uganda?"
    ]
    for i in range(6):
        if i < len(data['faqs']):
            q = data['faqs'][i]['q']
            a = data['faqs'][i]['a']
            content = content.replace(dummy_faqs[i], f"{i+1}. {q}")
            # The answers in dummy have specific text, we will just use a generic regex to replace the paragraph text inside the faq-content
            # actually it's easier to replace by the dummy questions and then the immediate <p> tags, but since we are modifying strings, it's safer to just let the dummy answers be replaced if we can uniquely identify them.
            # However, since they are unique paragraphs, we can replace them exactly.
            
    dummy_answers = [
        "Most patients experience minimal discomfort, thanks to specialized premium numbing agents applied before the procedure.",
        "Typically, right after the procedure! Just avoid heavy physical activity, extreme heat, or wearing heavy glasses for 24 hours.",
        "Absolutely. Discuss your holistic aesthetic goals with Dr. Chirag during consultation to curate a comprehensive, personalized treatment plan.",
        "One distinct advantage is the reversibility of certain hyaluronic acid fillers. Safe, precise adjustments or complete dissolving can be easily performed if needed.",
        "Like all cosmetic procedures, minor risks exist, but they are exceedingly minimal when conducted by highly experienced, anatomy-expert hands like Dr. Chirag's.",
        "Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin &amp; Body Clinic typically starts from $500.",
        "Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin & Body Clinic typically starts from $500."
    ]
    for i in range(6):
        if i < len(data['faqs']):
            content = content.replace(dummy_answers[i], data['faqs'][i]['a'])
            if i == 5:
                 content = content.replace(dummy_answers[6], data['faqs'][i]['a'])

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"  -> Successfully updated {filename}")

print(f"Starting to process {len(FILES)} files...")
for f in FILES:
    process_file(f)
print("Finished processing all files.")
