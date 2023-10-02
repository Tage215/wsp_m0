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
       <input type="text" name="age">
       <br>
       <input type="submit" value="skicka">
    </fieldset>
</form>

<form action="quiz.php" method="post">
    <legend>Quiz</legend>
    <label>I vilket språk programmerar vi i på kursen?<br>    
        <input type="radio" name="q1" value="php">PHP<br>
        <input type="radio" name="q1" value="asp">ASP<br>
        <input type="radio" name="q1" value="jsp">JSP<br><br>
    </label>
    <label>Vilket språk är ett klientskriptspråk<br>  
        <input type="radio" name="q2" value="jsp">JSP<br>
        <input type="radio" name="q2" value="js">JavaScript<br>
        <input type="radio" name="q2" value="basic">Basic<br><br>
    </label>
    <label>Vilket är det bästa landet<br>  
        <input type="radio" name="q3" value="us">USA<br>
        <input type="radio" name="q3" value="no">Norge<br>
        <input type="radio" name="q3" value="bu">Bulgarien<br><br>
    </label>
    <label>Vilken är Sveriges bästa storstad<br>  
        <input type="radio" name="q4" value="ork">Örkelljunga<br>
        <input type="radio" name="q4" value="mal">Malmö<br>
        <input type="radio" name="q4" value="sto">Stockholm<br><br>
    </label>
    <label>Fråga 5<br>  
        <input type="radio" name="q5" value="a1">Alternativ 1<br>
        <input type="radio" name="q5" value="a2">Alternativ 2<br>
        <input type="radio" name="q5" value="a3">Alternativ3<br><br>
    </label>
    <label>Hur mycket knark äter Dino<br>  
        <input type="radio" name="q6" value="10">10g<br>
        <input type="radio" name="q6" value="en">En knark<br>
        <input type="radio" name="q6" value="700">700g<br><br>
    </label>

    <input type="submit" value="Skicka" />
</form>


<?php include("footer.html");?>

</body>
</html>