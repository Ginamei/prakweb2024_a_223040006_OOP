<?php 

require 'App/init.php';

$Produk1 = new Komik("Naruto", "Masahi Khisimoto", "Shonen Jump", 30000, 100);
$Produk2 = new Game("Boruto", "Ukyo Kodachi", "viz Merdia", 25000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($Produk1);
$cetakProduk->tambahProduk($Produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();

?>