<?php
    include_once __DIR__ . "/classes/Croccantini.php";
    include_once __DIR__ . "/classes/User.php";

    $croccantini = new Croccantini('croccantini', 'cibo', 'per cani', 'cibo per cani adulti', 65, 10);
    $visa = new CreditCard(1234567887654321, 100, 2025);
    $costumer = new User('Matteo', 'Anselmo', $visa, true);
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
        il prodotto selezionato è: <?php echo $croccantini->getName()?>
    </h4>
    <ul>
        <li>la marca del prodotto è:
            <?php echo $croccantini->getGenre()?>
        </li>
        <li>il tipo di mangime è: 
            <?php echo $croccantini->getTypeOfAnimals()?>
        </li>
        <li>il tipo di prodotto è: 
            <?php echo $croccantini->getType()?>
        </li>
        <li>il prezzo intero del prodotto è: 
            <?php echo $croccantini->getPrice()?>
        </li>
        <li>il peso del prodotto è:
            <?php echo $croccantini->getSize()?>
        </li>
    </ul>
    <h4>
        l'utente è registrato? <?php echo $costumer->isRegistered()?>
    </h4>
    <h5>
        il prezzo finale è:
        <?php 
        echo $costumer->setDeal($croccantini);
        ?>
    </h5>
</body>
</html>