<?php 
include_once __DIR__ . "/CreditCard.php";

class User{
    protected $firstName;
    protected $lastName;
    public $creditCard;
    protected $registered;

    public function __construct(string $firstName,string $lastName, $creditCard,bool $registered)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setCreditCard($creditCard);
        $this->registered = $registered;
    }
    public function setCreditCard($creditCard){
        if(!$creditCard instanceof CreditCard) return false;
        $this->creditCard = $creditCard;
    }
    public function isRegistered(){
        if($this->registered){
            echo 'Si';
        }else{
            echo 'Non è registrato';
        }
    }
    public function setDeal($product){
        if($this->creditCard->yearOfDeadlineCard < date('Y')){
            return 'Carta di crediito scaduta';
        }
        if($this->creditCard->saldo < $product->price){
            return 'Credito insufficente';
        }
        if($this->registered){
            $deal = ($product->price * 20) / 100;;
            $product->price = $product->price - $deal;
            return $product->price;
        }else{
            return $product->price;
        }
    }
}

