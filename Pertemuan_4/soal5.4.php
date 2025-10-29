<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0; 
$jumlahSiswa = 0; 
foreach ($daftarNilai as $nilai){ 
    $totalNilai += $nilai[1]; 
    $jumlahSiswa++; 
}
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata kelas: $rataRata <br>"; 
echo "Daftar siswa dengan nilai di atas rata-rata:<br>"; 
foreach ($daftarNilai as $siswa){
    if ($siswa[1] > $rataRata) {
        echo $siswa[0] . " : " . $siswa[1] . "<br>"; 
        }
}
?>