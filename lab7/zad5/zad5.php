<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" type="text/css" href="zad5/styles.css" />
</head>
<body>
<div id="main">
    <h2>Kalkulator</h2>
    <hr>
    <h3>Prosty</h3>
    <form method="post">
        <input type="text" name="var1">
        <select name="simple_operation">
            <option value="add">Dodawanie</option>
            <option value="subtract">Odejmowanie</option>
            <option value="multiply">Mnozenie</option>
            <option value="divide">Dzielenie</option>
        </select>
        <input type="text" name="var2"><br>
        <input type="submit" value="Oblicz" name="simple" class="submit">
        <hr>
        <input type="text" name="advance_var">
        <select name="advance_operation">
            <option value="cos">Cosinus</option>
            <option value="sin">Sinus</option>
            <option value="tg">Tangens</option>
            <option value="bintodec">Binarne na dziesietne</option>
            <option value="dectobin">Dziesietne na binarne</option>
            <option value="dectohex">Dziesietne na szesnastkowe</option>
            <option value="hextodec">Szesnastkowe na dziesietne</option>
        </select><br>
        <input type="submit" value="Oblicz" name="advance" class="submit">
    </form>
    <?php
    include("controller.php");
    ?>
</div>
</body>
</html>