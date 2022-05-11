<?php 

class CreditCard extends Products {
    public $numberOfCard;
    public $saldo;
    public $yearOfDeadlineCard;

    function __construct($numberOfCard,$saldo, int $yearOfDeadlineCard)
    {
        $this->numberOfCard = $numberOfCard;
        $this->saldo = $saldo;
        $this->yearOfDeadlineCard = $yearOfDeadlineCard;
    }
    
    public function getNumberOfCard(){
        return $this->numberOfCard;
    }
    public function setTypeOfCard($numberOfCard){
        $this->numberOfCard = $numberOfCard;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getYearOfDeadlineCard(){
        return $this->yearOfDeadlineCard;
    }
    public function setYearOfDeadlineCard($yearOfDeadlineCard){
        $this->yearOfDeadlineCard = $yearOfDeadlineCard;
    }
}




?>