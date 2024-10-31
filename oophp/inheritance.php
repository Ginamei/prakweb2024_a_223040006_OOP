<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMAin;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
                                $jmlHalaman = 0, $waktuMAin = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMAin;
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
  public function getInfoProduk(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public function getInfoProduk(){
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
    return $str;
  }
}

class cetakInfoProduk {
    public function cetak( Produk $Produk) {
        $str = "{$Produk->judul} | {$Produk->getlabel()} (Rp. {$Produk->harga})";
        return $str;
    }
}

$Produk1 = new Komik("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000, 100 ,0);
$Produk2 = new Game("Boruto", "Ukyo Kodachi", "viz Merdia", 25000, 0, 50);



echo $Produk1->getInfoProduk();
echo "<br>";
echo $Produk2->getInfoProduk();
?>