import os
import re
import glob

# 2. Fix "how much does it cost" text
cost_regex = re.compile(r"The cost for (.*?) varies depending on your individual requirements\. Please contact Refine Skin & Body Clinic for a personalized consultation and quote\.")
cost_replacement = r"The actual cost will totally depend on your diagnosis, the severity of your condition, the amount and length of time required and your ultimate goals. The first step will be a consultation to define the treatment plan and then a cost can be accurately shared."

# 9. Fix Botox to Botox®
# Be careful not to replace in URLs, file names, or if already trademarked.
# We will just replace Botox with Botox&reg; if not in an HTML tag attribute.
def replace_botox(match):
    # If the word is part of a URL or file name (contains hyphens or dots) or already has &reg; or ®, ignore
    return "Botox&reg;"

def process_file(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original = content
    
    # Cost fix
    content = cost_regex.sub(cost_replacement, content)
    
    # Kosmoderma fix
    content = content.replace("Kosmoderma", "Refine Skin & Body Clinic")
    
    # Botox fix - basic text replace, avoiding attributes if possible. 
    # A safer way: replace "Botox " with "Botox&reg; " and "Botox<" with "Botox&reg;<", "Botox," with "Botox&reg;,"
    # Just avoiding "botox-" (urls) and "Botox&reg;" and "Botox®"
    content = re.sub(r'\bBotox(?!®|&reg;|-|\.php|\.html|\.png|\.jpg|\.webp)', 'Botox&reg;', content, flags=re.IGNORECASE)
    
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {filepath}")

for filepath in glob.glob('*.php'):
    process_file(filepath)
