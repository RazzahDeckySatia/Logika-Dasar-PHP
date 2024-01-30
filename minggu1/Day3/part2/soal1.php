<?php
// ubah pukul 19.00 menjadi pukul 07.00 pm dan ubah pukul 23.45 menjadi pukul 11.45 pm, pukjul 08.55 menjadi pukul 08.55 am

$waktu1 = '24.55';

$jam = substr($waktu, 0, 2);
$waktu = substr($waktu, 3, 2);

$jam1 = ($jam < 12) ? 'AM' : 'PM';

$jam = ($jam > 12) ? $jam - 12 : $jam;

$hasil = "$jam:menit $jam1";

echo "$hasil";
?>