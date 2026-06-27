import re

with open('contact.php', 'r', encoding='utf-8') as f:
    content = f.read()

juba_branch_html = """                        <!-- Juba -->
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-lg mb-2">Juba Branch</h4>
                                <p class="text-brand-muted text-sm font-light mb-4">1st Floor, Sadeco Building<br>Airport Road, Juba, SS</p>
                                <div class="flex flex-col gap-2">
                                    <a href="tel:+211922687111" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fas fa-phone mr-2"></i> +211 922 687 111</a>
                                </div>
                            </div>
                        </div>"""

new_branches_html = """
                        <!-- Kabalagala -->
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-lg mb-2">Kabalagala Branch</h4>
                                <p class="text-brand-muted text-sm font-light mb-4">Palm Village Mall, Second Floor<br>Opposite KIU, Kampala, UG</p>
                                <div class="flex flex-col gap-2">
                                    <a href="tel:+256705035096" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fas fa-phone mr-2"></i> +256 705 035 096</a>
                                </div>
                            </div>
                        </div>

                        <!-- Bukoto -->
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-lg mb-2">Bukoto Branch</h4>
                                <p class="text-brand-muted text-sm font-light mb-4">UMC Victoria Hospital Annex<br>Kampala, UG</p>
                                <div class="flex flex-col gap-2">
                                    <a href="tel:+256748951996" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fas fa-phone mr-2"></i> +256 748 951 996</a>
                                </div>
                            </div>
                        </div>
"""

content = content.replace(juba_branch_html, juba_branch_html + new_branches_html)

arrival_parking_html = """                        <p class="text-sm text-brand-muted font-light leading-relaxed">
                            <strong>Juba Branch:</strong> Reserved street-level parking is available directly in front of the Sadeco Building.
                        </p>"""

new_arrival_parking_html = """                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-4">
                            <strong>Kabalagala Branch:</strong> Ample parking is available at Palm Village Mall.
                        </p>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-4">
                            <strong>Bukoto Branch:</strong> Dedicated patient parking is available at UMC Victoria Hospital.
                        </p>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">
                            <strong>Juba Branch:</strong> Reserved street-level parking is available directly in front of the Sadeco Building.
                        </p>"""

content = content.replace(arrival_parking_html, new_arrival_parking_html)

with open('contact.php', 'w', encoding='utf-8') as f:
    f.write(content)
