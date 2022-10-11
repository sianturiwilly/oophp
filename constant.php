<?php

// define('NAMA', 'Willi Sianturi');
// echo NAMA;

// echo "<br>";

// const UMUR = 29;
// echo UMUR;

// class Coba {
//    const NAMA = 'Willi';
// }

// echo Coba::NAMA;

// echo __FILE__;

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>