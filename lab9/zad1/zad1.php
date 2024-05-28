<?php session_start(); ?>
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
    <form method="get">
        <label>Data urodzin: <input type="date" name="date" value= <?php echo !empty($_SESSION['date'])?$_SESSION['date']:"";?>></label><br>
        <input type="submit" name="submit">
    </form>
    <?php
    include("controller.php");
    ?>
</div>
</body>
</html>