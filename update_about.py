import re

with open('about.php', 'r', encoding='utf-8') as f:
    content = f.read()

new_team_html = """            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 items-start gs-stagger-bento">
                <!-- Team Member 1: Dr. Henry Owiny -->
                <a href="about-dr-henry-owiny-aesthetic-physician-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/imagesfromsite/blog/Refine_Skin_and_Body_Clinic_-_Dr_Henry_Owiny.webp" alt="Dr. Henry Owiny" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <div class="min-h-[96px] flex flex-col justify-start">
                        <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. Henry Owiny</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Aesthetic Physician</p>
                    </div>
                </a>
                
                <!-- Team Member 2: Dr. Vicky Koojo Nganzi -->
                <a href="about-dr-vicky-koojo-nganzi-dermatologist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Dr_Vicky_Koojo_Nganzi.png" alt="Dr. Vicky Koojo Nganzi" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <div class="min-h-[96px] flex flex-col justify-start">
                        <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. Vicky Koojo Nganzi</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Medical & Cosmetic Dermatologist</p>
                    </div>
                </a>
                
                <!-- Team Member 3: Dr. Fauzia Anjum -->
                <a href="#" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool flex items-center justify-center">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/10 transition-colors duration-500 z-10"></div>
                        <span class="text-brand-muted font-body text-sm uppercase tracking-widest">Photo Pending</span>
                    </div>
                    <div class="min-h-[96px] flex flex-col justify-start">
                        <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. Fauzia Anjum</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Specialist</p>
                    </div>
                </a>
                
                <!-- Team Member 4: Dr. William Lubega -->
                <a href="about-dr-william-lubega-plastic-surgeon-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Dr_William_Lubega.png" alt="Dr. William Lubega" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <div class="min-h-[96px] flex flex-col justify-start">
                        <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. William Lubega</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Plastic Surgeon</p>
                    </div>
                </a>
                
                <!-- Team Member 5: Wendy Emyedu -->
                <a href="about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Ms_Wendy_Emyedu_Ayayo.png" alt="Ms. Wendy Emyedu Ayayo" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <div class="min-h-[96px] flex flex-col justify-start">
                        <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Wendy Emyedu</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Nutritionist</p>
                    </div>
                </a>
            </div>"""

content = re.sub(r'<div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 items-start gs-stagger-bento">.*?</div>\s*</div>\s*</section>', new_team_html + '\n        </div>\n    </section>', content, flags=re.DOTALL)

with open('about.php', 'w', encoding='utf-8') as f:
    f.write(content)
