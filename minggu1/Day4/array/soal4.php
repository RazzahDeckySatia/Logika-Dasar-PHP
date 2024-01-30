<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokSama = [];
$kelompokTidakSama = [];

foreach ($bil1 as $bilangan1) {
    foreach ($bil2 as $bilangan2) {
        if ($bilangan1 == $bilangan2) {
            $kelompokSama[] = $bilangan1;
        }
    }
}

$gabungan = array_intersect($bil1, $bil2);
$kelompokTidakSama = array_diff($gabungan, $kelompokSama);

echo "Kelompok Pertama (Bilangan yang sama): ";
echo implode(', ', $kelompokSama) . "<br>";

echo " Kelompok Kedua (Bilangan yang tidak sama): ";
echo implode(', ', $kelompokTidakSama) . "<br>";

?>