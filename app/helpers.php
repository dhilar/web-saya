<?php

// Helper untuk mendapatkan ID video dari URL YouTube
function getYouTubeId($url) {
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    return $params['v'] ?? null;
}

// Helper untuk format harga
function formatRupiah($number) {
    return 'Rp ' . number_format($number, 0, ',', '.');
}
