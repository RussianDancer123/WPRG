<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="zad3/styles.css">
</head>
<body>
    <div id="main">
        <form method="post">
            <input type="text" name="text">
            <select name="option">
                <option value="0">Odwrocenie</option>
                <option value="1">Zamiana na wielkie</option>
                <option value="2">Zamiana na male</option>
                <option value="3">Ilosc znakow</option>
                <option value="4">Usuniecie znakow bialych</option>
            </select><br>
            <input type="submit" value="Wykonaj" name="submit">
        </form>
        <?php
        include("controller.php");
        ?>
    </div>
</body>
</html>