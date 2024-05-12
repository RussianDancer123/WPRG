<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../template/styles.css" />

</head>
<?php
include("../template/table.php");
function zad1()
{
    $array = array("Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid",
        "Sweden" => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia" => "Tallin",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malta" => "Valetta",
        "Austria" => "Vienna",
        "Poland" => "Warsaw");

    asort($array);

    foreach($array as $country => $capital){
        echo "The capital of ".$country." is ".$capital."<br>";
    }
}

function zad2($array, $n){
    $n--;
    if($n < 0 || $n > count($array)-1){
        echo "Blad";
        return;
    }

    $array[$n] = "$";
    foreach($array as $a) echo "$a ";
}

function zad3($a, $b, $c, $d){
    $array = array();
    for($i = $a; $i <= $b; $i++){
        $array[$i] = $c;
        if($c<$d) $c++;
    }
    print_r($array);
}

function zad4(){
    include("zad4.html");
}

function zad5(){
    include("zad5/zad5.php");
}
?>
<body>
    <?php
        table("zad 1", "zad1");
        table("zad 2", "zad2", array(array(2, 4, 1, 5, 7, 1, 2, 5), 7));
        table("zad 3", "zad3", array(2, 7, 3, 7));
        table("zad 4", "zad4");
        table("zad 5", "zad5");
    ?>
</body>
</html>