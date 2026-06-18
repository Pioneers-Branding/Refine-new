with open('includes/home-extras.php', 'r') as f:
    content = f.read()

old_section = """<!-- ============= 1. TRUST / CREDENTIALS BAR ============= -->
<section class="py-16 lg:py-24 bg-white border-y border-brand/5">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        <div
            class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-x-4 gap-y-8 lg:gap-8 items-center justify-items-center lg:justify-items-start gs-reveal-fade">"""

new_section = """<!-- ============= 1. TRUST / CREDENTIALS BAR ============= -->
<section class="py-16 lg:py-24 relative bg-surface-cool overflow-hidden border-y border-brand/5">
    <!-- Decorative abstract background -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

    <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10">
        <div class="bg-white/40 backdrop-blur-2xl border border-white/60 shadow-[0_8px_32px_rgba(0,0,0,0.05)] rounded-[2.5rem] p-8 lg:p-12">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-10 items-center justify-items-center gs-reveal-fade">"""

# Replace opening
content = content.replace(old_section, new_section)

# We also need to add </div> to close the new glass wrapper.
# The end of that section looks like:
old_end = """            </div>
        </div>
    </div>
</section>"""

new_end = """            </div>
        </div>
    </div>
</section>"""

# Actually, the original ended with:
#             </div>
#         </div>
#     </div>
# </section>
# But wait, original: 
#         </div> <!-- ends grid -->
#     </div> <!-- ends max-w -->
# </section>

# Let's do a precise replacement for the end of the section.
content = content.replace("""            </div>
        </div>
    </div>
</section>

<!-- ============= 2. TREATMENT CATEGORIES MOSAIC ============= -->""", """            </div>
        </div>
    </div>
</section>

<!-- ============= 2. TREATMENT CATEGORIES MOSAIC ============= -->""")
# Wait, I need to insert a `</div>` before `    </div>\n</section>`
