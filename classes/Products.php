<?php 

class Products{
    protected $type;
    public $price;
    protected $size;

    function __construct(string $type, int $price, int $size)
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