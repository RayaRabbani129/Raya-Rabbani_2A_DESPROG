//inisiasi form
$(document).ready(function() {
    const $quizForm = $('#quiz-form');
    const $resultDiv = $('#result');
    const $submitBtn = $('#submit-btn');

    $quizForm.on('submit', function(e) {
        e.preventDefault(); 

        let userAnswers = {};
        let allAnswered = true;
        
        $('.question-block').each(function() {
            const index = $(this).data('qindex');
            const selectedOption = $(`input[name="question_${index}"]:checked`);
            
            if (selectedOption.length === 0) {
                allAnswered = false;
                return false; 
            }
            userAnswers[index] = selectedOption.val();
        });

        if (!allAnswered) {
            alert("Mohon jawab semua pertanyaan sebelum menyelesaikan kuis.");
            return;
        }

        $submitBtn.prop('disabled', true).text('Menghitung Skor...');
        
        //melempar data dari form ke file php
        $.ajax({
            url: 'uts_data.php', 
            type: 'POST',
            dataType: 'json',
            data: {
                submit_quiz: true, 
                answers: userAnswers
            },
            success: function(response) {
                if (response.success) {
                    const htmlResult = `
                        <h2>Hasil Kuis Anda</h2>
                        <p>Total Soal: <strong>${response.total_questions}</strong></p>
                        <p>Jawaban Benar: <strong>${response.correct_count}</strong></p>
                        <p class="score-final">Skor Akhir: <span>${response.score}</span></p>
                        <hr>
                        <h4>Rincian Jawaban:</h4>
                        <ul class="detail-list">
                            ${Object.keys(response.results_detail).map(index => {
                                const detail = response.results_detail[index];
                                const statusClass = detail.is_correct ? 'correct' : 'incorrect';
                                const statusText = detail.is_correct ? 'Benar' : 'Salah';
                                return `
                                    <li class="${statusClass}">
                                        <strong>Soal ${parseInt(index) + 1}:</strong> ${detail.question}<br>
                                        Jawaban Anda: <em>${detail.user_answer}</em> (${statusText})<br>
                                        Jawaban Benar: <em>${detail.correct_answer}</em>
                                    </li>
                                `;
                            }).join('')}
                        </ul>
                    `;
                    $resultDiv.html(htmlResult).show();
                    $quizForm.hide(); 
                } else {
                    alert('Terjadi kesalahan saat menghitung skor.');
                    $submitBtn.prop('disabled', false).text('Selesai & Hitung Skor');
                }
            },
            error: function() {
                alert('Gagal terhubung ke server untuk menghitung skor.');
                $submitBtn.prop('disabled', false).text('Selesai & Hitung Skor');
            }
        });
    });
});