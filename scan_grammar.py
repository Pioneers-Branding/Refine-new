import os
import re

weird_phrases = []

pattern = re.compile(r'What is\s*<br\s*/?>\s*<i[^>]*>(.*?)</i>', re.IGNORECASE)

for filename in os.listdir('.'):
    if filename.endswith('.php'):
        filepath = os.path.join('.', filename)
        with open(filepath, 'r') as f:
            content = f.read()
        
        matches = pattern.findall(content)
        for match in matches:
            text = match.strip()
            # Look for anomalies: starts with 'What', 'How', 'The', has colon before question mark, etc.
            lower_text = text.lower()
            if (lower_text.startswith('what') or 
                lower_text.startswith('how') or 
                ':' in text or 
                '?' not in text or
                '  ' in text):
                weird_phrases.append((filename, text))

for filename, text in weird_phrases:
    print(f"{filename}: {text}")

