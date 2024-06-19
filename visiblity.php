<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit;
    private $harga;
    protected $diskon;

    public function __construct($judul = "Dragon Quest", $penerbit = "X", $penulis = "X", $harga = 150000)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon  / 100);
    }
}


class Komik extends Produk
{
    public $jumlahHlm;

    public function __construct($judul = "Dragon Quest", $penulis = "X", $penerbit = "X", $harga = 150000, $jumlahHlm = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHlm = $jumlahHlm;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . "- {$this->jumlahHlm} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "Dragon Quest", $penulis = "X", $penerbit = "X", $harga = 150000, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoGame()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";
        return $str;
    }
}

$produk1 = new Komik('Naruto', 'Mashasi Khissimoto', 'Shonen Jump', 200000, 100);
echo $produk1->getInfoProduk();
echo '<br>';
$produk2 = new Game("Final Fantasy", "Tetsuya Nomura", "Square Enix", 300000, 50);
echo $produk2->getInfoGame();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
