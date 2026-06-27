import re

with open('assets/js/main.js', 'r', encoding='utf-8') as f:
    js = f.read()

old_code = """    // ─── NAV DROPDOWN HOVER INTENT ────────────────
    let closeTimer = null;

    document.querySelectorAll('.nav-item-dropdown').forEach(item => {
        const dropdown = item.querySelector('.nav-dropdown');

        // Cancel close on any interaction inside the item
        const cancelClose = () => clearTimeout(closeTimer);

        item.addEventListener('mouseenter', () => {
            clearTimeout(closeTimer);
            // Close all other dropdowns immediately
            document.querySelectorAll('.nav-item-dropdown.show').forEach(other => {
                if (other !== item) other.classList.remove('show');
            });
            if (dropdown) {
                item.classList.add('show');
                // Force pointer-events in case CSS transition lags
                dropdown.style.pointerEvents = 'auto';
            }
        });

        item.addEventListener('mouseleave', (e) => {
            // Only start close timer if mouse actually left the item
            // (not just moved to a child element)
            const related = e.relatedTarget;
            if (related && item.contains(related)) return;
            
            closeTimer = setTimeout(() => {
                item.classList.remove('show');
            }, 400);
        });

        // Keep dropdown open when hovering over the dropdown itself
        if (dropdown) {
            dropdown.addEventListener('mouseenter', cancelClose);
            dropdown.addEventListener('mouseleave', () => {
                closeTimer = setTimeout(() => {
                    item.classList.remove('show');
                }, 400);
            });
        }
    });"""

new_code = """    // ─── NAV DROPDOWN HOVER INTENT ────────────────
    let closeTimer = null;
    let openTimer = null;

    document.querySelectorAll('.nav-item-dropdown').forEach(item => {
        const dropdown = item.querySelector('.nav-dropdown');

        // Cancel close on any interaction inside the item
        const cancelClose = () => {
            clearTimeout(closeTimer);
            clearTimeout(openTimer);
        };

        item.addEventListener('mouseenter', () => {
            clearTimeout(closeTimer);
            clearTimeout(openTimer);
            
            // Wait a small delay before opening to prevent diagonal move issues
            openTimer = setTimeout(() => {
                // Close all other dropdowns immediately
                document.querySelectorAll('.nav-item-dropdown.show').forEach(other => {
                    if (other !== item) other.classList.remove('show');
                });
                if (dropdown) {
                    item.classList.add('show');
                    // Force pointer-events in case CSS transition lags
                    dropdown.style.pointerEvents = 'auto';
                }
            }, 150); // Hover intent delay
        });

        item.addEventListener('mouseleave', (e) => {
            clearTimeout(openTimer); // Cancel if mouse leaves before it opens
            
            // Only start close timer if mouse actually left the item
            // (not just moved to a child element)
            const related = e.relatedTarget;
            if (related && item.contains(related)) return;
            
            closeTimer = setTimeout(() => {
                item.classList.remove('show');
            }, 400);
        });

        // Keep dropdown open when hovering over the dropdown itself
        if (dropdown) {
            dropdown.addEventListener('mouseenter', cancelClose);
            dropdown.addEventListener('mouseleave', () => {
                clearTimeout(openTimer);
                closeTimer = setTimeout(() => {
                    item.classList.remove('show');
                }, 400);
            });
        }
    });"""

if old_code in js:
    with open('assets/js/main.js', 'w', encoding='utf-8') as f:
        f.write(js.replace(old_code, new_code))
    print("JS patched successfully.")
else:
    print("Failed to find old code.")
