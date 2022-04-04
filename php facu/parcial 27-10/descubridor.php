<?php

/**PROGRAMA descubridorNumerico
 * int $descubrir, $cantidad, $i, $numero, $descubierto
 */
//inicializo la variable descubierto
$descubierto = 0;
//comienzo del algoritmo
echo "Ingrese el número 'X' a ser descubierto: ";
$descubrir = trim(fgets(STDIN));
echo "Ingrese la cantidad de números que deben ser ingresados para descubrirlo: ";
$cantidad = trim(fgets(STDIN));
if ($cantidad > 0) {
    for ($i = 0; $i < $cantidad; $i++) {
        echo "Ingrese un número: ";
        $numero = trim(fgets(STDIN));
        //Se suma un 1 cada vez que se descubra el número
        if ($numero == $descubrir) {
            $descubierto = $descubierto + 1;
        }
    }
    echo "La cantidad de veces que se descubrió el número es: ", $descubierto;
} else {
    echo "No hay secuencia de Números para analizar";
}

