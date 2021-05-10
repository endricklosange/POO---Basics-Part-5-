<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
$bmw = new Car('black', 4 ,'fuel');
$bmx = new Bicycle('grey',1);
$man = new Truck(500, 'blue', 3,'fuel');

echo '<br> Car <br>';
echo $bmw->start();
echo $bmw->forward();
echo $bmw->brake();

echo '<br> Bicycle <br>';
echo $bmx->start();
echo $bmx->forward();
echo $bmx->brake();

echo '<br> Truck <br>';
echo $man->start();
echo $man->forward();
echo $man->brake();
echo $man->setLoad();

