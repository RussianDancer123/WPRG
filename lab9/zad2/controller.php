<?php

    function isdir($path){
        if(!is_dir($path)){
            exit("katalog nie istnieje");
        }
    }

    if(isset($_POST['submit'])){
        unset($_POST['submit']);

        $path = $_POST['path'];
        $dir = $_POST['dir'];
        $option = $_POST['option'];
        if(!str_ends_with($path, '/')){
            exit("podano zla sciezke");
        }

        echo $path.$dir." ".$option."<br>";

        switch($option){
            case 'read':
                isdir($path.$dir);
                $arr = scandir($path.$dir);
                foreach($arr as $f){
                    if($f != "." && $f != ".."){
                        echo $f."<br>";
                    }
                }
                break;
                case 'delete':
                    isdir($path.$dir);
                    if(count(scandir($path.$dir))==2 && rmdir($path.$dir)){
                        echo "katalog usuniety";
                    }else{
                        echo "blad";
                    }
                    break;
            case 'create':
                isdir($path);
                if(mkdir($path.$dir)){
                    echo "katalog stworzony";
                }else{
                    echo "blad";
                }
                break;

        }
    }
?>