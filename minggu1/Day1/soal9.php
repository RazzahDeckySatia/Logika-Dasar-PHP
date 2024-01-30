<?php
$variabel = -5;

if(is_int($variabel)) {
    if($variabel > 0) {
        echo "Variabel adalah bilangan bulat positif.";
    } else if($variabel < 0) {
        echo "Variabel adalah bilangan bulat negatif.";
    } else {
        echo "Variabel adalah nol.";
    }
} else {
    echo "Variabel bukan bilangan bulat.";
}

$kelipatan = 3; 
if($variabel % $kelipatan == 0) {
    echo "Variabel adalah kelipatan dari " . $kelipatan . ".";
} else {
    echo "Variabel bukan kelipatan dari " . $kelipatan . ".";
}
?>
