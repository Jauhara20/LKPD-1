<?php  
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];  
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];  

// Menggabungkan kedua nilai jadi satu nilai yang lebih besar
$combinedBills = array_merge($bill1, $bill2);  

// Mengurutkan array gabungan dari yang terbesar ke terkecil
rsort($combinedBills);  

// Menampilkan hasil
echo "Hasil: ";  
// Menggabungkan elemen array menjadi string dengan pemisah koma
echo implode(", ", $combinedBills); 
// Baris kosong untuk format output
echo "";  
?>  
