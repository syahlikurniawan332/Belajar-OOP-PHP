<?php

abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga;
    protected $diskon;

    public function __construct($judul = "Dragon Quest", $penerbit = "X", $penulis = "X", $harga = 150000)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        return $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        return $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getinfo();

    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon  / 100);
    }
}
