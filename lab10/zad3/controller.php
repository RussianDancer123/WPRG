<?php
if(isset($_POST['submit3'])) {
    $loginTest = "admin";
    $passwordTest = "admin123";

    $login = $_POST['login'];
    $password = $_POST['password'];

    $_SESSION['logged'] = ($login == $loginTest && $password == $passwordTest);
}elseif(isset($_POST['logout3'])) {
    $_SESSION['logged'] = false;
    unset($_SESSION['logged']);
}
?>