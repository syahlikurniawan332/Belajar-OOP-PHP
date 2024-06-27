<?php
class Komik extends Produk implements InfoProduk
{
    public $jumlahHlm;

    public function __construct($judul = "Dragon Quest", $penulis = "X", $penerbit = "X", $harga = 150000, $jumlahHlm = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHlm = $jumlahHlm;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHlm} Halaman.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }
}
