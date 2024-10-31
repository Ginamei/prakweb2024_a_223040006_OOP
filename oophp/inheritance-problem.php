<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMAin,
           $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
                                $jmlHalaman = 0, $waktuMAin = 0, $tipe = "tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMAin;
        $this->tipe = $tipe;
    }
    

    public function getlabel(){
        return "$this->penulis, $this->penerbit ";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik"){
          $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
          $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
      }

}

class cetakInfoProduk {
    public function cetak( Produk $Produk) {
        $str = "{$Produk->judul} | {$Produk->getlabel()} (Rp. {$Produk->harga})";
        return $str;
    }
}

$Produk1 = new Produk("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000, 100 ,0 ,"Komik");
$Produk2 = new Produk("Boruto", "Ukyo Kodachi", "viz Merdia", 25000, 0, 50, "Game");



echo $Produk1->getInfoLengkap();
echo "<br>";
echo $Produk2->getInfoLengkap();
?>