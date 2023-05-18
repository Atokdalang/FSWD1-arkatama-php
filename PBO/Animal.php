<?php
class Animal
{
    // properties
    public $name;
    public $jenis;

    public function __construct($name, $jenis)
    {
        $this->name = $name;
        $this->jenis = $jenis;
    }

    // method
    public function Tipe()
    {
        echo "adalah hewan yang suka bermain dan bersih." . $this->jenis . "\n";
    }

    public function getInfo()
    {
        return "Hewan Ini Adalah " . $this->name . " Jenis " . $this->jenis;
    }
}
