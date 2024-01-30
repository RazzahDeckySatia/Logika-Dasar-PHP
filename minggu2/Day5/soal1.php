<?php
function formatIDN($date){
    $convert = array(
        'Mon' => 'Senin', 
        'Tue' => 'Selasa', 
        'Wed' => 'Rabu',
         'Thu' =>'Kamis', 
         'Fri' => 'Jumat', 
         'Sat' => 'Sabtu', 
         'Sun' => 'Minggu',
    );
    return strtr ($date, $convert);
}
$date = date('D, d M Y');
echo $date;
echo " vs ";
echo formatIDN($date);
?>