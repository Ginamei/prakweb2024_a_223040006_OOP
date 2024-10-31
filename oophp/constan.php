<?php 

// define ('NAMA', 'Zack');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// echo "<hr>";
// echo __LINE__;
// echo "<hr>";
// echo __FILE__;
// echo "<hr>";
// echo __DIR__;
// echo "<hr>";

// class Coba {
//     public $kelas = __FUNCTION__;
//   }

// echo coba();


class Coba {
    public $kelas = __CLASS__;
  }
  
  $obj = new Coba;
  echo $obj->kelas;

?>