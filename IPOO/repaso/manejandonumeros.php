<?php

/** 
1. Dado un número N retornar su factorial.
2. Dado un número N retornar verdadero si el número es par y falso en caso contrario.
3. Dado dos números N y M retornar verdadero si el número N es divisible por M y falso en caso contrario.
4. Dada un arreglo de números enteros, determinar los valores máximo y mínimo, y las posiciones en que éstos se
encontraban en el arreglo.
5. Cree una función leerNombres, cuyo parámetro de entrada formal es una cantidad n de nombres (ciclo
denido), que solicite a un usuario los n nombres y los almacene en un arreglo indexado. aa función debe
retornar el arreglo indexado.
6. Dado un número que se corresponde a un año calendario, retornar un arreglo con todos los años bisiestos
menores al año ingresado.
Nota: Un año es bisiesto cuando es múltiplo de cuatro, exceptuando los múltiplos de 100 que no lo sean de
400.
7. Dado 2 arreglos A y B, de N y M elementos respectivamente. Construir un algoritmo que retorne un arreglo
con los elementos de A mas los elementos de B.
8. Dado 2 arreglos A y B, de N y M elementos respectivamente. Construir un algoritmo que retorne un arreglo
con los elementos de A que no estan en B.  */
$arrayMaxMin = [587, 20, 19, 18, 17];

//1. Dado un número N retornar su factorial.
function factorial($num)
{
    $fac = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fac = $fac * $i;
    }
    echo $fac;
}

/* ej1
//saber si es divisible por otro
echo "\n ingrese N \n";
$ene = trim(fgets(STDIN));
echo "\n ingrese M \n";
$m = trim(fgets(STDIN));
if (esDivisible($ene, $m)) {
    echo "n es divisible por m";
} else {
    echo "N no es divisible por M";
}
*/

//2. Dado un número N retornar verdadero si el número es par y falso en caso contrario.
function esPar($par)
{
    $esPar = $par % 2;
    if ($esPar == 0) {
        $par = true;
    } else {
        $par = false;
    }
    return $par;
}

 /** ej 2
* //saber si es par
* if (esPar($n)) {
 *    echo "es par";
* } 
*/


//3. Dado dos números N y M retornar verdadero si el número N es divisible por M y falso en caso contrario.
function esDivisible($n, $m)
{
    $nDiv = $n % 2;
    $mDiv = $m % 2;
    if ($nDiv == $mDiv) {
        $esDivisible = true;
    } else {
        $esDivisible = false;
    }
    return $esDivisible;
}

/**ej 3
echo "ingrese un numero a factorizar:";
$n = trim(fgets(STDIN));
//factoriza
$aca = factorial($n);
echo $aca;
 */


//4. Dada un arreglo de números enteros, determinar los valores máximo y mínimo, y las posiciones en que éstos se encontraban en el arreglo.
function maxMin($array)
{
    $x = count($array);
    $max = 0;
    $min = 999;
    for ($i = 0; $i < $x; $i++) {
        $almacen = $array[$i];
        if ($almacen >= $max) {
            $max = $almacen;
            $posMax = $i;
        }
        if ($almacen < $min) {
            $min = $almacen;
            $posMin = $i;
        }
    }
    echo "el número máximo es:" . $max . "y la posiciión en la que se encuentra es: " . $posMax."\n";
    echo "el número minimo es:" . $min . "y la posiciión en la que se encuentra es: " . $posMin."\n";
}
/** ej 4
* $arrays = maxMin($arrayMaxMin);
* echo $arrays;
*/


//5. Cree una función leerNombres, cuyo parámetro de entrada formal es una cantidad n de nombres (ciclo
// definido), que solicite a un usuario los n nombres y los almacene en un arreglo indexado. La función debe
// retornar el arreglo indexado.
function leerNombres($cantNombres){
    //declaro el array
    $arregloNombres=[];
    //pido los nombres
    echo "ingrese los nombres a continuación:";
    //ingresan un nombre por la cantidad de veces indicada y estos se guardan en un array
    for ($i=0;$i<$cantNombres;$i++){
        $nombre = trim(fgets(STDIN));
        $arregloNombres[$i]=$nombre;
    }
    //retorna el array
    return $arregloNombres;
}
/*
echo "ingrese la cant de nombres:";
$cant=trim(fgets(STDIN));
leerNombres($cant);
*/

/*6. Dado un número que se corresponde a un año calendario, retornar un arreglo con todos los años bisiestos
menores al año ingresado.
Nota: Un año es bisiesto cuando es múltiplo de cuatro, exceptuando los múltiplos de 100 que no lo sean de
400.
*/
function aniosBisiestos($anio){
    $bisiestos=[];
    for($i=0;$i<$anio;){

    }
}


