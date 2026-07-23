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

// Generate static HTML for Blog articles
if (file_exists(__DIR__ . '/blog.php')) {
    echo "Rendering blog articles...\n";
    @mkdir($dist . '/blog', 0755, true);
    
    // Copy blog.html to dist/blog/index.html
    if (file_exists($dist . '/blog.html')) {
        copy($dist . '/blog.html', $dist . '/blog/index.html');
    }

    // Extract articles dataset from blog.php
    $articles = [];
    $blogPhpContent = file_get_contents(__DIR__ . '/blog.php');
    
    // Safely render each article by setting URI and slug
    $articleSlugs = [
        'botox-vs-dermal-fillers-which-one-should-you-choose',
        'top-10-daily-skincare-habits-healthy-glowing-skin',
        'what-is-melasma-can-it-be-permanently-treated',
        'can-iv-therapy-improve-skin-glow-overall-wellness'
    ];

    foreach ($articleSlugs as $artSlug) {
        $_SERVER['REQUEST_URI'] = '/blog/' . $artSlug;
        $_GET['slug'] = $artSlug;
        
        ob_start();
        include __DIR__ . '/blog.php';
        $artContent = ob_get_clean();

        // Save as dist/blog/slug.html and dist/blog/slug/index.html
        file_put_contents($dist . '/blog/' . $artSlug . '.html', $artContent);
        @mkdir($dist . '/blog/' . $artSlug, 0755, true);
        file_put_contents($dist . '/blog/' . $artSlug . '/index.html', $artContent);
    }
    echo "Rendered " . count($articleSlugs) . " blog articles to /dist/blog/\n";
}

echo "Build complete. Static HTML files generated in /dist\n";
