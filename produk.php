<?php

class Produklain
{
    public $judul = 'Judul', // pengisian default value properti
        $penulis = 'Penulis',
        $penerbit = 'Penerbit',
        $harga = 0;

    public function getLabel() // membuat method
    {
        return "$this->penulis,$this->penerbit";
    }
}

// $produk1 = new Produk(); // membuat objek
// $produk1->judul = "Naruto"; // menimpa value properti
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->tahun = 0;
// var_dump($produk2->judul); // melihat hanya judul saja
// var_dump($produk2);

$produk3 = new Produklain();
$produk3->judul = "Naruto";
$produk3->penulis = "Massashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 300000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo '<br>';
// echo $produk3->getLabel();

// echo '<hr>';

$produk4 = new Produklain();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Duckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo '<br>';
echo "Game : " . $produk4->getLabel();
