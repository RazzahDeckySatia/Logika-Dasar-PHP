<?php
    $nilai = array(
        "Matematika" => 87,
        "Bahasa Inggris" => 85,
        "Bahasa Indonesia" => 87
    );
    
    $nilai_peserta = array(
        "Matematika" => 85, 
        "Bahasa Inggris" => 85, 
        "Bahasa Indonesia" => 85 
    );
    
    $terpenuhi = true;
    foreach ($nilai as $mata_pelajaran => $nilai_minimum) {
        if ($nilai_peserta[$mata_pelajaran] < $nilai_minimum) {
            $terpenuhi = false;
            break;
        }
    }
    
    if ($terpenuhi) {
        $rata_rata = array_sum($nilai_peserta) / count($nilai_peserta);
        if ($rata_rata < 85) {
            $terpenuhi = false;
        }
    }
    
    if ($terpenuhi) {
        echo "Peserta dinyatakan Diterima.";
    } else {
        echo "Peserta tidak memenuhi syarat.";
    }
    
?>