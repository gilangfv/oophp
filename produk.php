<?php 

class Produk {
	public $judul = "judul",
			$penulis,
			$penerbit,
			$harga;

	public function sayHello(){
		return "hellow world";
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk();
$produk1->judul = "conan";
$produk1->penulis = "mashasi";
$produk1->penerbit = "shonen jump";
$produk1->harga = 50000;





$produk2 = new Produk();
$produk2->judul = "naruto";
$produk2->penulis = "mashasiinoto";
$produk2->penerbit = "shonen jumpu";
$produk2->harga = 50000;

echo $produk1->getLabel();
echo "<hr>";
echo $produk2->getLabel();

 ?>