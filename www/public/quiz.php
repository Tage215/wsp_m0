<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Quiz</title>
</head>
<body>
<h1>Resultat</h1>
<?php
    $points = 0;
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];

    if($q1 == 'php')
        $points++;
    if($q2 == 'js')
        $points++;
    if($q3 == 'bu')
        $points++;
    if($q4 == 'ork')
        $points++;
    if($q5 == 'a2')
        $points++;
    if($q6 == 'en')
        $points++;

    print"Du fick $points poäng";
    <br>
    if($points < 3)
        print"Läs på mer och försök igen";
    else if($points < 5)
        print"Godkänd";
    else
        print"Bra jobbat";
?>
</body>
</html>

