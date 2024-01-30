<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
// $kompeten = [];
// $belumKompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten : ";
echo implode(', ', $kompeten). "<br>";

echo "Kelompok Belum Kompeten:";
echo implode(', ', $belumKompeten) . "<br>";

?>