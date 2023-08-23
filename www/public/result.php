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
    if($a2 == 15)
        $points++;
    if($a3 == 10)
        $points++;
    if($a4 == 18)
        $points++;
    if($a5 == 5)
        $points++;
    
    print("du fick $points av 5 möjliga");

?>
<body>
<html>