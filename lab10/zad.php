<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../template/styles.css">
</head>
<?php
include("../template/table.php");

function zad1(){
    if(isset($_POST['reset'])){
        $_COOKIE['visits'] = 0;
        header("Location:zad1/redirect.php");
    }

    if(!isset($_COOKIE['visits'])) {
        setcookie('visits', 0);
        header("Refresh:0");
    } else{
        setcookie('visits', $_COOKIE['visits']+1);
    }
    echo $_COOKIE['visits'];

    if($_COOKIE['visits'] > 5){
        echo "<br>ponad 5 odwiedzin!!!";
    }

    echo "<form method='post'><input type='submit' value='reset' name='reset'> </form>";
}

function zad2(){
    include("zad2/zad2.php");
}

function zad3(){
    include("zad3/zad3.php");
}
?>
<body>
<?php
    table("zad 1", "zad1");
    table("zad 2", "zad2");
?>
</body>
</html>