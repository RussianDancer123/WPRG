<?php
include("NoweAuto.php");
include("AutoZDodatkami.php");
include("Ubezpieczenie.php");

$n = new NoweAuto();
$a = new AutoZDodatkami();
$u = new Ubezpieczenie();

$n->setModelAuta("BMW");
$n->setPrice(200);
$n->setExchangeRate(0.25);

echo $n->ObliczCene()."<br>";

$a->setModelAuta("BMW");
$a->setPrice(200);
$a->setExchangeRate(0.25);
$a->setAlarm(200);
$a->setRadio(200);
$a->setKlimatyzacja(200);
echo $a->ObliczCene()."<br>";

$u->setModelAuta("BMW");
$u->setPrice(200);
$u->setExchangeRate(0.25);
$u->setAlarm(200);
$u->setRadio(200);
$u->setKlimatyzacja(200);
$u->setWartoscUbezpieczenia(20);
$u->setIloscLat(5);
echo $u->ObliczCene();