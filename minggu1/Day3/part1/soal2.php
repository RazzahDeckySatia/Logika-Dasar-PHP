<?php
// Setiap orang memiliki IMT dan kategori IMT nya masing masing
// Berikut kategori IMT :
//     - Kurang dari 18.5 : Berat Badan kurang
//     - Dari 18.5 sampai kurang dari 22.9 : Normal
//     - Dari 22.9 sampai kurang dari 24.9 : Berat badan lebih
//     - Lebih dari dan sama dengan 25 : Obesitas
// jika beni memiliki berat badan 44kg dengan tinggi badan 148 cm,termasuk kedalam kategori apakah beni
$berat = 45;
$tinggi = 148 / 100;

$imt = $berat / ($tinggi * $tinggi); // ngitung IMT

if ($imt < 18.5) {
    $kategori = "Berat badan kurang";
} elseif ($imt < 22.9) {
    $kategori = "Normal";
} elseif ($imt < 24.9) {
    $kategori = "Berat badan lebih";
} else {
    $kategori = "Obesitas";
}

echo "IMT Beni adalah " . round($imt, 2) . " dan termasuk dalam kategori '" . $kategori . "'.";
?>

