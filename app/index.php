<?php

require  __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;

$cart = new CarrinhoCompra();

var_dump($cart->getItems());

$cart->addItemToCart('Bicicleta', 1500);
$cart->addItemToCart('Tapete', 150.20);

echo "<pre>";
var_dump($cart->getItems());
