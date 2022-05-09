<?php 
include_once __DIR__ . "/Product.php";

class Payments extends Product{
    protected $typeOfCard;
    protected $isRegistered;
    protected $yearOfDeadlineCard;

    function __construct($typeOfCard, $isRegistered, $yearOfDeadlineCard, $type, $price, $size)
    {
        parent::__construct($type, $price, $size);
        $this->typeOfCard = $typeOfCard;
        $this->isRegistered = $isRegistered;
        $this->yearOfDeadlineCard = $yearOfDeadlineCard;
    }
    public function setDeal(){
        if($this->isRegistered){
            $deal = ($this->price * 20) / 100;;
            $this->price = $this->price - $deal;
            return $this->price;
        }else{
            return $this->price;
        }
    }
    public function isFell(){
        if($this->yearOfDeadlineCard >= 22){
            echo 'La carta è scaduta';
        }
    }
    public function gettypeOfCard(){
        return $this->typeOfCard;
    }
}




?>