<?php

// abstract class Produk
// {
//     private $judul,
//         $penulis,
//         $penerbit,
//         $harga;
//     protected $diskon;

//     public function __construct($judul = "Dragon Quest", $penerbit = "X", $penulis = "X", $harga = 150000)
//     {
//         $this->judul = $judul;
//         $this->penulis = $penulis;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//     }

//     public function setJudul($judul)
//     {
//         return $this->judul = $judul;
//     }

//     public function getJudul(){
//         return $this->judul;
//     }
//     public function setPenulis($penulis)
//     {
//         return $this->penulis = $penulis;
//     }

//     public function getPenulis(){
//         return $this->penulis;
//     }
//     public function setPenerbit($penerbit){
//         return $this->penerbit = $penerbit;
//     }
//     public function getPenerbit(){
//         return $this->penerbit;
//     }

//     public function getLabel()
//     {
//         return "$this->penulis, $this->penerbit";
//     }

//     abstract public function getInfoProduk();

//     public function getInfo() {
//         $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
//         return $str;
//     }

//     public function setDiskon($diskon)
//     {
//         return $this->diskon = $diskon;
//     }
//     public function getharga()
//     {
//         return $this->harga - ($this->harga * $this->diskon  / 100);
//     }
// }


// class Komik extends Produk
// {
//     public $jumlahHlm;

//     public function __construct($judul = "Dragon Quest", $penulis = "X", $penerbit = "X", $harga = 150000, $jumlahHlm = 0)
//     {
//         parent::__construct($judul, $penulis, $penerbit, $harga);
//         $this->jumlahHlm = $jumlahHlm;
//     }

//     public function getInfoProduk()
//     {
//         $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHlm } Halaman.";
//         return $str;
//     }
// }

// class Game extends Produk
// {
//     public $waktuMain;

//     public function __construct($judul = "Dragon Quest", $penulis = "X", $penerbit = "X", $harga = 150000, $waktuMain = 0)
//     {
//         parent::__construct($judul, $penulis, $penerbit, $harga);
//         $this->waktuMain = $waktuMain;
//     }

//     public function getInfoProduk()
//     {
//         $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
//         return $str;
//     }
// }

// class CetakProduk {
//     public $daftarProduk = array();

//     public function tambahProduk( Produk $produk) {
//         $this->daftarProduk[] = $produk;
//     }

//     public function cetak() {
//         $str = "DAFTAR PRODUK : <br>";

//         foreach ($this->daftarProduk as $p) {
//             $str .= "- {$p->getInfoProduk()} <br>";
//         }

//         return $str;
//     }
// }

// $produk1 = new Komik('Naruto', 'Mashasi Khissimoto', 'Shonen Jump', 200000, 100);
// $produk2 = new Game("Final Fantasy", "Tetsuya Nomura", "Square Enix", 300000, 50);

// $cetakProduk = new CetakProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();




// Mendefinisikan abstract class Mobil
abstract class Mobil {
    // Deklarasi properti public $merk
    public $merk;

    // Deklarasi abstract method Jalankan yang harus diimplementasikan oleh subclass
    abstract public function Jalankan();
}

// Mendefinisikan class Sedan yang merupakan turunan dari class Mobil
class Sedan extends Mobil {
    // Mengimplementasikan method Jalankan sesuai kontrak dari class Mobil
    public function Jalankan() {
        // Mengatur nilai properti $merk
        $this->merk = "Sedan: Jalan dengan kecepatan sedang.";
        // Mengembalikan nilai properti $merk
        return $this->merk;
    }
}

// Mendefinisikan class SUV yang merupakan turunan dari class Mobil
class SUV extends Mobil {
    // Mengimplementasikan method Jalankan sesuai kontrak dari class Mobil
    public function Jalankan() {
        // Mengatur nilai properti $merk
        $this->merk = "SUV: Jalan dengan kemampuan off-road.";
        // Mengembalikan nilai properti $merk
        return $this->merk;
    }
}

// Membuat instance dari class Sedan
$sedan = new Sedan;
// Memanggil method Jalankan pada instance $sedan dan mencetak hasilnya
echo $sedan->Jalankan();
echo "<br>";

// Membuat instance dari class SUV
$suv = new SUV;
// Memanggil method Jalankan pada instance $suv dan mencetak hasilnya
echo $suv->Jalankan();

