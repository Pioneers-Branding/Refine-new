<?php
/** Resolve a mapped cloud-drive video to Gumlet, preserving unrelated local videos. */
function gumlet_video_embed($slug, $fallback = '') {
    static $videos = null;
    if ($videos === null) {
        $mapFile = __DIR__ . '/../assets/data/gumlet-video-map.json';
        $data = file_exists($mapFile) ? json_decode(file_get_contents($mapFile), true) : [];
        $videos = isset($data['slugs']) && is_array($data['slugs']) ? $data['slugs'] : [];
    }
    return isset($videos[$slug]['embed_url']) ? $videos[$slug]['embed_url'] : $fallback;
}

function gumlet_video_thumbnail($slug, $fallback = '') {
    static $videos = null;
    if ($videos === null) {
        $mapFile = __DIR__ . '/../assets/data/gumlet-video-map.json';
        $data = file_exists($mapFile) ? json_decode(file_get_contents($mapFile), true) : [];
        $videos = isset($data['slugs']) && is_array($data['slugs']) ? $data['slugs'] : [];
    }
    return isset($videos[$slug]['thumbnail']) && $videos[$slug]['thumbnail'] ? $videos[$slug]['thumbnail'] : $fallback;
}
