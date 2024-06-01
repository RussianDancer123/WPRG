<?php
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $f = fopen("users", "c+");

        $emailRegistered = false;
        while(($line = fgets($f)) !== false){
            $arr = explode(';', $line);

            if($arr[2]==$email) {
                $emailRegistered = true;
                break;
            }
        }

        if(!$emailRegistered) {
            fseek($f, 0, SEEK_END);
            fwrite($f, $name . ";" . $surname . ";" . $email . ";" . $password . "\n");
            echo "Zarejestrowano";
        }else{
            echo "Email jest juz zarejestrowany";
        }

        fclose($f);
    }

    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $f = fopen("users", "r");

        while(($line = fgets($f)) !== false){
            $arr = explode(';', $line);

            if(strcmp($arr[0], $name) && strcmp($arr[1], $surname) && strcmp($arr[2], $email) && strcmp($arr[3], $password)) {
                $_SESSION['logged']=true;
                break;
            }
        }
        fclose($f);
    }

    if(isset($_POST['logout'])){
        $_SESSION['logged']=false;
        unset($_SESSION['logged']);
    }
?>