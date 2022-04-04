<?php
/**
 * calcula el puntaje teniendo como entrada el numero de prueba y el tipo
 * @param int $numprueba
 * @param string $tipo
 * @return int
 */
function puntaje($numprueba, $tipo){
    $puntaje= $numprueba % 9;
    if($tipo == 'Tecnica' || $tipo == 'TECNICA' || $tipo == 'técnica' || $tipo == 'Técnica'){
        $puntaje = $puntaje + 38;
    }elseif($tipo == 'Expresiva' || $tipo == 'EXPRESIVA' || $tipo == 'expresiva'){
        $puntaje = $puntaje+56;
    }
    return $puntaje;
}
/**
 * calcula los minutos extras
 * @param int $puntaje
 * @return int
 */
function minExtra($puntaje){
    if($puntaje < 39){
        $minutos = 2;
    }elseif($puntaje >= 39 && $puntaje < 47){
        $minutos = 3;
    }elseif($puntaje >= 47 && $puntaje < 57){
        $minutos = 4;
    }elseif($puntaje >= 57){
        $minutos = 5;
    }
    return $minutos;
}
/**PROGRAMA minutosExtra */
/**
 * calcula la cantidad de minutos extra
 * int $puntos, $minExtra, $puntajeBailando
 * string $tipoPrueba
 */
echo("ingrese el número de prueba: ");
$puntos=trim(fgets(STDIN));
echo("\ningrese el tipo de prueba (Tecnica o Expresiva): ");
$tipoPrueba= trim(fgets(STDIN));
$puntajeBailando = puntaje($puntos, $tipoPrueba);
$minsExtra = minExtra($puntajeBailando);
echo ("Los minutos extra para los participantes son: ".$minsExtra);


