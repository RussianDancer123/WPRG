<?php
if(isset($_POST)){
    echo "<hr>";
    if(isset($_POST['simple'])){
        $a = (int)$_POST['var1'];
        $b = (int)$_POST['var2'];
        switch($_POST['simple_operation']){
            case 'add':
                echo $a." + ".$b." = ".($a + $b);
                break;
            case 'subtract':
                echo $a." - ".$b." = ".($a - $b);
                break;
            case 'multiply':
                echo $a." * ".$b." = ".($a * $b);
                break;
            case 'divide':
                echo $a." / ".$b." = ".($a / $b);
                break;
        }
    }else if(isset($_POST["advance"])){
        $a = $_POST['advance_var']==""?0:$_POST['advance_var'];
        switch($_POST['advance_operation']){
            case 'cos':
                echo "cosinus ".$a." = ".cos(deg2rad($a));
                break;
            case 'sin':
                echo "sinus ".$a." = ".sin(deg2rad($a));
                break;
            case 'tg':
                echo "tangens ".$a." = ".tan(deg2rad($a));
                break;
            case 'bintodec':
                echo "binarne na dziesietne ".$a." = ".bindec($a);
                break;
            case 'dectobin':
                echo "dziesietne na binarne ".$a." = ".decbin($a);
                break;
            case 'dectohex':
                echo "dziesietne na szesnastkowe ".$a." = ".dechex($a);
                break;
            case 'hextodec':
                echo "szesnastkowe na dziesietne ".$a." = ".hexdec($a);
                break;
        }
    }
}
?>