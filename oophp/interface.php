<?php 

interface infoProduk{
    public function getInfoProduk();
}

abstract class Produk {
    protected $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
      return $this->Penerbit;
    }

    public function setDiskon($diskon){
      $this->diskon = $diskon;
    }
    public function getDiskon(){
      return $this->diskon;
    }

    public function setHarga($harga){
      $this->harga = $harga;
    }
    public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
    

    public function getlabel(){
        return "$this->penulis, $this->penerbit ";
    }

    
    abstract public function getInfo();

}

class Komik extends Produk implements infoProduk {
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
      $jmlHalaman = 0){
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk(){
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk implements infoProduk{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
    $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getInfo(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk(){
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
    return $str;
  }
}

class cetakInfoProduk {
    public $daftaProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$Produk1 = new Komik("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000, 100);
$Produk2 = new Game("Boruto", "Ukyo Kodachi", "viz Merdia", 25000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($Produk1);
$cetakProduk->tambahProduk($Produk2);
echo $cetakProduk->cetak();



?>