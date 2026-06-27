import re

def update_file(filename):
    try:
        with open(filename, 'r', encoding='utf-8') as f:
            content = f.read()
            
        # Let's just find the first paragraph of the description and expand it.
        # "Hyperpigmentation is a common skin condition where patches of skin become darker than the surrounding areas. Melasma is a specific type of hyperpigmentation often triggered by hormonal changes, sun exposure, or genetics."
        # If we can't find it easily, we'll just replace the main description.
        
        old_desc = "Hyperpigmentation/Melasma is a medical procedure that involves the injection of platelet-rich plasma (PRP) into specific areas of the penis. The goal of the Hyperpigmentation/Melasma is to potentially improve sexual function and treat certain conditions related to male sexual health."
        # WAIT! If they copied it from M-Shot... Let's see what is in Melasma!
        
    except Exception as e:
        print(e)

update_file('melasma-treatment-kampala-juba.php')
