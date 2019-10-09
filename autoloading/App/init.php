<?php 
// require_once 'Produk/Komik.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/cetakInfo.php';



spl_autoload_register( function( $class ){
	require_once 'Produk/'. $class . '.php';
});

 ?>