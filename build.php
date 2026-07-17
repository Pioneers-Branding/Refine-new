<?php
// build.php
$dist = __DIR__ . '/dist';

// Create dist directory if it doesn't exist
if (!is_dir($dist)) {
    mkdir($dist, 0755, true);
}

// Generate sitemap.xml dynamically
echo "Generating sitemap...\n";
include __DIR__ . '/generate_sitemap.php';

// Function to copy directory recursively
function copy_dir($src, $dst) {
    if (!is_dir($src)) return;
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copy_dir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Copy assets directory
if (is_dir(__DIR__ . '/assets')) {
    copy_dir(__DIR__ . '/assets', $dist . '/assets');
}

// Copy other static files in root (e.g. robots.txt, sitemap.xml, favicon)
$rootFiles = scandir(__DIR__);
foreach ($rootFiles as $file) {
    if ($file === '.' || $file === '..' || is_dir(__DIR__ . '/' . $file)) continue;
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if ($ext !== 'php' && $ext !== 'htaccess' && $ext !== 'toml') {
        copy(__DIR__ . '/' . $file, $dist . '/' . $file);
    }
}

// Render PHP files to HTML
$phpFiles = glob(__DIR__ . '/*.php');
foreach ($phpFiles as $file) {
    $basename = basename($file);
    // Exclude router, build script, and anything that shouldn't be a page
    if (in_array($basename, ['router.php', 'build.php'])) {
        continue;
    }
    
    // Start output buffering
    ob_start();
    // Include the file to execute PHP
    include $file;
    // Get the output
    $content = ob_get_clean();
    
    // Change extension to .html
    $htmlFile = str_replace('.php', '.html', $basename);
    
    // Write to dist folder
    file_put_contents($dist . '/' . $htmlFile, $content);
}

echo "Build complete. Static HTML files generated in /dist\n";
