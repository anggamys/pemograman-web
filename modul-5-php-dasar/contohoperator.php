<?php
$jumlah_barang = 35;
$harga_satuan = 5000;
$terjual = 30;

$total_pendapatan = $terjual * $harga_satuan;
$sisa_barang = $jumlah_barang - $terjual;

echo "Jumlah barang: $jumlah_barang <br>";
echo "Terjual: $terjual <br>";
echo "Total Pendapatan: $total_pendapatan <br>";
echo "Sisa Barang: $sisa_barang <br>";
