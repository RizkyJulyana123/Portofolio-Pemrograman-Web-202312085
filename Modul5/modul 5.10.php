<?php

// Contoh dari soal
$level_user = "admin";
switch ($level_user) {
    case "admin":
        echo "Selamat datang, Administrator!" . PHP_EOL;
        break;
    case "editor":
        echo "Selamat datang, Editor!" . PHP_EOL;
        break;
    default:
        echo "Selamat datang, Pengguna!" . PHP_EOL;
}

echo PHP_EOL; // Baris kosong untuk pemisah

// Latihan Praktikum - Membuat switch statement untuk ukuran baju
$ukuran_baju = "M"; // Anda bisa mengubah nilai ini ke "S", "L", atau "XL"

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran baju Anda adalah Small (Kecil)." . PHP_EOL;
        break;
    case "M":
        echo "Ukuran baju Anda adalah Medium (Sedang)." . PHP_EOL;
        break;
    case "L":
        echo "Ukuran baju Anda adalah Large (Besar)." . PHP_EOL;
        break;
    case "XL":
        echo "Ukuran baju Anda adalah Extra Large (Ekstra Besar)." . PHP_EOL;
        break;
    default:
        echo "Ukuran baju tidak dikenal." . PHP_EOL;
}
?>