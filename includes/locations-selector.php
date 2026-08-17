<?php
/**
 * Locations Selector Section
 * Premium location tabs bar for all clinic branches and service areas.
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

$all_locations = [
    'kabalagala' => 'Kabalagala',
    'bukoto'     => 'Bukoto',
    'juba'       => 'Juba',
    'mukono'     => 'Mukono',
    'entebbe'    => 'Entebbe',
    'mpigi'      => 'Mpigi',
    'jinja'      => 'Jinja',
    'wakiso'     => 'Wakiso',
    'nansana'    => 'Nansana'
];

$loc_regex = '/-in-(' . implode('|', array_keys($all_locations)) . ')$/';

if (preg_match($loc_regex, $current_page, $matches)) {
    $base_page = preg_replace($loc_regex, '', $current_page);
} else {
    if (preg_match('/-kampala-juba$/', $current_page)) {
        $base_page = preg_replace('/-kampala-juba$/', '', $current_page);
    } else {
        $base_page = $current_page;
    }
}

// Main Service Page Link
$main_service_url = '/' . $base_page;
if (!file_exists($root_dir . '/' . $base_page . '.php')) {
    if ($base_page === 'dermatologist') {
        $main_service_url = '/medical-dermatology';
    } elseif ($base_page === 'skin-clinic') {
        $main_service_url = '/services';
    }
}
$is_main_active = ($current_page === $base_page || $current_page === basename($main_service_url));
?>

<!-- ============================================
     LOCATIONS BAR / INTERNAL LINKING
     ============================================ -->
<section class="bg-[#0b121f] text-white border-t border-white/10 py-6 relative z-30">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-accent/10 border border-accent/20 flex items-center justify-center text-accent text-sm flex-shrink-0">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <h5 class="font-heading font-semibold text-sm lg:text-base text-white tracking-wide">Serving Patients Across Locations</h5>
                    <p class="text-xs text-white/60 font-light">Select a location to view branch details</p>
                </div>
            </div>
            
            <div class="flex items-center flex-wrap gap-2 pt-2 lg:pt-0">
                <!-- Location Buttons -->
                <?php foreach ($all_locations as $locSlug => $locName): ?>
                    <?php 
                        $locUrl = '/' . $base_page . '-in-' . $locSlug;
                        $isLocActive = ($current_page === ($base_page . '-in-' . $locSlug));
                    ?>
                    <a href="<?php echo $locUrl; ?>" class="px-3.5 py-1.5 rounded-full border text-xs lg:text-sm transition-all duration-300 font-heading <?php echo $isLocActive ? 'bg-accent/20 border-accent text-accent font-bold pointer-events-none' : 'border-white/10 text-white/80 hover:bg-white/5 hover:border-white/20'; ?>">
                        <?php echo $locName; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        
    </div>
</section>

