<?php
// 1) Escribir en pantalla los números Naturales Pares menores iguales a N, donde N es un
// número solicitado al usuario.

echo "ingrese un número Natural para mostrar todos sus pares menores empezando desde el 2 \n";
$num = trim(fgets(STDIN));
if($num>=2){
    for($contador=2; $contador<=$num; $contador++){
        echo $contador.", ";
        $contador= $contador +1;
    }
}else{
        echo "ingrse un numero válido";
}
