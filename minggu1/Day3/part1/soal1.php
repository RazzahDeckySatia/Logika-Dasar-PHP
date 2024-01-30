<?php
// Waktu tidur yang baik untuk anak usia 6-12 adalah 10 jam. untuk usia 12-18 adalah 8-9. untuk usia 18-40 adalah 7-8 jam. apabila seseorang berusia 17 tahun berapa waktu tidur yang baik?

$usia = 6;
$waktuTidur = "";

if ($usia >= 6 && $usia < 12) {
    $waktuTidur = "10 jam";
} elseif ($usia >= 12 && $usia < 18) {
    $waktuTidur = "8-9 jam";
} elseif ($usia >= 18 && $usia <= 40) {
    $waktuTidur = "7-8 jam";
} else {
    $waktuTidur = "Usia tidak dalam rentang yang ditentukan";
}

echo "Waktu tidur yang baik untuk usia " . $usia . " tahun adalah " . $waktuTidur;
?>
