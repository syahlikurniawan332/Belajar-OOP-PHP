<?php

// tidak bisa simpan ke dalam sebuah class dalam oop
// define ('NAMA', 'Syahli Kurniawan');
// echo NAMA;

// echo '<br>';

// // bisa masuk ke dalam kelas dalam oop
// const UMUR = 22;
// echo UMUR;

class Coba
{
    const NAMA = 'Syahli';
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
echo '<br>';

echo Coba::NAMA;

echo '<br>';

echo __FILE__;

function coba()
{
    return __FUNCTION__;
}

echo '<br>';
echo coba();
echo '<br>';

