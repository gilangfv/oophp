<?php 

class Produk {
	public $judul = "judul",
			$penulis,
			$penerbit,
			$harga;


	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0){
		$this->judul =$judul;
		$this->penulis =$penulis;
		$this->penerbit =$penerbit;
		$this->harga =$harga;
		
	}

	public function sayHello(){
		return "hellow world";
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk("naruto" , "mashashido", "shonen jump" , 40000);
$produk2 = new Produk("fairy tail" , "mashashi", "shonen jump" , 50000);
echo $produk1->getLabel();
echo "<hr>";
echo $produk2->getLabel();

 ?>