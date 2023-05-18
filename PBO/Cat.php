<?php
require_once 'Animal.php';

// membuat Kelas Cat yang merupakan turunan dari Kelas Animal
class Cat extends Animal
{
    public function __construct($name, $jenis)
    {
        parent::__construct($name, 'Kucing');
    }

    public function getInfo()
    {
        return "<br> Hewan Ini Adalah " . $this->name . " Jenis " . $this->jenis . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}
