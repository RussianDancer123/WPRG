<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
    if(isset($_POST['submit2'])){
        setcookie("answered", "true", time() + 360 * 24);
        unset($_POST['submit2']);
        header("Refresh:0");
    }
?>
<body>
<?php
    if(!isset($_COOKIE['answered'])){
        include("quiz.html");
    }else{
        echo "<h1>odpowiedz zostala udzielona</h1>";
        //unset cookie
        //setcookie("answered", "", -1);
    }
?>
</body>
</html>