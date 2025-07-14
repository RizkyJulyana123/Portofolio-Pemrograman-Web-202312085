<?php

// 1. Praktikkan contoh kode di atas
$nama_mahasiswa = "Abadi Nugroho";
$semester = 3;
echo "Selamat datang, " . $nama_mahasiswa . ". Anda sekarang berada di semester " . $semester . ".";

// Baris kosong untuk pemisah jika diinginkan, namun jika output benar-benar minim, ini bisa dihapus juga
echo PHP_EOL;

// 2. Buat dua variabel untuk menyimpan panjang dan lebar, lalu hitung dan tampilkan luasnya.
$panjang = 10; // Contoh nilai panjang
$lebar = 5;    // Contoh nilai lebar

$luas = $panjang * $lebar;

// Hanya menampilkan nilai luas, tanpa label "Panjang:", "Lebar:", "Luasnya adalah:"
echo $luas;

?>