<?php
    include_once __DIR__ . "/classes/Croccantini.php";
    include_once __DIR__ . "/classes/CreditCard.php";

$royalCanin = new Croccantini('royal canin', 'carne', 'cibo per cani', 'croccantini', 150, 10);
var_dump($royalCanin);
$payment = new CreditCard('Visa', false, 20, 'croccantini', 200000, 15);

echo $payment->setDeal();
echo $payment->isFell();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <h4>
        il prodotto selezionato è: <?php echo $royalCanin->getName()?>
    </h4>
    <ul>
        <li>la marca del prodotto è:
            <?php echo $royalCanin->getGenre()?>
        </li>
        <li>il tipo di mangime è: 
            <?php echo $royalCanin->getTypeOfAnimals()?>
        </li>
        <li>il tipo di prodotto è: 
            <?php echo $royalCanin->getType()?>
        </li>
        <li>il prezzo intero del prodotto è: 
            <?php echo $royalCanin->getPrice()?>
        </li>
        <li>il peso del prodotto è:
            <?php echo $royalCanin->getSize()?>
        </li>
    </ul>
    <h4>
        l'utente è registrato? <?php echo $payment->isRegistered()?>
    </h4>
    <h5>
        il prezzo finale è:
        <?php 
        echo $payment->setDeal();
        ?>
    </h5>
    <h2>
        <?php 
        echo $payment->isFell()?>
    </h2>
</body>
</html>