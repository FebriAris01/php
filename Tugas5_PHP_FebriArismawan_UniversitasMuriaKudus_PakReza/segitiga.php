<?php
require_once 'tugas5.php';
class Segitiga extends Bentuk2D
{
    public $alas, $tinggi;
    const NAMA = 'Segitiga Siku-Siku';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namabidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }
    public function simiring()
    {
        return (sqrt(($this->alas * $this->alas) + ($this->tinggi * $this->tinggi)));
    }
    public function kelilingBidang()
    {
        return ($this->simiring() + $this->alas + $this->tinggi);
    }
}