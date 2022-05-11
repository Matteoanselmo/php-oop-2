<?php 
include_once __DIR__ . "/Products.php";

class Croccantini extends Products{
    protected $name;
    protected $genre;
    protected $typeOfAnimals;

    function __construct(string $name, string $genre,string $typeOfAnimals,string $type,int $price,int $size)
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