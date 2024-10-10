<?php

// membuat string teks
$teks = "selamat ulang tahun yang ke-17!";

// Mencari semua karakter non-alfanumerik 
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

// Mengecek apakah ada hasil pencocokan
if (!empty($matches[0])) {
    // Mengambil simbol-simbol unik dari hasil pencocokan
    $uniqueSymbols = array_unique($matches[0]);
    
    // Menyusun pesan dengan simbol-simbol yang ditemukan
    // Menggabungkan elemen array $uniqueSymbols menjadi string dengan koma sebagai pemisah
    echo "Karakter yang terdapat pada kalimat: " . implode(', ', $uniqueSymbols);
} else {
    // Jika tidak ada simbol yang ditemukan, tampilkan ini
    echo "Tidak terdapat simbol pada kalimat.";
}
?>
