<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul = "Dragon Quest", $penerbit = "X", $penulis = "X", $harga = 150000) 
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->judul";
    }
}

$produk1 = new Produk("Dragon ball Z", "Kei Animations", "Murata", "300000");

$produk2 = new Produk();

echo 'komik : ' . $produk1->getLabel();
echo '<br>';
echo 'default : ' . $produk2->getLabel();

?>