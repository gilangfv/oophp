<?php 

require_once 'App/init.php';




$produk1 = new Komik("naruto" , "mashashido", "shonen jump" , 40000 , 100 );
$produk2 = new Game("Dota" , "ozfrog", "steam" , 50000, 50);

$cetakProduk = new cetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

 ?>