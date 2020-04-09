<?php

include_once 'includes/moto.php';

$moto = new Moto();

//Seteamos los valores

$moto->setColor('Green');
$moto->setMarca('AKT');
$moto->setCilindro(1000);
$moto->setPlaca('mÑo09l');

$moto->addMoto();



?>