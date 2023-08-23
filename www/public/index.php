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
       <br>
       <label>Namn: </label>
       <input type="text" name="name">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<form action="currency.php" method="post">
    <fieldset>
        <label>Antal dollar: </label>
        <input type="text" name="currency">
        <br>
        <input type="submit" value="Rätta">
    </fieldset>
</form>


<?php include("footer.html");?>

</body>
</html>