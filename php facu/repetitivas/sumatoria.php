<?php
// 2) Escribir un Programa Principal que le solicite a un usuario números hasta que ingrese un
// Cero. El programa debe mostrar en pantalla la suma de todos los números leídos. 
echo "ingrese números y al finalizar ingrese un cero. Se hará una sumatoria de los numeros ingresados. \n";
$sumatoria= 0;
do{
echo"ingrese un número: \n";
$num = trim(fgets(STDIN));
$sumatoria = $sumatoria + $num ;

}while($num<>0);
echo "el total es de: ".$sumatoria;