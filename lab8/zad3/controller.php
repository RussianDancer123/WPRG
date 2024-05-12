<?php
if(isset($_POST['submit'])){
    echo "<hr>";
    $a = $_POST['text'];
    if($a==""){
        echo "Puste pole";
        return;
    }

    switch($_POST['option']){
        case 0:
            echo strrev($a);
            break;
        case 1:
            echo strtoupper($a);
            break;
        case 2:
            echo strtolower($a);
            break;
        case 3:
            echo strlen($a);
            break;
        case 4:
            echo trim($a);
            break;
    }
}
?>