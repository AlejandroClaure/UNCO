<?php
/**Diseñe un algoritmo que lea una secuencia de números que representan el sueldo ($) del
personal de una empresa y calcule el sueldo promedio de los empleados */
echo "Este programa calculará el promedio del sueldo de los empleados \n";
echo "ingrese el sueldo de un empleado: \n";
$sueldo = trim(fgets(STDIN));
$cantsueldo= 1;
$sumasueldo=0;
do{
echo "desea ingresar otro sueldo?(responda con un 'si' o 'no') \n";
$respuesta= trim(fgets(STDIN));
if($respuesta == "si" || $respuesta == "SI"){
echo"ingrese el sueldo del empleado: \n";
$sueldoe = trim(fgets(STDIN));
$sumasueldo= $sumasueldo + $sueldoe;
$cantsueldo++;}
else{}
}while($respuesta == "si" || $respuesta == "SI");
$promedio= ($sumasueldo + $sueldo) / $cantsueldo;
echo "el promedio de los sueldos es de:\n  ".$promedio;
