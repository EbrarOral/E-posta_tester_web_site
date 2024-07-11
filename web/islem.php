<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $answers = [
        'q1' => 'correct',
        'q2' => 'correct',
        'q3' => 'correct',
        'q4' => 'correct',
        'q5' => 'correct',
        'q6' => 'correct',
        'q7' => 'correct',
        'q8' => 'correct',
        'q9' => 'correct',
        'q10' => 'correct',
        'q11' => 'correct',
    ];

    $score = 0;
    $totalQuestions = count($answers);
    $wrongAnswers = [];

    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question])) {
            if ($_POST[$question] == $correctAnswer) {
                $score++;
            } else {
                $wrongAnswers[] = $question;
            }
        } else {
            $wrongAnswers[] = $question;
        }
    }

    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Quiz Results</title>
        <style>
            .wrong {
                color: red;
            }
            #results {
                margin-top: 20px;
                font-size: 1.2em;
                color: #333;
            }
        </style>
    </head>
    <body bgcolor='#faebd7'>
   
    <h1>Quiz Results</h1>";

    foreach ($wrongAnswers as $wrongAnswer) {
        echo "<div class='wrong'>You answered question {$wrongAnswer} incorrectly.</div>";
    }

    echo "<div id='results'>Your score: {$score}/{$totalQuestions}</div>
    <a href='NKG.html'>Try Again</a>
</div>
        
    </body>
    </html>";
}
?>