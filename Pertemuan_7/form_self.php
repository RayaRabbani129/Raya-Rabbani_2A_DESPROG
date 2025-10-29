<!DOCTYPE html>
<html>
<head>
    <tittle>Form Input PHP</tittle>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    //Inisialisasi variabel
    $namaErr = "";
    $nama = "";

    //cel apakah sudah di submit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //validasi nama
        if(empty($_POST["nama"])){
            $namaErr = "Nama harus diisi!";
        }else{
            $nama = $_POST["nama"];
            echo "Data berhasil disimpamn!";
        }
    }
    ?>
    <from method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input typ="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>