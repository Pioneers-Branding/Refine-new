import re

with open('about.php', 'r') as f:
    content = f.read()

# We want to find the team members and wrap their h4 and p tags.
# Specifically:
# <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">...</h4>
# <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">...</p>
# </a>

# A regex to match the h4 and p tags inside the bento-item
pattern = re.compile(
    r'(<h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">.*?</h4>\s*<p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">.*?</p>)',
    re.DOTALL
)

replacement = r'<div class="min-h-[96px] flex flex-col justify-start">\n                        \1\n                    </div>'

new_content = pattern.sub(replacement, content)

with open('about.php', 'w') as f:
    f.write(new_content)

print("Team text heights fixed.")
