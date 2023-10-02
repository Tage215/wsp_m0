<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Pension</title>
</head>
<body>
<h1>År kvar till pensionen</h1>
<?php
    $age = $_POST['age'];
    $yearsLeft = 65 - $age;

    $name = $_POST['name'];

    print"$name du har $yearsLeft år kvar till pensionen";
?>
</body>
</html>

