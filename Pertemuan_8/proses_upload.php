<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/"; // Diubah menjadi folder 'images'

// Validasi Ekstensi dan Ukuran
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5 * 1024 * 1024; // Maksimal 5 MB per gambar

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    // Izin 0777 diberikan untuk kemudahan, ubah ke izin yang lebih ketat di lingkungan produksi.
    mkdir($targetDirectory, 0777, true); 
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $uploadedCount = 0;

    echo "<h3>Hasil Unggahan Gambar:</h3>";

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]); // Gunakan basename untuk keamanan
        $targetFile = $targetDirectory . $fileName;
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        
        // Dapatkan ekstensi file
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // --- Mulai Validasi Gambar ---
        if (!in_array($fileType, $allowedExtensions)) {
            echo "File **$fileName** gagal: Jenis file ($fileType) tidak diizinkan. Hanya JPG, PNG, GIF.<br>";
            continue; // Lanjut ke file berikutnya
        }
        
        if ($fileSize > $maxsize) {
            echo "File **$fileName** gagal: Ukuran file melebihi batas 5 MB.<br>";
            continue; // Lanjut ke file berikutnya
        }
        
        // Cek jika file sudah ada (opsional: tambahkan penamaan unik jika perlu)
        if (file_exists($targetFile)) {
             echo "File **$fileName** gagal: File sudah ada.<br>";
             continue;
        }

        // --- Akhir Validasi Gambar ---

        // Pindahkan file yang divalidasi ke direktori penyimpanan
        if (move_uploaded_file($fileTmpName, $targetFile)) {
            echo "File **$fileName** berhasil diunggah. <br>";
            $uploadedCount++;
        } else {
            echo "Gagal mengunggah file **$fileName** (Error Server).<br>";
        }
    }
    
    echo "<br>Total $uploadedCount dari $totalFiles gambar berhasil diunggah.";

} else {
    echo "Tidak ada file yang diunggah.";
}
?>