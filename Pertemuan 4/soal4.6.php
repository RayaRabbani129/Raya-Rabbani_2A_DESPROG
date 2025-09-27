<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$total = 0;
$nilaiTersisa = array_slice($nilaiSiswa, 2, -2);

foreach($nilaiTersisa as $nilai){
    $total += $nilai;
}

$rataRata = $total / count($nilaiTersisa);

echo "Daftar nilai setelah dibuang 2 terendah & 2 tertinggi:<br>";
foreach($nilaiTersisa as $nilai){
    echo $nilai . "<br>";
}

echo "<br>Total nilai: $total <br>";
echo "Rata-rata: $rataRata";
?>