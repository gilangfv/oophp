<?php 

class Produk {
	public $judul = "judul",
			$penulis,
			$penerbit,
			$harga,
			$halaman,
			$waktuMain;
			

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $halaman=0, $waktuMain = 0 ){
		$this->judul =$judul;
		$this->penulis =$penulis;
		$this->penerbit =$penerbit;
		$this->harga =$harga;
		$this->halaman = $halaman;
		$this->waktuMain = $waktuMain;
	}

	public function sayHello(){
		return "hellow world";
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp.{$this->harga}";
		return $str;
	}

}

class Komik extends Produk{
	public function getInfoLengkap(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} Rp.{$this->harga} - {$this->halaman} halaman";
		return $str;
	}
}

class Game extends Produk{
	public function getInfoLengkap(){
		$str = "Game : {$this->judul} | {$this->getLabel()} Rp.{$this->harga} - {$this->waktuMain} jam";
		return $str;
	}
}

class cetakInfo{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} Rp.{$produk->harga}";
		return $str;
	}
}

$produk1 = new Komik("naruto" , "mashashido", "shonen jump" , 40000 , 100 , 0);
$produk2 = new Game("Dota" , "ozfrog", "steam" , 50000, 0 , 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


 ?>