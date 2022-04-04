<?php 
include "Persona.php";
include "CuentaBancaria.php";
$persona= new Persona("ale", "claure", 2323);

$cuenta= new CuentaBancaria(12, 7500, 25);
$cuenta->setDni($persona->getDni());

echo $cuenta;

?>