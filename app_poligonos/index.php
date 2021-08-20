<?php

require __DIR__.'/vendor/autoload.php';

use src\Poligono;
use src\poligonos\Quadrado;
use src\poligonos\Retangulo;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());

echo "<pre>";
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo $poligono->getArea();
echo "</pre>";
