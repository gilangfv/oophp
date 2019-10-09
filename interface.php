<?php 

interface InfoProduk{
	public function getInfoLengkap();
}

abstract class Produk {
	protected $judul ,
			$penulis,
			$penerbit,
			$diskon,
 			$harga;



	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}

	public function setJudul($judul){
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

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

	abstract public function getInfo();

	
}

class Komik extends Produk implements InfoProduk {
	public $halaman;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $halaman = 0 ){
		parent::__construct($judul , $penulis  , $penerbit  , $harga );

		$this->halaman = $halaman;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} Rp.{$this->harga}";
		return $str;
	}

	
	public function getInfoLengkap(){
		$str = "Komik : ". $this->getInfo(). " - {$this->halaman} halaman";
		return $str;
	}
}

class Game extends Produk implements InfoProduk{

	public $waktuMain;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit = "penerbit" , $harga = 0, $waktuMain = 0 ){
		parent::__construct($judul , $penulis  , $penerbit  , $harga );

		$this->waktuMain = $waktuMain;
	}

	
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} Rp.{$this->harga}";
		return $str;
	}


	public function getInfoLengkap(){
		$str = "Game : ". $this->getInfo(). " - {$this->waktuMain} jam";
		return $str;
	}
}

class cetakInfo{
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str.="- {$p->getInfoLengkap()} <br>";
		}
		return $str;
	}
}

$produk1 = new Komik("naruto" , "mashashido", "shonen jump" , 40000 , 100 );
$produk2 = new Game("Dota" , "ozfrog", "steam" , 50000, 50);

$cetakProduk = new cetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();



 ?>