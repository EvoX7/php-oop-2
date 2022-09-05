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
    require_once __DIR__ .  "/classes/food.php" ?>
    <?php 
    require_once __DIR__ .  "/classes/payment.php" ?>


    <?php

    $marcoTogni = new RegisteredUser('Marco', 'Togni', 'marco.togni@gmmail.com', 'gibberishpasswd', 'Via Napoli, 1', '3495612554');
    $guest = new Guest('Anonymous', 'Guest');

    $creditCard1 = new CreditCard('Marco', 'Togni', '546844445478', '10/25', '933');
    $creditCard2 = new CreditCard('Anonymous', 'Guest', '39816422454', '01/23', '489');

    $catProduct = new Food('Max Health','Dry','Best nuggets', 3, 'cat', 3.50 . ' Kg', 'Super good', 14.50 . ' €', 'sku45416498','05/23');
    $dogProduct = new Food('Omega','Cool - Dry','Dog Life', 1, 'dog', 6.50, 'Delicious', 18.50, 'sku489264862', '01/24');

    var_dump($catProduct)






    ?>

</body>

</html>