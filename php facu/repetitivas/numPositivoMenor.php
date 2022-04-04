<?php
/**Escribir los números enteros positivos MENORES a N, donde N es un número solicitado al
usuario */
echo "ingrese un número positivo. Se devolveran los numeros enteros menores a ese número \n";
$num= trim(fgets(STDIN));
for($cuenta= 0; $cuenta< $num; $cuenta++){
    echo $cuenta.", ";
}
