<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../template/styles.css" />
</head>
<?php
include("../template/table.php");
function zad1($a, $b) {
    if($a > $b){
        $tmp = $a;
        $a = $b;
        $b = $tmp;
    }

    for($i = $a; $i <= $b; $i++) {
        echo $i;
    }
}

function zad2($a, $b, $c) {
    echo "pierwszy wyraz ciagu: ".$a."<br>";
    echo "roznica/iloraz ciagu: ".$b."<br>";
    echo "liczba elementow ciagu: ".$c."<br>";

    $sum = 0;
    for($i = 0; $i < $c; $i++) {
        $sum += $a + $i*$b;
    }
    echo "ciag arytmetyczny: ".$sum."<br>";
    $sum = 0;
    for($i = 0; $i < $c; $i++) {
        $sum += $a * pow($b, $i);
    }
    echo "ciag geometryczny: ".$sum;

}

function zad3($tab1, $tab2) {
    $tabRes = array();
    $r1 = count($tab1);
    $c1 = count($tab1[0]);
    $c2 = count($tab2[0]);

    for($i = 0; $i < $r1; $i++){
        for($j = 0; $j < $c2; $j++){
            $tabRes[$i][$j] = 0;
            for($k = 0; $k < $c1; $k++){
                $tabRes[$i][$j] += $tab1[$i][$k] * $tab2[$k][$j];
            }
        }
    }

    echo "<table>";
    foreach($tabRes as $tab) {
        echo "<tr>";
        foreach($tab as $t) {
            echo "<td>".$t."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function zad4($n) {
    echo $n." ";
    while($n >= 10){
        $tmp = str_split($n);
        $sum = 0;
        for($i = 0; $i < count($tmp); $i++){
            $sum += (int)$tmp[$i];
        }
        $n = $sum;
        echo $n. " ";
    }
}

function zad5($str) {
    //asci 97 - 122
    $str = strtolower($str);
    $tab = array_fill(0, 27, 0);

    $str = str_split($str);
    foreach($str as $ch){
        $tab[ord($ch)-97] = 1;
    }

    $res = "true";
    for($i = 0; $i < 26; $i++){
        if($tab[$i]==0)
            $res = "false";
    }

    echo $res;

}
?>
<body>
<?php
    table("zad 1", "zad1", array(1, 5));
    table("zad 2", "zad2", array(5, 5, 3));
    table("zad 3", "zad3", array(array(array(1, 2), array(4, 5), array(7, 8)), array(array(1, 2, 3), array(4, 5, 6))));
    table("zad 4", "zad4", array(199));
    table("zad 5", "zad5", array("The quick brown fox jumps over the lazy dog"));
    table("zad 5", "zad5", array("abc"));
?>
</body>
</html>