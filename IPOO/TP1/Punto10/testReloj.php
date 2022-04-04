<?php
include "Reloj.php";
$objReloj= new Reloj(0,0,0);
//$objReloj->incremento();
echo $objReloj;
$objReloj= new Reloj(14,50,20);
echo $objReloj;
$objReloj->puesta_a_cero();
echo $objReloj;
?>