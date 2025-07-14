<?php

// Buat indexed array berisi nama teman sekelas
$teman_sekelas = [
    "Dewi Lestari",
    "Andi Wijaya",
    "Siti Rahayu",
    "Budi Santoso",
    "Citra Kirana"
];

echo "<h2>Daftar Nama Teman Sekelas:</h2>";
echo "<ul>"; // Mulai daftar tak berurutan (unordered list) HTML

// Lakukan perulangan melalui array indexed menggunakan foreach
foreach ($teman_sekelas as $nama) {
    echo "<li>" . $nama . "</li>"; // Tampilkan setiap nama sebagai item daftar
}

echo "</ul>"; // Akhiri daftar tak berurutan HTML

?>