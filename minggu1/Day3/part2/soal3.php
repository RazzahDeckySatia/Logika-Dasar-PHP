<?php
// Predikat terhadap hasil ujian diberikan ketika
// - Mendapatkan predikat A jika nilai lebih dari 90
// - Mendapatkan predikat B jika nilai lebih dari 75
// - Selain itu mendapatkan preddikat C

$nilai = 91;

$predikat = ($nilai >= 90) ? 'A' : 
            (($nilai >= 75) ? 'B' : 'C');
 echo "Predikat: $predikat";