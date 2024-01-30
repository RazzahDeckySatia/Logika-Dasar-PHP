<?php

// Rumah Makan Beni mengdakan program diskon sebesar 5% tiap pembelian hari selasa. Dan setiap pembelian diatas 100.000 mendapat diskon sebesar 7%.
// Hitunglah uang yang harus dibayar jika total pembelian 130.000 di hari ini

$total_pembelian = 130000;
$diskon = 0;

$hari_pembelian = "Selasa"; 

if ($hari_pembelian == "Selasa") {
    $diskon += 5; //5% = 6500
}

if ($total_pembelian > 100000) {
    $diskon += 7; //7% = 9100
}

$total_bayar = $total_pembelian - ($total_pembelian * $diskon / 100);
echo "Total yang harus dibayar adalah: " . $total_bayar;