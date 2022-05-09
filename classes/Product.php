<?php 

class Product{
    protected $type;
    protected $price;
    protected $size;

    function __construct($type, $price, $size)
    {
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getSize(){
        return $this->size;
    }
}