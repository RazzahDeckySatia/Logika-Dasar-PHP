<?php
// Menu di Rumah Makan Beni
//     - Nasi Goreng = 15000
//     - Ayam Bakar = 20000
//     - Nasi Kebuli = 25000
//     - Aneka Jus = 8000
//     - Es Teh Manis = 3000
//     - Es Jeruk = 5000
//   Rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar 
// 5% dihari jumat dan 2% dihari senin. Hitunglah harga yang harus dibayar jika Dani 
// ingin membeli 2 Nasi Kebuli, 1 Ayam Bakar, 2 Nasi Goreng (Gunakan hari secara otomatis 
// dari hari ini)

function hitung_harga($hari, $menu, $pesanan) {
    $diskon = array('Jumat' => 0.05, 'Senin' => 0.02);
    $total = 0;

    if (isset($pesanan['Nasi Kebuli'])) {
        $total += $menu['Nasi Kebuli'] * $pesanan['Nasi Kebuli'];
    }
    if (isset($pesanan['Ayam Bakar'])) {
        $total += $menu['Ayam Bakar'] * $pesanan['Ayam Bakar'];
    }
    if (isset($pesanan['Nasi Goreng'])) {
        $total += $menu['Nasi Goreng'] * $pesanan['Nasi Goreng'];
    }

    return $total * (1 - (isset($diskon[$hari]) ? $diskon[$hari] : 0));
}

$menu = array(
    'Nasi Goreng' => 15000,
    'Ayam Bakar' => 20000,
    'Nasi Kebuli' => 25000,
    'Aneka Jus' => 8000,
    'Es Teh Manis' => 3000,
    'Es Jeruk' => 5000
);

$pesanan = array(
    'Nasi Kebuli' => 2,
    'Ayam Bakar' => 1,
    'Nasi Goreng' => 2
);

$hari = 'Senin'; 

$total = hitung_harga($hari, $menu, $pesanan);
echo "Total harga yang harus dibayar oleh Dani adalah: " . $total;
?>
