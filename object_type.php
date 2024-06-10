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
        return "$this->penulis, $this->penerbit";
    }
}

class infoDetailProduk {
    public function detailProduk( Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Dragon ball Z", "Kei Animations", "Murata", "300000");

$produk2 = new Produk();

echo 'komik : ' . $produk1->getLabel();
echo '<br>';
echo 'default : ' . $produk2->getLabel();
echo '<br>';

$detail = new infoDetailProduk();
echo $detail->detailProduk($produk1);
?>