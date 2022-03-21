<?php
require __DIR__ . '/../vendor/autoload.php';

// Instanciar

$miAuto = new App\Http\Auto;
$tuAuto = new \App\Http\Auto;

//asignar
$miAuto->Color="blanco";
$miAuto->modelo="camioneta";
$miAuto->ano=1999;
$miAuto->funcional =false;
$miAuto->placa =2556;

$tuAuto->Color="rojo";
$tuAuto->modelo="minibus";
$tuAuto->ano=2022;
$tuAuto->funcional =true;
$tuAuto->placa =2556;

//llamar funciones
$miAuto->mostrar();
$miAuto->mostrar();