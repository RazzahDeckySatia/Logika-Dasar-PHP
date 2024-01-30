<?php
    $total_belanja = 180000;
    $potongan = 0;
    
    if ($total_belanja > 100000) {
        $potongan = 10000;
    }
    
    $total_bayar = $total_belanja - $potongan;
    echo "Total yang harus dibayar oleh Andi adalah: " . $total_bayar;
    
?>  