<?php
require_once 'tugas5.php';
class PersegiPanjang extends Bentuk2D
{
    public $panjang, $lebar;
    const NAMA = 'Persegi Panjang';

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return ($this->panjang * $this->lebar);
    }
    public function kelilingBidang()
    {
        return (2 * ($this->panjang + $this->lebar));
    }
}