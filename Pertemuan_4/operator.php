<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a + $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br>";
echo "Hasil Penjumlahan a + b = $hasilTambah <br>";
echo "Hasil Pengurangan a - b = $hasilKurang <br>";
echo "Hasil Perkalian a * b = $hasilKali <br>";
echo "Hasil Pembagian a / b = $hasilBagi <br>";
echo "Hasil Sisa Bagi a % b = $sisaBagi <br>";
echo "Hasil Pangkat a ** b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b ? " . ($hasilSama ? "true" : "false") . "<br>";
echo "Apakah a != b ? " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Apakah a < b ? "  . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Apakah a > b ? "  . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Apakah a <= b ? " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Apakah a >= b ? " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil a AND b = " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil a OR b = " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil NOT a = " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil NOT b = " . ($hasilNotB ? "true" : "false") . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Setelah a += b, nilai a = $a <br>";
echo "Setelah a -= b, nilai a = $a <br>";
echo "Setelah a *= b, nilai a = $a <br>";
echo "Setelah a /= b, nilai a = $a <br>";
echo "Setelah a %= b, nilai a = $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a === b ? " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Apakah a !== b ? " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
?>