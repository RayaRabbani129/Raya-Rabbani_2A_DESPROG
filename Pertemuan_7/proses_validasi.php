<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Tampilkan hasil validasi
    if (!empty($errors)) {
        // Jika ada kesalahan validasi
        echo "<h3>Kesalahan Validasi:</h3>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "<h3>Data berhasil dikirim:</h3>";
        echo "Nama = " . htmlspecialchars($nama) . "<br>";
        echo "Email = " . htmlspecialchars($email);
    }
}
?>