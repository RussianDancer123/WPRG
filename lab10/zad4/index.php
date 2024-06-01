<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    include('controller.php');

    if(!isset($_SESSION['logged']) || !$_SESSION['logged']){
        include('login.php');
    }elseif($_SESSION['logged']){
        echo "zalogowano
            <form method='post' action='index.php'>
                <input type='submit' name='logout' value='wyloguj'>
            </form>";
    }
?>
</body>
</html>