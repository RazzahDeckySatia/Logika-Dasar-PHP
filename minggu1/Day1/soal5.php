<?php
$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

if(is_float($hasil)) {
    $hasil = round($hasil);
}

echo "Hasil: " . $hasil;
?>
