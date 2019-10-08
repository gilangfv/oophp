<?php 

class Produk {
	public $judul = "judul",
			$penulis,
			$penerbit,
			$harga,
			$halaman,
			$waktuMain,
			$tipe;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $halaman=0, $waktuMain = 0 , $tipe = "tipe"){
		$this->judul =$judul;
		$this->penulis =$penulis;
		$this->penerbit =$penerbit;
		$this->harga =$harga;
		$this->halaman = $halaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
		
	}

	public function sayHello(){
		return "hellow world";
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp.{$this->harga}";
		if ($this->tipe == "komik") {
			$str.= "- {$this->halaman} halaman.";
		} else if ($this->tipe == "game"){
			$str.= "- {$this->waktuMain} jam.";
		}
		return $str;
	}

}



class cetakInfo{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} Rp.{$produk->harga}";
		return $str;
	}
}

$produk1 = new Produk("naruto" , "mashashido", "shonen jump" , 40000 , 100 , 0, "komik");
$produk2 = new Produk("Dota" , "ozfrog", "steam" , 50000, 0 , 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


 ?>