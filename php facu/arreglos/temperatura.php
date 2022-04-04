<?php
/**a) Una función leerTemperaturas, cuyo parámetro de entrada formal es un valor n, que solicite a un usuario las n
temperaturas y las almacene en un arreglo indexado. La función debe retornar el arreglo indexado. ¿Qué tipo de
datos almacena la colección?
b) Una función listarTemperaturas, cuyo parámetro formal es una arreglo indexado de temperaturas. La función
debe mostrar todos las temperaturas en pantalla. ¿Qué tipo de recorrido debe realizar, exhaustivo o parcial?
c) Una función promTemperaturas, que dado un arreglo de temperaturas, retorne el promedio de temperaturas.
d) Una función porcTemperaturasSuperiores, que dado un arreglo temperaturas y una temperatura determinada,
obtenga el porcentaje de temperaturas que superan a la temperatura determinada.
e) Una función minTemperatura, que dada la colección de temperaturas retorne el índice donde se encuentra la
menor temperatura
f) Una función maxTemperatura, que dada la colección de temperaturas retorne el índice donde se encuentra la
mayor temperatura
g) Una función extremosTemperatura, que dada la colección de temperaturas retorne un arreglo asociativo que en
la clave “min” almacena la menor temperatura y en la clave “max” almacena la mayor temperatura.
h) Un programa principal para probar los algoritmos anteriores.
 */

 function leerTemperaturas($n){
    $temperatura= [];
    for($i=0; $i<$n;$i++){
        echo "Ingrese una temperatura";
        $temperatura[$i]= trim(fgets(STDIN));
    }
     
     return $temperatura;
 }
 function listarTemperaturas($temp){
     $temps = count($temp);
     return $temps; 
 }
 function promTemperaturas($temperaturas){
     $acum = 0;
     $cant = count($temperaturas);
     for($i=0; $i <$cant; $i++){
         $acum = $acum + $temperaturas[$i];
     }
     $promedio= $acum / $cant;
return $promedio;
 }
 function porcTemperaturasSuperiores($arreglo, $temperatura){

 }
 function minTemperatura($coleccion){

 }
 function maxTemperatura($coleccion){

 }
 function extremostemperatura($colecction){

 }
 