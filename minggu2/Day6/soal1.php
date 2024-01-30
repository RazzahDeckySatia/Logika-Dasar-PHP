<?php

// buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima. Data yang dikiirm berbentuk string nama nama jurusan. jika nama jurusan adalah yang dipanggil duplikat, maka yang akan dimasukkan ke array hanya salah satunya saja (capslok).
// contoh pemganggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan array ["PPLG", "HTL", "KLN", "PMN"]

function createArray(...$jurusan) {
    $result = array_map('strtoupper', $jurusan);
    return array_unique($result);
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>