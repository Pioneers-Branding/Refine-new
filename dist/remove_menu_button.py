with open('includes/services.php', 'r') as f:
    content = f.read()

# Define the exact block to remove
block_to_remove = """        <!-- View All Button -->
        <div class="mt-8 flex justify-center gs-reveal-fade">
            <a href="cosmetic-dermatology-kampala-juba" class="btn-magnetic magnetic-target">
                <span>View Full Menu <i class="fas fa-arrow-right text-xs ml-2"></i></span>
            </a>
        </div>"""

if block_to_remove in content:
    content = content.replace(block_to_remove, "")
    with open('includes/services.php', 'w') as f:
        f.write(content)
    print("Button removed successfully.")
else:
    print("Block not found. Trying flexible replacement.")
    import re
    # Match the block with flexible whitespace
    pattern = re.compile(r'<!-- View All Button -->\s*<div class="mt-8 flex justify-center gs-reveal-fade">\s*<a href="cosmetic-dermatology-kampala-juba" class="btn-magnetic magnetic-target">\s*<span>View Full Menu <i class="fas fa-arrow-right text-xs ml-2"></i></span>\s*</a>\s*</div>', re.DOTALL)
    
    if pattern.search(content):
        content = pattern.sub('', content)
        with open('includes/services.php', 'w') as f:
            f.write(content)
        print("Button removed via flexible matching.")
    else:
        print("Could not find the button.")
