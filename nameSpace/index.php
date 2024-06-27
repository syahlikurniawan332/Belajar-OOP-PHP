<?php
require_once 'app/init.php';

// $produk1 = new Komik('Naruto', 'Mashasi Khissimoto', 'Shonen Jump', 200000, 100);
// $produk2 = new Game("Final Fantasy", "Tetsuya Nomura", "Square Enix", 300000, 50);

// $cetakProduk = new CetakProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();


// new app\service\User();

use app\service\User as ServiceUser;
use app\service\User as ProdukUser;

new ServiceUser();

echo '<br>';

new ProdukUser();