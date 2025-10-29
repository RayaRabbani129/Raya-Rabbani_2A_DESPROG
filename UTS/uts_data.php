<?php
$quizData = [
    // Soal 1
    [
        'question' => 'Bahasa yang digunakan untuk interaksi sisi klien (client-side) pada web adalah?',
        'options' => ['PHP', 'Python', 'Java', 'JavaScript'],
        'answer' => 'JavaScript'
    ],
    // Soal 2
    [
        'question' => 'Teknologi mana yang bertugas mengatur tampilan visual dan layout?',
        'options' => ['HTML', 'CSS', 'JavaScript', 'SQL'],
        'answer' => 'CSS'
    ],
    // Soal 3
    [
        'question' => 'Tag utama yang digunakan untuk membuat struktur halaman web adalah?',
        'options' => ['style', 'script', 'body', 'php'],
        'answer' => 'body'
    ]
];

//ketika js mengirim data ke file php
if (isset($_POST['submit_quiz'])) {
    
    header('Content-Type: application/json');
    
    $correctCount = 0;
    $totalQuestions = count($quizData);
    $userAnswers = $_POST['answers'] ?? []; 
    $results = []; 

    foreach ($quizData as $index => $item) {
        $userAnswer = $userAnswers[$index] ?? null;
        $correctAnswer = $item['answer'];
        $isCorrect = ($userAnswer === $correctAnswer);

        if ($isCorrect) {
            $correctCount++;
        }
        
        //mengelompokkan hasil jawaban dari soal
        $results[$index] = [
            'question' => $item['question'],
            'user_answer' => $userAnswer,
            'correct_answer' => $correctAnswer,
            'is_correct' => $isCorrect
        ];
    }

    $score = ($correctCount / $totalQuestions) * 100;

    $response = [
        'success' => true,
        'correct_count' => $correctCount,
        'total_questions' => $totalQuestions,
        'score' => round($score),
        'results_detail' => $results, 
    ];

    echo json_encode($response);
    exit; 
}
?>
