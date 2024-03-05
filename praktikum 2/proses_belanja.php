<?php
//tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

//harga produk
$harga = [
    'tv' => 4200000,
    'kulkas' => 3100000,
    'mesin cuci' =>3800000
];

//menghitung harga
$total = $jumlah * $harga[$produk];

//format harga
$total = number_format($total);

//tangkap hasil form
echo "Nama Customer: $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: $total";