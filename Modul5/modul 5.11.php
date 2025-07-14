<?php

// b. Contoh Kode File: loops.php

// 1. Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

echo "<br>"; // Baris kosong untuk pemisah

// 2. Perulangan while
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: " . $angka . "<br>";
    $angka--;
}

echo "<br>"; // Baris kosong untuk pemisah

// c. Latihan Praktikum
// Gunakan foreach untuk menampilkan semua elemen dari sebuah array.

$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

echo "Daftar Buah:<br>";
foreach ($buah as $nama_buah) {
    echo "- " . $nama_buah . "<br>";
}

?>