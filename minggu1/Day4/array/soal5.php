<?php 
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$gabungan = array_merge($bil1, $bil2);

$unik = array_unique($gabungan);

rsort($unik); 

echo "Hasil penggabungan dan pengurutan: ";
echo implode(', ', $unik);

  