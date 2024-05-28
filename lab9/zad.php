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
    include("zad1/zad1.php");
}

function zad2(){
    include("zad2/zad2.php");
}

function zad3($file){
    $f = fopen($file, "c+");
    $counter = ($tmp = fgets($f))==""?1:(int)$tmp+1;
    rewind($f);
    ftruncate($f, 0);
    fwrite($f, $counter);
    rewind($f);
    echo fgets($f);
    fclose($f);
}

function zad4(){
    echo "<div>";
    include("zad4/zad4.php");
    if(isset($_POST['submit4'])) createLink($_POST['link'], $_POST['dsc']);
    $f = fopen("./files/links", "r");
    while($line = fgets($f)){
        $arr = explode(";", $line);
        table($arr[0], "eho", array($arr[1]));
    }
    echo "</div>";
}

function createLink($link, $dsc){
    unset($_POST['submit4']);
    $f = fopen("./files/links", "a");
    fwrite($f, $link.";".$dsc."\n");
    fclose($f);
}

function eho($a){
    echo $a;
}

function zad5(){
    $f = fopen("./files/ip", "r");
    while($line = fgets($f)){
        if($line == $_SERVER['REMOTE_ADDR']){
            header('Location: '.'./zad1/zad1.php');
        }
    }
    fclose($f);
    echo "adres ip: ".$_SERVER['REMOTE_ADDR'];
}

?>
<body>
<?php
    table("zad 1", "zad1");
    table("zad 2", "zad2");
    table("zad 3", "zad3", array("./files/counter"));
    table("zad 4", "zad4");
    table("zad 5", "zad5");
?>
</body>
</html>