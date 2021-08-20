<?php
require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo "<br>";

$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();