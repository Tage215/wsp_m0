<!doctype html>
<html>
<head lang="sv"></head>
<body>

<?php include("header.html");?>

<h1>Matematik-test</h1>
<form action="result.php" method="post">
   <fieldset>
       <legend>Frågor</legend>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="text" name="q2">
       <br>
       <label>2 x 5 = </label>
       <input type="text" name="q3">
       <br>
       <label>3 x 6 = </label>
       <input type="text" name="q4">
       <br>
       <label>1 x 5 = </label>
       <input type="text" name="q5">
       <br><br>
       <label>Namn: </label>
       <input type="text" name="name">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<form action="currency.php" method="post">
    <fieldset>
        <legend>Valutakonverterare</legend>
        <label>Ange ett belopp i dollar</label>
        <input type="text" name="currency">
        <input type="submit" value="konvertera till SEK">
    </fieldset>
</form>

<form action="pension.php" method="post">
    <fieldset>
        <legend>Tid kvar till pensionen</legend>
        <label>Namn</label>
        <input type="text" name="name">
        <br>
        <label>Ålder</label>
        <input type="text" name="age">
        <input type="submit" value="Beräkna">
    </fieldset>
</form>

<form action="calculate.php" method="post">
    <fieldset>
       <legend>Kalkylator</legend>
       <input type="number" name="n1"> +
       <input type="number" name="n2">
       <br>
       <input type="submit" value="Beräkna">
    </fieldset>
</form>

<form action="get.php" method="get">
    <fieldset>
       <legend>Skickar länk</legend>
       <label>Namn</label>
       <br>
       <input type="text" name="name">
       <label>Ålder</label>
       <input type="text" name="år">
       <br>
       <input type="submit" value="skicka">
    </fieldset>
</form>


<?php include("footer.html");?>

</body>
</html>