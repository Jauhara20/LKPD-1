<?php

// Menentukan jumlah baris dan kolom untuk pola
$rows = 4;
$cols = 8;

// Loop untuk mencetak pola pertama
for ($i = 1; $i < $rows; $i++) {
    // Loop untuk mencetak bintang dalam satu baris
    for ($j = 0; $j < $cols; $j++) {
        echo "*";
    } 
    // Pindah ke baris berikutnya setelah mencetak satu baris bintang
    echo "<br>";
}

// Menambahkan baris kosong di antara dua pola
echo "<br>";

// Loop untuk mencetak pola kedua (sama dengan pola pertama)
for ($i = 1; $i < $rows; $i++) {
    // Loop untuk mencetak bintang dalam satu baris
    for ($j = 0; $j < $cols; $j++) {
        echo "*";
    } 
    // Pindah ke baris berikutnya setelah mencetak satu baris bintang
    echo "<br>";
}

?>
