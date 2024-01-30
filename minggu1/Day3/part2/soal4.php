<?php
// Persentase kehadiran setiap siswa dalam satu bulan adalah 100%.
// - Sakit & Izin berkurang 3%;
// - Alfa berkurang 5%;
// - Hadir tidak berkurang

$stuasi= 100;

$presentase = ($stuasi == 'sakit' || $stuasi == 'izin') ? 100 - 3 :
              (($stuasi == 'alfa') ? 100 - 5 : 100);
              echo $presentase;
?>