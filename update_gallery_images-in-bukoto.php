<?php
$filepath = 'c:/Users/Veer/Desktop/office/Refine-new/gallery.php';
$content = file_get_contents($filepath);

$new_images = [
    "/assets/images/services/skincare_general/Rejuvenation_10_11zon.webp",
    "/assets/images/services/skincare_general/Sclerotherapy_11_11zon.webp",
    "/assets/images/services/skincare_general/PRP_8_11zon.webp",
    "/assets/images/services/skincare_general/HydraFacial.webp",
    "/assets/images/services/skincare_general/Microblading-new.webp",
    "/assets/images/services/skincare_general/Facial_4_11zon.webp",
    "/assets/images/services/skincare_general/Scrub Massage_12_11zon.webp",
    "/assets/images/services/skincare_general/hot stone therapy_5_11zon.webp",
    "/assets/images/services/skincare_general/plasma pen therapy_6_11zon.webp",
    "/assets/images/services/injectables/Botox.webp",
    "/assets/images/services/injectables/threadlifts_13_11zon.webp",
    "/assets/images/services/injectables/4.webp",
    "/assets/images/services/acne_and_scars/Acne1.webp",
    "/assets/images/services/pigmentation/vitiligo_14_11zon.webp",
    "/assets/images/services/hair-restoration/prp hair restoration_7_11zon.webp",
    "/assets/images/clinic_and_brand/tempgallery2.webp",
    "/assets/images/uncategorized/IV THERAPY.webp",
    "/assets/images/uncategorized/dermatology-new.webp"
];

$html_template = "                <!-- Image -->\n                <div class=\"filter-item break-inside-avoid relative rounded-3xl overflow-hidden group bento-item shadow-lg\" data-category=\"image\" style=\"display: none;\">\n                    <img src=\"%s\" alt=\"Gallery Image\" class=\"gallery-image w-full h-auto rounded-3xl cursor-pointer transform transition-transform duration-700 group-hover:scale-[1.02]\" loading=\"lazy\">\n                </div>";

$new_html_blocks = [];
foreach ($new_images as $img) {
    $new_html_blocks[] = sprintf($html_template, $img);
}
$new_html = implode("\n", $new_html_blocks) . "\n";

$pattern = '/(<!-- Image -->\s*<div class="filter-item[^>]+data-category="image"[^>]+>\s*<img[^>]+>\s*<\/div>\s*)+/';
$new_content = preg_replace($pattern, $new_html, $content, 1);

if ($new_content && $new_content !== $content) {
    file_put_contents($filepath, $new_content);
    echo "Successfully replaced images!\n";
} else {
    echo "Could not find the target image blocks.\n";
}
