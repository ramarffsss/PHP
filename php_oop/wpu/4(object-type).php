<?php 
//Jualan Produk
//Komik
//Game
class Produk{
 public $judul="judul",
        $penulis="Rama Fajar",
        $penerbit="INFORMATIKA",
        $harga=0;
 
 // public function sayHello(){
 // 	return "Hello world";
 // }
 public function __construct($judul, $penulis, $penerbit, $harga){
      $this->judul=$judul;
      $this->penulis=$penulis;
      $this->penerbit=$penerbit;
      $this->harga=$harga;
 }
 public function getLabel(){
 	return "$this->judul, $this->penulis, $this->penerbit";
 }
}
class CetakInfoProduk{
	public function cetak(Produk $produk ){
		$str="{$produk->judul} | {$produk->getLabel()}  (Rp.{$produk->harga})";
	    return $str;
	}
}
$produk1=new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2=new Produk("Uncharted","Neil Druckman","Sony Computer",250000);
// echo "Komik ".$produk1->getLabel();
// echo "<br>";
// echo "Game ".$produk2->getLabel();
$infoProduk=new CetakInfoProduk();
echo $infoProduk->cetak($produk1);
?>
