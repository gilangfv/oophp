<?php 

class Produk {
	public $judul = "judul",
			$penulis,
			$penerbit;


	protected $diskon;


	private $harga;



	

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
			
			

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

	public function getInfoLengkap(){
		$str = "{$this->judul} | {$this->getLabel()} Rp.{$this->harga}";
		return $str;
	}

}

class Komik extends Produk{
	public $halaman;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $halaman = 0 ){
		parent::__construct($judul , $penulis  , $penerbit  , $harga );

		$this->halaman = $halaman;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getInfoLengkap(){
		$str = "Komik : ". parent::getInfoLengkap(). " - {$this->halaman} halaman";
		return $str;
	}
}

class Game extends Produk{

	public $waktuMain;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $waktuMain = 0 ){
		parent::__construct($judul , $penulis  , $penerbit  , $harga );

		$this->waktuMain = $waktuMain;
	}

	


	public function getInfoLengkap(){
		$str = "Game : ". parent::getInfoLengkap(). " - {$this->waktuMain} jam";
		return $str;
	}
}

class cetakInfo{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} Rp.{$produk->harga}";
		return $str;
	}
}

$produk1 = new Komik("naruto" , "mashashido", "shonen jump" , 40000 , 100 );
$produk2 = new Game("Dota" , "ozfrog", "steam" , 50000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();

 ?>