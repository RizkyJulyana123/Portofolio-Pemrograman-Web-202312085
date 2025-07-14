<?php

// b. Contoh Kode File: functions.php

// Definisi fungsi hitung_diskon
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}

// Penggunaan fungsi hitung_diskon
$harga_baju = 150000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 10); // Diskon 10%
echo "Harga akhir: Rp " . $harga_setelah_diskon . "<br>";

echo "<br>"; // Baris kosong untuk pemisah

// c. Latihan Praktikum
// Buat fungsi sapa($nama, $waktu) yang menampilkan pesan seperti "Selamat Pagi, Budi!".

function sapa($nama, $waktu) {
    echo "Selamat " . $waktu . ", " . $nama . "!" . "<br>";
}

// Contoh penggunaan fungsi sapa
sapa("Budi", "Pagi"); // Output: Selamat Pagi, Budi!
sapa("Ani", "Siang"); // Output: Selamat Siang, Ani!
sapa("Joko", "Sore"); // Output: Selamat Sore, Joko!
sapa("Susi", "Malam"); // Output: Selamat Malam, Susi!

?>