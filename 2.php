<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembayaran</title>
</head>
<body>

<h2>Form Pembelian</h2>
<form method="post" action="">
    <!-- Input buat total pembelian pake  number -->
    <label for="pembelian">Total Pembelian (Rp):</label>
    <input type="number" id="pembelian" name="pembelian" required>
    <br><br>
    
    <!-- untuk memilih hari -->
    <label for="day">Pilih Hari:</label>
    <select id="day" name="day" required>
        <option value="Monday">Senin</option>
        <option value="Tuesday">Selasa</option>
        <option value="Wednesday">Rabu</option>
        <option value="Thursday">Kamis</option>
        <option value="Friday">Jumat</option>
        <option value="Saturday">Sabtu</option>
        <option value="Sunday">Minggu</option>
    </select>
    <br><br>
    
    
    <input type="submit" value="Hitung">
</form>

</body>
</html>

<?php

// Memeriksa apakah formulir dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai total pembelian dari formulir
    $pembelian = $_POST['pembelian'];
    
    // Mengambil nilai hari dari formulir
    $day = $_POST['day'];

    // Variabel untuk menyimpan total pembayaran akhir
    $totalBayar = 0;

    // Diskon 7% 
    if ($pembelian > 100000) {
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
    } else {
        $totalBayar = $pembelian;
    }

    // Diskon tambahan 5%
    if ($day == "Tuesday") {
        $totalBayar = $totalBayar - ($totalBayar * 5 / 100);
    }

    
    echo "Hari: " . $day . "<br>";
    
    
    echo "Total Belanja: Rp " . $pembelian . "<br>";
    
    
    echo "Total yang Harus Dibayar: Rp " . $totalBayar;
}

?>
