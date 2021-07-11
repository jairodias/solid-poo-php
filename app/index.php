<?php

require  __DIR__ . "/vendor/autoload.php";


use App\Cart;
use App\Item;
use App\Order;
use App\EmailService;

$order = new Order;

$itemOne = new Item();
$itemTwo = new Item();

$itemOne->setDescription('Porta Copos');
$itemOne->setValue(4.55);

$itemTwo->setDescription('Ventilador');
$itemTwo->setValue(189.83);

echo "<pre>";
echo '<h6>Pedido</h6>';
print_r($order);

$order->getCart()->addItemToCart($itemOne);
$order->getCart()->addItemToCart($itemTwo);

echo '<h6>Pedido itens</h6>';
print_r($order->getCart()->getItems());

echo '<h6>Pedido itens</h6>';
print_r($order->getCart()->getItems());

$cart = new Cart;
