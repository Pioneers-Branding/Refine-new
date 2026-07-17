<?php
/**
 * Locations Selector Section
 * Premium simplified location tabs bar for Kabalagala, Bukoto, and Juba branches.
 */

// Dynamically determine the entry service page requested/compiled (backwards scan)
$included_files = get_included_files();
$current_page = '';
$root_dir = realpath(__DIR__ . '/..');
for ($i = count($included_files) - 1; $i >= 0; $i--) {
    $file_path = $included_files[$i];
    $file_path_real = realpath($file_path);
    $file_dir = dirname($file_path_real);
    $file_name = basename($file_path_real);
    if ($file_dir === $root_dir && !in_array($file_name, ['build.php', 'router.php'])) {
        $current_page = basename($file_name, '.php');
        break;
    }
}
if (empty($current_page)) {
    $current_page = basename($_SERVER['SCRIPT_NAME'], '.php');
}

// Determine base and Kampala URL
if (preg_match('/-in-(kabalagala|bukoto|juba)$/', $current_page)) {
    $base_page = preg_replace('/-in-(kabalagala|bukoto|juba)$/', '', $current_page);
} else {
    // We are on a Kampala page
    if (preg_match('/-kampala-juba$/', $current_page)) {
        $base_page = preg_replace('/-kampala-juba$/', '', $current_page);
    } else {
        $base_page = $current_page;
    }
}

$url_kabalagala = '/' . $base_page . '-in-kabalagala';
$url_bukoto = '/' . $base_page . '-in-bukoto';
$url_juba = '/' . $base_page . '-in-juba';
?>

<!-- ============================================
     LOCATIONS BAR / INTERNAL LINKING
     ============================================ -->
<section class="bg-[#0b121f] text-white border-t border-white/5 py-4 relative z-30">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        
        <!-- Tab Bar -->
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center text-accent text-sm">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h5 class="font-heading font-semibold text-sm lg:text-base text-white tracking-wide">Serving Patients Across Locations</h5>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="<?php echo $url_kabalagala; ?>" class="px-5 py-2 rounded-full border text-xs lg:text-sm transition-all duration-300 font-heading <?php echo ($current_page === basename($url_kabalagala)) ? 'bg-accent/20 border-accent text-accent font-bold pointer-events-none' : 'border-white/10 text-white/80 hover:bg-white/5 hover:border-white/20'; ?>">Kabalagala</a>
                <a href="<?php echo $url_bukoto; ?>" class="px-5 py-2 rounded-full border text-xs lg:text-sm transition-all duration-300 font-heading <?php echo ($current_page === basename($url_bukoto)) ? 'bg-accent/20 border-accent text-accent font-bold pointer-events-none' : 'border-white/10 text-white/80 hover:bg-white/5 hover:border-white/20'; ?>">Bukoto</a>
                <a href="<?php echo $url_juba; ?>" class="px-5 py-2 rounded-full border text-xs lg:text-sm transition-all duration-300 font-heading <?php echo ($current_page === basename($url_juba)) ? 'bg-accent/20 border-accent text-accent font-bold pointer-events-none' : 'border-white/10 text-white/80 hover:bg-white/5 hover:border-white/20'; ?>">Juba</a>
            </div>
        </div>
        
    </div>
</section>
