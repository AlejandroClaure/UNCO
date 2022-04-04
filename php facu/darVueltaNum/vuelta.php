<?php
/** a. Especificar un módulo cuya entrada es un número y el retorno es el número en
 * orden inverso. Ejemplo 1: dado el número 3851 el retorno es 1583. Ejemplo 2:
*dado el número 12345 el retorno es 54321.
*A continuación se detallan algunas operaciones
 *12345
 *12345 % 10 = 5
 *(int ) 12345 / 10 = 1234
 *5

*1234 % 10 = 4
*1234/10 = 123
*5*10+4 = 54

*123 % 10 = 3
*123 / 10 = 12
*54*10+3 = 543

*12 % 10 = 2
*12/10 = 1
*543*10+2 = 5432  

*1 % 10 = 1
*1 / 10 = 0
*5432*10+1= 54321*/


/**b. Especificar un módulo cuya entrada sea un número entero y el retorno es la suma
de sus dígitos. Por ejemplo, si el número es 3851, el retorno es 17.
c. Especificar un módulo cuya entrada sea un número entero (considere que el
número es mayor a 0) y el retorno sea la cantidad de divisores.
Por ejemplo el número 12, tiene 5 divisores (1,2,3,4,6)
d. Especificar un módulo cuya entrada sea un número entero y el retorne true si el
número es primo, false caso contrario
e. Implementar un programa principal con un menú de opciones que se repita hasta
que el usuario ingrese la opción salir. Por cada opción debe solicitar un número y
mostrar el resultado
1- Número inverso
2- Suma de dígitos
3- Cantidad de divisores
4- Es primo?
5- Salir */

/** modulo que da vuelta el número */

/** Módulo 1: ordenInverso - 
 * Recibe un número entero y retorna su orden inverso.
 * @param int $numero
 * @return int
 */
function ordenInverso($numero) {
    /* int $resto, $auxiliar, $acum, $inverso */
    $acum = 0;
        do {
            if ($numero > 0) {
                $resto = $numero % 10;
                $numero = (int)($numero/10);
                $auxiliar = $resto;
                $acum = $acum * 10 + $auxiliar;
            }
        } while ($numero <> 0);
    return $acum;
}



