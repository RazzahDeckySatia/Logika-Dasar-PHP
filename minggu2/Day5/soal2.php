<?php
function formatNumber($number) {
    if ($number < 1000000){
        echo $number/1000 . " K";
    }elseif ($number >= 1000000){
        echo $number/1000000 . " M";
    }
}
formatNumber(5000);
echo "<br>";
formatNumber(1700000);
?>