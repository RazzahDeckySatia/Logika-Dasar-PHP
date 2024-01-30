<?php

// buatlah sebuah fungsi yang akan menerima data array berikut, serta angka yang dicari. Misalnya ingin mencari

$data = [80, 90, 75, 100, 85, 100, 66];

function searchNUmber($angkaYangDicari, ...$data) {
    $jumlah = 0;
    foreach ($data as $key => $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1;
        }
    }

    return $jumlah;
}

$angkaYangDicari = 100;
echo "jumlah angka $angkaYangDicari = " . searchNUmber($angkaYangDicari, 100, 20, 40, 80, 100);
echo "<br>";
$angkaYangDicari = 80;
echo "jumlah angka $angkaYangDicari = " . searchNUmber($angkaYangDicari2, 100, 20, 40, 80, 100);