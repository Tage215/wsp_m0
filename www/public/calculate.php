<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Kalkylator</title>
</head>
<body>
<h1>Kalkylator</h1>
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $sum = $n1 + $n2;

    print"$n1 + $n2 = $sum";
?>
</body>
</html>

