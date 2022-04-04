<?php
/** Módulo 1: aSegundos - 
 * Convierte el horario del día a segundos y retorna la cantidad de segundos.
 * @param int $horas, $minutos, $segundos
 * @param string $horario
 * @return int
*/
function aSegundos ($horas, $minutos, $segundos, $horario) {
    if ($horario == "PM" || $horario == "pm") {
        $horas = $horas + 12;
        $horas = $horas * 3600;
        $minutos = $minutos * 60;
        $segundos = $horas + $minutos + $segundos;
    } elseif($horario == "AM" || $horario == "am") {
        $horas = $horas * 3600;
        $minutos = $minutos * 60;
        $segundos = $horas + $minutos + $segundos;
    }
    return $segundos;
}
 
/** Módulo 2: formatoHora - 
 * Retorna el valor de los segundos ingresados en h:m:s.
 * @param int $segundos
 * @return string
*/
function formatoHora ($segundos) {
    $horas = (int) ($segundos / 3600);
    $minutos = (int) (($segundos % 3600)/60);
    $segundos = (int) (($segundos % 3600) - (60 * $minutos));
    $hms = $horas."hs:".$minutos."min:".$segundos."seg";
    return $hms;
}
 
/** Módulo 3: esMenor - 
 * Determina si una hora ingresada (en segundos) es menor que otra.
 * @param boolean $menor
 * @return boolean
*/
function esMenor ($segundos, $segundos2) {
    $menor = $segundos < $segundos2;
    return $menor;
}
 
/** Módulo 4: difHoras - 
 * Retorna la diferencia entre dos horas ingresadas (en segundos).
 * @param int $segundos1, $segundos2
 * @return string
*/
function difHoras ($segundos1, $segundos2) {
    if ($segundos1 > $segundos2) {
        $segundos = $segundos1 - $segundos2;
            $horas = (int)($segundos/3600);
            $minutos = (int)(($segundos % 3600)/60);
            $segundos = (int)(($segundos % 3600) - (60 * $minutos));
        $hms = $horas."hs:".$minutos."min:".$segundos."seg";
    } else {
        $segundos = $segundos2 - $segundos1;  
            $horas = (int)($segundos/3600);
            $minutos = (int)(($segundos % 3600)/60);
            $segundos = (int)(($segundos % 3600) - (60 * $minutos));
        $hms = $horas."hs:".$minutos."min:".$segundos."seg";
    }
        return $hms;
}
 
/** PROGRAMA principal */
echo "Ingrese una cantidad de horas (0 a 12): ";
$horas = trim(fgets(STDIN));
echo "Ingrese una cantidad de minutos (0 a 59): ";
$minutos = trim(fgets(STDIN));
echo "Ingrese una cantidad de segundos (0 a 59): ";
$segundos = trim(fgets(STDIN));
echo "Ingrese el tipo de horario (AM O PM): ";
$horario = trim(fgets(STDIN));

 
/** Ahora le pedimos al usuario que ingrese otra hora. */
echo "\n"."Ingrese una nueva cantidad de horas (0 a 12): ";
$horas2 = trim(fgets(STDIN));
echo "Ingrese una nueva cantidad de minutos (0 a 59): ";
$minutos2= trim(fgets(STDIN));
echo "Ingrese una nueva cantidad de segundos (0 a 59): ";
$segundos2 = trim(fgets(STDIN));
echo "Ingrese el tipo de horario (AM O PM): ";
$horario2 = trim(fgets(STDIN));

$converSeg1 = aSegundos($horas, $minutos, $segundos, $horario);
$pasajehora = formatoHora($converSeg1);
 
$converSeg2 = aSegundos($horas2, $minutos2, $segundos2, $horario2);
$pasajehora2 = formatoHora($converSeg2);

echo "\n";
/** Retornamos las horas ordenadas de mayor a menor. */
if (esMenor($converSeg1, $converSeg2)) {
    echo "La hora ordenada de mayor a menor es de: \n" .$pasajehora2." son ".$converSeg2." seg.\n";
    echo $pasajehora." son ".$converSeg1." seg.\n" ;
} else {
    echo "La hora ordenada de mayor a menor es de: \n".$pasajehora." son ".$converSeg1." seg.\n";
    echo $pasajehora2." son ".$converSeg2. " seg.\n";
}
/** Calculamos la diferencia entre horas */
$diferencia = difHoras($converSeg1, $converSeg2);
    echo "La diferencia entre horas es de: ".$diferencia;





