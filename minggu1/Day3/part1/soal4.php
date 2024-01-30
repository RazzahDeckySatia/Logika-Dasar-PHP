<?php
// Dani ingin membangun rumah di suatu komplek perumahan dengan panjang tanah 13 meter 
// dan lebar tanah 9 meter. Tetapi sebelum membangun rumah, Dani harus memberikan laporan
// terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan.
// Dengan luas tanah yg dia punya, masuk ke kategori manakah rumah Dani nantinya.
//     - Tipe 36 : <90 m2
//     - Tipe 45 : 90 - 96 m2
//     - Tipe 54 : 96 - 120 m2
//     - Tipe 60 : 120 - 150 m2
//     - Tipe 70 : >150 m2 

function tipe_rumah($panjang, $lebar) {
    $luas = $panjang * $lebar;
    if ($luas < 90) {
        return 'Tipe 36';
    } elseif ($luas >= 90 && $luas < 96) {
        return 'Tipe 45';
    } elseif ($luas >= 96 && $luas < 120) {
        return 'Tipe 54';
    } elseif ($luas >= 120 && $luas < 150) {
        return 'Tipe 60';
    } else {
        return 'Tipe 70';
    }
}

$panjang = 13;
$lebar = 9;

$tipe = tipe_rumah($panjang, $lebar);
echo "Dengan luas tanah yang dimiliki, rumah Dani masuk ke dalam kategori: " . $tipe;
?>
