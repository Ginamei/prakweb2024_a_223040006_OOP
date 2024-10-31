<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    

    public function getlabel(){
        return "$this->penulis, $this->penerbit ";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
      }

}

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
      $jmlHalaman = 0){
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
  }


  public function getInfoProduk(){
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
    $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
}
  public function getInfoProduk(){
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";
    return $str;
  }
}

class cetakInfoProduk {
    public function cetak( Produk $Produk) {
        $str = "{$Produk->judul} | {$Produk->getlabel()} (Rp. {$Produk->harga})";
        return $str;
    }
}

$Produk1 = new Komik("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000, 100);
$Produk2 = new Game("Boruto", "Ukyo Kodachi", "viz Merdia", 25000, 50);



echo $Produk1->getInfoProduk();
echo "<br>";
echo $Produk2->getInfoProduk();
?>