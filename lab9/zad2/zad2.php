<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="zad1/styles.css">
</head>
<body>
<div id="main">
    <form method="post">
        <label>sciezka: <input type="text" name="path"></label><br>
        <label>katalog: <input type="text" name="dir"></label><br>
        <label>operacja: <select name="option">
            <option>read</option>
            <option>delete</option>
            <option>create</option>
            </select></label><br>
        <input type="submit" name="submit">
    </form>
    <?php
    include("controller.php");
    ?>
</div>
</body>
</html>