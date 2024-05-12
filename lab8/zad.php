<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../template/styles.css">
</head>
<?php
include("../template/table.php");

function zad1($a){
    echo strtoupper($a)."<br>";
    echo strtolower($a)."<br>";
    echo ucfirst(strtolower($a))."<br>";
    echo ucwords(strtolower($a))."<br>";
}

function zad2($a){
    $pattern = ".[\\\/:*?\"<>|+-].";
    echo preg_replace($pattern, "", $a);
}

function zad3(){
    include("zad3/zad3.php");
}

function zad4($a){
    $tmp = preg_replace(".[aeiou].", "", $a);
    echo "samogloski: ".(strlen($a)-strlen($tmp));
}

function zad5($a){
    echo strlen(preg_filter("(.*\.)", "", $a))." po przecinku";
}
?>
<body>
<?php
    table("zad 1", "zad1", array("ala ma Kota, koT ma ale"));
    table("zad 2", "zad2", array("d\\/:?\"w<>|+-awd"));
    table("zad 3", "zad3");
    table("zad 4", "zad4", array("abcdefghijkl"));
    table("zad 5", "zad5", array("4345.63"));
?>
</body>
</html>