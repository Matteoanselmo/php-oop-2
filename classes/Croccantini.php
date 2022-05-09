<?php 
include_once __DIR__ . "/Product.php";

class Croccantini extends Product{
    protected $name;
    protected $genre;
    protected $typeOfAnimals;

    function __construct($name, $genre, $typeOfAnimals, $type, $price, $size)
    {
        parent::__construct($type, $price, $size);
        $this->name = $name;
        $this->genre = $genre;
        $this->typeOfAnimals = $typeOfAnimals;
    }
    public function getName(){
        return $this->name;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getTypeOfAnimals(){
        return $this->typeOfAnimals;
    }
}


?>