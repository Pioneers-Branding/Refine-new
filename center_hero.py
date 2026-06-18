with open('includes/hero.php', 'r') as f:
    content = f.read()

# Fix Slide 1 & 2 structural centering
old_struct = """                    <div class="absolute inset-0 flex items-center z-10 pt-20">
                        <div class="max-w-[1600px] w-full mx-auto px-6 lg:px-10">
                            <div class="max-w-3xl">"""
new_struct = """                    <div class="absolute inset-0 flex items-center justify-center z-10 pt-20 text-center">
                        <div class="max-w-[1600px] w-full mx-auto px-6 lg:px-10 flex justify-center">
                            <div class="max-w-3xl flex flex-col items-center">"""
content = content.replace(old_struct, new_struct)

# Fix Slide 3 structural centering
old_struct_3 = """                    <div
                        class="absolute inset-0 flex items-center justify-center md:justify-end z-10 pt-20 text-center md:text-right">
                        <div class="max-w-[1600px] w-full mx-auto px-6 lg:px-10 flex justify-center md:justify-end">
                            <div class="max-w-5xl">"""
new_struct_3 = """                    <div class="absolute inset-0 flex items-center justify-center z-10 pt-20 text-center">
                        <div class="max-w-[1600px] w-full mx-auto px-6 lg:px-10 flex justify-center">
                            <div class="max-w-5xl flex flex-col items-center">"""
# Wait, the line breaks in old_struct_3 might not match exactly due to how it's formatted.
# I will use smaller replacements for Slide 3.

content = content.replace("justify-center md:justify-end", "justify-center")
content = content.replace("text-center md:text-right", "text-center")
content = content.replace('<div class="max-w-5xl">', '<div class="max-w-5xl flex flex-col items-center">')

# Also for paragraphs in the slides, ensure they are centered and don't align left.
# By default, text-center on parent handles text. But max-w-md might cause left alignment if it has margin-right auto. 
# We need mx-auto on the paragraphs.
content = content.replace('class="text-white/80 font-body text-lg max-w-md hero-stagger-text font-light leading-relaxed"', 'class="text-white/80 font-body text-lg max-w-md mx-auto hero-stagger-text font-light leading-relaxed"')

with open('includes/hero.php', 'w') as f:
    f.write(content)
print("Hero text centered.")
