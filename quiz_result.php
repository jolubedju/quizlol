
<?php
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];

$answer6 = $_POST['question-6-answers'];

$answer7 = $_POST['question-7-answers'];

$answer8 = $_POST['question-8-answers'];

$answer9 = $_POST['question-9-answers'];

$answer10 = $_POST['question-10-answers'];

$answer11 = $_POST['question-11-answers'];

$answer12 = $_POST['question-12-answers'];

$answer13 = $_POST['question-13-answers'];

$answer14 = $_POST['question-14-answers'];

$answer15 = $_POST['question-15-answers'];

$answer16 = $_POST['question-16-answers'];

$answer17 = $_POST['question-17-answers'];

$answer18 = $_POST['question-18-answers'];

$answer19 = $_POST['question-19-answers'];

$answer20 = $_POST['question-20-answers'];

$answer21 = $_POST['question-21-answers'];

$answer22 = $_POST['question-22-answers'];


$totalCorrect = 0;

if ($answer1 == "C") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "D") { $totalCorrect++; }

if ($answer4 == "E") { $totalCorrect++; }

if ($answer5 == "A") { $totalCorrect++; }

if ($answer6 == "C") { $totalCorrect++; }

if ($answer7 == "D") { $totalCorrect++; }

if ($answer8 == "D") { $totalCorrect++; }

if ($answer9 == "E") { $totalCorrect++; }

if ($answer10 == "E") { $totalCorrect++; }

if ($answer11 == "D") { $totalCorrect++; }

if ($answer12 == "B") { $totalCorrect++; }

if ($answer13 == "D") { $totalCorrect++; }

if ($answer14 == "B") { $totalCorrect++; }

if ($answer15 == "E") { $totalCorrect++; }

if ($answer16 == "C") { $totalCorrect++; }

if ($answer17 == "D") { $totalCorrect++; }

if ($answer18 == "C") { $totalCorrect++; }

if ($answer19 == "D") { $totalCorrect++; }

if ($answer20 == "C") { $totalCorrect++; }

if ($answer21 == "B") { $totalCorrect++; }

if ($answer22 == "C") { $totalCorrect++; }


echo "<div id='results'>$totalCorrect / 22 correct</div>";

?>