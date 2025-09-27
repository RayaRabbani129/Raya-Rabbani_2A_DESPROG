<?php
$harga = 120000;
$diskon = 0;
$hargaAkhir = $harga - $diskon;

if($harga > 100000){
    $diskon = 0.2 * $harga;
}

echo "Harga awal: Rp $harga <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga yang harus dibayar: Rp $hargaAkhir";
?>