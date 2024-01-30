<?php
// Buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
// contoh : 140500
// Lembar rupiah
// - Rp. 100.000 : 1
// - Rp. 20.000 : 2
//  - Rp. 500 : 1

function rupiah($number) {
    $matauang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    $hasil = [];

    foreach ($matauang as $Rp) {
        $count = floor($number / $Rp);
        if ($count > 0) {
            $hasil[] = [
                'Rupiah' => $Rp,
                'count' => $count
            ];
            $number %= $count * $Rp;
        }
    }

    return $hasil;
}

$hasil = rupiah(170500);

echo "Jumlah pecahan : <br>";
foreach ($hasil as $item) {
    echo "Rp. " . number_format($item['Rupiah'], 0, '.', '.') . " = " . $item['count'] ." " . "<br>" . "\n";
}
?>

