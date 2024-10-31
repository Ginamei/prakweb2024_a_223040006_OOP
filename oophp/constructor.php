<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    

    public function getlabel(){
        return "$this->judul, $this->penerbit ";
    }

}

$Produk1 = new Produk("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000);
$Produk2 = new Produk("Boruto", "Ukyo Kodachi", "viz Merdia", 25000);
$Produk3 = new Produk("Dragon ball");


echo "komik : " . $Produk1->getlabel();
echo "<br>";
echo "Game :" . $Produk2->getlabel();
echo "<br>";
var_dump($Produk3);
?>