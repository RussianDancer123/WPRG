<?php
if(isset($_GET['submit'])){
    setlocale(LC_ALL, 'pl_PL.UTF-8');
    $date = $_GET['date'];
    if(!isset($_SESSION['date']) || $_SESSION['date'] != $date){
        $_SESSION['date'] = $date;
        header("Refresh:0");
    }
    if(empty($date)) return;
    echo "dzien tygodnia: " . date('l', strtotime($date)) ."<br>";
    echo "wiek: " . date_diff(date_create($date), date_create())->format("%Y") ."<br>";

    $today = date_create();
    $birth = date_create($date);

    $birth = date_create($today->format('Y'.'-'.$birth->format('m-d')));
    $diff = $today->diff($birth);
    $days = $diff->days;
    if($diff->invert)
        $days = 365-$days;
    echo "ilosc dni do najblizszych, przyszlych urodzin: ".$days;
}
?>