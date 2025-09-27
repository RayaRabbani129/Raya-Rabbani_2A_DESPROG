<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";

$benar = true;
$salah = false;
echo "Variabel benar = $benar <br>";
echo "Varibel salah + $salah <br>";

//mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WEBSITEKU.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . "<br>";
echo "Situs ini berdiri sejak tahun " . TAHUN_PENDIRIAN . "<br>";
?>