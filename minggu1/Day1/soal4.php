<?php
    $tahun_lahir = 2000;
    $tahun_sekarang = date("2024");

    $selisih_tahun = $tahun_sekarang - $tahun_lahir;

    if ($selisih_tahun >= 17) {
        echo "Tahun kelahiran $tahun_lahir sudah dapat memeiliki KTP, usia sekarang = $selisih_tahun";
    } else {
        echo "Tahun kelahiran $tahun_lahir belum dapat memiliki KTP, usia sekarang = $selisih_tahun";
    }
?>