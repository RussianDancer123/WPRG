<?php
if(!isset($_COOKIE["PHPSESSID"]))
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        if(isset($_POST['submit3'])) include("controller.php");
        elseif(isset($_POST['logout'])) include("controller.php");

        if(isset($_SESSION['logged']) && $_SESSION['logged'])
            include("logged.php");
        elseif(!isset($_POST['submit3']))
            include("form.html");
        else
            echo "Blad logowania <br><form><input type='submit' value='powrot'></form>"
    ?>
</body>
</html>