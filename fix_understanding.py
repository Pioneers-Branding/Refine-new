import os
import re

files_to_fix = [
    'double-chin.php',
    'laser-hair-removal.php',
    'laser-tattoo-removal.php'
]

for filename in files_to_fix:
    filepath = os.path.join('.', filename)
    if os.path.exists(filepath):
        with open(filepath, 'r') as f:
            content = f.read()
        
        # Replace 'Understanding ' immediately following the <i> tag
        new_content = re.sub(
            r'(What is\s*<br\s*/?>\s*<i[^>]*>)\s*Understanding\s+', 
            r'\1', 
            content, 
            flags=re.IGNORECASE
        )
        
        with open(filepath, 'w') as f:
            f.write(new_content)

print("Fixed 'Understanding' bug.")
