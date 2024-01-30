<?php
// Buatlah sebuah selisih fungsi yang akan membandingkan dua buah string nama. Lalu, menampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya

function bandingkanNama($nama1, $nama2) {
    
    
    $nama1TanpaSpasi = str_replace(' ', '', $nama1);
    $nama2TanpaSpasi = str_replace(' ', '', $nama2);

    $panjangNama1 = strlen($nama1TanpaSpasi);
    $panjangNama2 = strlen($nama2TanpaSpasi);

    $selisih = abs($panjangNama1 - $panjangNama2);

    if ($panjangNama1 > $panjangNama2) {
        echo "$nama1 lebih panjang dari $nama2 dengan selisih : $selisih karakter.\n";
    } else if ($panjangNama1 < $panjangNama2) {
        echo "$nama2 lebih panjang dari $nama1 dengan selisih : $selisih karakter.\n";
    } else {
        echo "Kedua nama memiliki panjang yang sama.\n";
    }
}

bandingkanNama("Razzah Decky Satia", "Muhamad Farhanudin");
?>
