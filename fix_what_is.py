import os
import re

directory = '.'
pattern = re.compile(r'(What is\s*<br\s*/?>\s*<i[^>]*>)\s*What is\s*', re.IGNORECASE)

count = 0
for filename in os.listdir(directory):
    if filename.endswith('.php'):
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r') as f:
            content = f.read()
        
        new_content, num_subs = pattern.subn(r'\1', content)
        
        if num_subs > 0:
            with open(filepath, 'w') as f:
                f.write(new_content)
            count += 1

print(f"Fixed 'What is' duplication in {count} files.")
