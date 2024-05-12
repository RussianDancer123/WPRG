<?php
function table($label, $zad, $arg = array()){
    echo "<div class=zad>";
        echo "<label>".$label."</label>";
        call_user_func_array($zad, $arg);
    echo "</div>";
}
?>