<?php

$jumlah_item1 = $_POST['jumlah_item1'];
$jumlah_item2 = $_POST['jumlah_item2'];
$jumlah_item3 = $_POST['jumlah_item3'];
$jumlah_item4 = $_POST['jumlah_item4'];

$total_harga_item1 = $jumlah_item1 * 10000000;
$total_harga_item2 = $jumlah_item2 * 2500000;
$total_harga_item3 = $jumlah_item3 * 200000;
$total_harga_item4 = $jumlah_item4 * 220000;
$total_harga = $total_harga_item1 + $total_harga_item2;

echo "Total harga: Rp" . number_format($total_harga, 0, ",", ".");
?>
