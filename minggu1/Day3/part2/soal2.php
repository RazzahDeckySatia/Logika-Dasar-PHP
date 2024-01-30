<?php
// jika hari ini adalah hari senin maka hari ini upacara jika hari ini bukan hari senin maka hari ini tidak upacara. (Ambil tanggal  hari ini secara otomatis)

$hari = date('l');

$pesan = ($hari == 'Monday') ? 'Hari ini upacara' : 'Hari ini tidak upacara';

echo $pesan;
?>