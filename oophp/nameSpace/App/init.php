<?php 

// require 'App/Produk/InfoProduk.php';
// require 'App/Produk/Produk.php';
// require 'App/Produk/Komik.php';
// require 'App/Produk/Game.php';
// require 'App/Produk/CetakInfoProduk.php';
// require 'App/Produk/User.php';

// require 'App/Service/User.php';

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});

?>