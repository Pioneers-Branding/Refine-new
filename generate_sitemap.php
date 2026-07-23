<?php
// generate_sitemap.php
$dir = __DIR__;
$baseUrl = 'https://refineskinandbody.com';

$files = scandir($dir);
$pages = [];

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
        continue;
    }
    
    // Exclude specific files
    if (in_array($file, ['router.php', 'build.php', 'generate_sitemap.php', 'thank-you.php'])) {
        continue;
    }
    
    $content = file_get_contents($dir . '/' . $file);
    
    // Check if it is a user-facing page (includes includes/head.php)
    if (strpos($content, 'includes/head.php') !== false) {
        $pages[] = $file;
    }
}

// Sort pages alphabetically
sort($pages);

// Start XML output
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d');

foreach ($pages as $page) {
    $cleanName = str_replace('.php', '', $page);
    if ($cleanName === 'index') {
        $url = $baseUrl . '/';
        $priority = '1.0';
    } else {
        $url = $baseUrl . '/' . $cleanName;
        $priority = '0.8';
    }
    
    $xml .= '  <url>' . "\n";
    $xml .= '    <loc>' . htmlspecialchars($url) . '</loc>' . "\n";
    $xml .= '    <lastmod>' . $today . '</lastmod>' . "\n";
    $xml .= '    <changefreq>weekly</changefreq>' . "\n";
    $xml .= '    <priority>' . $priority . '</priority>' . "\n";
    $xml .= '  </url>' . "\n";
}

// Include Blog Articles in Sitemap
$blogSlugs = [
    'botox-vs-dermal-fillers-which-one-should-you-choose',
    'top-10-daily-skincare-habits-healthy-glowing-skin',
    'what-is-melasma-can-it-be-permanently-treated',
    'can-iv-therapy-improve-skin-glow-overall-wellness'
];

foreach ($blogSlugs as $slug) {
    $url = $baseUrl . '/blog/' . $slug;
    $xml .= '  <url>' . "\n";
    $xml .= '    <loc>' . htmlspecialchars($url) . '</loc>' . "\n";
    $xml .= '    <lastmod>' . $today . '</lastmod>' . "\n";
    $xml .= '    <changefreq>weekly</changefreq>' . "\n";
    $xml .= '    <priority>0.8</priority>' . "\n";
    $xml .= '  </url>' . "\n";
}

$xml .= '</urlset>' . "\n";

file_put_contents($dir . '/sitemap.xml', $xml);
echo "Sitemap generated successfully in root sitemap.xml (" . (count($pages) + count($blogSlugs)) . " pages).\n";
