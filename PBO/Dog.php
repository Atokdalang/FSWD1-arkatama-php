<?php
require_once 'Animal.php';

// membuat Kelas Dog yang merupakan turunan dari Kelas Animal
class Dog extends Animal
{
    public function __construct($name, $jenis)
    {
        parent::__construct($name, 'anjing');
    }

    public function getInfo()
    {
        return "<br> Hewan Ini Adalah " . $this->name . " Jenis " . $this->jenis . " Anjing adalah hewan yang setia dan cerdas.";
    }
}