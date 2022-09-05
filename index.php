<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce OOP</title>
</head>

<body>


    <?php
    require_once __DIR__ .  "/classes/user.php" ?>
    <?php
    require_once __DIR__ .  "/classes/registeredUser.php" ?>
    <?php
    require_once __DIR__ .  "/classes/guest.php" ?>
    <?php
    require_once __DIR__ .  "/classes/creditCard.php" ?>
    <?php
    require_once __DIR__ .  "/classes/product.php" ?>
    <?php
    require_once __DIR__ .  "/classes/payment.php" ?>


    <?php

    $marcoTogni = new RegisteredUser('Marco', 'Togni', 'marco.togni@gmail.com', 'gibberishpasswd', 'Via Roma, 1', '451545745');
    $guest = new Guest('Anonymous', 'Guest');

    $creditCard1 = new CreditCard('Marco', 'Togni', '546844445478', '10/25', '933');
    $creditCard2 = new CreditCard('Anonymous', 'Guest', '39816422454', '01/23', '489');

    $catProduct = new Product('Oasy nuggets', 3, 'cat', 3.50, 'Super good', 14.50);
    $dogProduct = new Product('Dog Life', 1, 'dog', 6.50, 'Delicious', 18.50);

    var_dump($marcoTogni)






    ?>

</body>

</html>