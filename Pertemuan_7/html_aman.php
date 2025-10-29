<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form action="" method="POST">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        $input = $_POST['input'] ?? '';
        $email = $_POST['email'] ?? '';

        echo "<hr><h3>Hasil Pemrosesan:</h3>";
        $safe_input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            echo "Email valid': $email <br>";
        } else {
            echo "Email 'tidak valid'. Format email salah. <br>"; 
        }
        echo "Input (Aman): $safe_input <br>";
        echo "Email (Mentah): $email <br>";
    }
    ?>
</body>
</html>