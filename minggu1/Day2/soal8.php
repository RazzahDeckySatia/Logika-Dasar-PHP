<?php
// suatu rumah produksi yang memiliki jam kerja 8 jam. Jika pegawai bekerja melebihi jam kerja berhak mendapatkan kompensasi berupa Rp. 50.000 di satu jam pertama dan Rp. 25.000 di jam berikutnya

// jika dani bekerja dari jam 8 pagi lalu pulang di pukul 10 malam, berapakah kompensasi yang akan diterima Dani

$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

$jamMulai = 8;
$jamSelesai = 22;

$jumlahJam = $jamSelesai - $jamMulai;

if ($jumlahJam > $jamNormal) {
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

    if ($jumlahJamKompensasi == 1) {
        $kompensasiAwal = $kompensasiSatu;
    } else {
        $kompensasi = (($jumlahJamKompensasi - 1)* $kompensasiDua) * $kompensasiSatu;
    }

    echo "Jumlah Kompensasi : " . $kompensasi;

} else {
    echo "Tidak mendapat kompensasi : " . $kompensasi;
}