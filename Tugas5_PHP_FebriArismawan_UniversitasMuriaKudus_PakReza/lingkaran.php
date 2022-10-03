<?php
require_once 'tugas5.php';
class Lingkaran extends Bentuk2D
{
    public $jari2;
    const NAMA = 'Lingkaran';

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return (3.14 * $this->jari2 * $this->jari2);
    }
    public function kelilingBidang()
    {
        return (2 * (3.14 * $this->jari2));
    }
}