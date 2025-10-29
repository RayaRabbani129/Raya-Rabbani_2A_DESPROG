<?php
require_once 'uts_data.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kuis Online TI2A</title>
    <link rel="stylesheet" href="uts.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Kuis Online Desain Pemrograman</h1>
        <p class="subtitle">Oleh Raya Rabbani A</p>

        <form id="quiz-form">
            <?php foreach ($quizData as $index => $item): ?>
                <div class="question-block" data-qindex="<?php echo $index; ?>">
                    <p><strong>Soal <?php echo $index + 1; ?>:</strong> <?php echo htmlspecialchars($item['question']); ?></p>
                    <div class="options">
                        <?php foreach ($item['options'] as $option): ?>
                            <label>
                                <input type="radio" 
                                       name="question_<?php echo $index; ?>" 
                                       value="<?php echo htmlspecialchars($option); ?>"
                                       >
                                <?php echo htmlspecialchars($option); ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <button type="submit" id="submit-btn">Selesai & Hitung Skor</button>
        </form>

        <div id="result">
            </div>
    </div>

    <script src="script.js"></script>
</body>
</html>