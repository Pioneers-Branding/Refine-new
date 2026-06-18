with open('includes/page-hero.php', 'r') as f:
    content = f.read()

# Replace h1 block
old_h1 = """<h1 class="text-section font-display text-brand-deeper leading-tight mb-6">
                <?php echo isset($pageTitle) ? $pageTitle : 'Refine Skin & Body Clinic'; ?>
            </h1>"""
new_h1 = """<h1 class="text-section font-display text-brand-deeper leading-tight mb-6"><?php echo isset($pageTitle) ? $pageTitle : 'Refine Skin & Body Clinic'; ?></h1>"""

# Replace p block
old_p = """<p class="text-brand-muted font-body text-lg lg:text-xl font-light leading-relaxed">
                    <?php echo $pageDescription; ?>
                </p>"""
new_p = """<p class="text-brand-muted font-body text-lg lg:text-xl font-light leading-relaxed"><?php echo $pageDescription; ?></p>"""

# Let's also remove leading whitespace before the span just in case it causes a space
old_span = """<span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold"><?php echo htmlspecialchars($pageCategory); ?></span>"""
new_span = """<span class="block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold"><?php echo htmlspecialchars($pageCategory); ?></span>"""

content = content.replace(old_h1, new_h1)
content = content.replace(old_p, new_p)
content = content.replace(old_span, new_span)

with open('includes/page-hero.php', 'w') as f:
    f.write(content)

print("Hero spacing fixed.")
