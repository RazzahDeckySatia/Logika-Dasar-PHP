<?php
$angka = "22";
if (is_int($angka)) { 
    echo $angka . " merupakan bilangan";
} else if (is_string($angka)) {
    echo '"' . $angka . '" merupakan teks';
}
