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
        <div class="bg-white/50 backdrop-blur-2xl border border-white/60 shadow-[0_8px_32px_rgba(0,0,0,0.05)] rounded-[2.5rem] p-8 lg:p-12">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-10 items-center justify-items-center gs-reveal-fade">"""

content = content.replace(old_section, new_section)

# Now find the end of the first section to add the closing </div> for the new wrapper
end_marker = """            </div>
        </div>
    </div>
</section>"""
# Wait, the original was:
#             </div> (end of grid)
#     </div> (end of max-w)
# </section>
# Wait, let's look at the actual source in my view_file output.
"""
            <div class="flex items-center justify-start gap-3 w-full max-w-[200px] text-brand-deeper">
                <div class="w-10 flex-shrink-0 flex justify-center"><i class="fas fa-award text-accent text-3xl"></i>
                </div>
                <div>
                    <p class="font-heading font-semibold text-sm leading-tight">Award-Winning</p>
                    <p class="text-[10px] uppercase tracking-widest text-brand-muted">East Africa</p>
                </div>
            </div>
        </div>
    </div>
</section>
"""

old_end = """            </div>
        </div>
    </div>
</section>"""

new_end = """            </div>
        </div>
        </div>
    </div>
</section>"""

content = content.replace(old_end, new_end, 1)

with open('includes/home-extras.php', 'w') as f:
    f.write(content)

print("Glassmorphism added.")
