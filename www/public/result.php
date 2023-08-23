<!doctype html>
<html>
<body>
<?php
    $points = 0;
    $a1 = $_POST["q1"];
    $a2 = $_POST["q2"];
    $a3 = $_POST["q3"];
    $a4 = $_POST["q4"];
    $a5 = $_POST["q5"];

    if($a1 == 9)
        $points++;
    if($a1 == 15)
        $points++;
    if($a1 == 10)
        $points++;
    if($a1 == 18)
        $points++;
    if($a1 == 5)
        $points++;
    
    print("du fick $points av 5 möjliga");

?>
<body>
<html>