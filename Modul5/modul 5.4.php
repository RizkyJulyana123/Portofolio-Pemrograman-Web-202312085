<?php
// Tipe Data: String
$nama_siswa = "Budi Santoso";
echo "Variabel \$nama_siswa:\n";
var_dump($nama_siswa);
echo "\n";

// Tipe Data: Integer
$jumlah_barang = 150;
echo "Variabel \$jumlah_barang:\n";
var_dump($jumlah_barang);
echo "\n";

// Tipe Data: Float (atau Double)
$tinggi_badan = 175.5;
echo "Variabel \$tinggi_badan:\n";
var_dump($tinggi_badan);
echo "\n";

// Tipe Data: Boolean
$sudah_menikah = false;
echo "Variabel \$sudah_menikah:\n";
var_dump($sudah_menikah);
echo "\n";

// Tipe Data: Array
$daftar_nilai = array(85, 90, 78, 92);
echo "Variabel \$daftar_nilai:\n";
var_dump($daftar_nilai);
echo "\n";

// Tipe Data: Null
$variabel_null = null;
echo "Variabel \$variabel_null:\n";
var_dump($variabel_null);
echo "\n";

// Tipe Data: Object (contoh sederhana)
class Kucing {
    public $nama = "Kitty";
    public $warna = "Oren";
}
$kucing_saya = new Kucing();
echo "Variabel \$kucing_saya:\n";
var_dump($kucing_saya);
echo "\n";

?>