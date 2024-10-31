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
        return "$this->penulis, $this->penerbit ";
    }

}

class cetakInfoProduk {
    public function cetak( Produk $Produk) {
        $str = "{$Produk->judul} | {$Produk->getlabel()} (Rp. {$Produk->harga})";
        return $str;
    }
}

$Produk1 = new Produk("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000);
$Produk2 = new Produk("Boruto", "Ukyo Kodachi", "viz Merdia", 25000);



echo "komik : " . $Produk1->getlabel();
echo "<br>";
echo "Game :" . $Produk2->getlabel();
echo "<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($Produk1);
?>