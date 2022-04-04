<?php
/**Se quiere relevar cierta información de la empresa IPLearning, para lo cual se necesita un programa
principal que solicite como entrada:
i) nombre del empleado
ii) edad
iii) puesto: “a” = administrativo, “t”= técnico, "p"= profesional

Para obtener la siguiente salida:
a) Nombre de la persona con menor edad.
b) Qué porcentaje representan los profesionales en la empresa
c) Promedio de edad del personal técnico
Para la resolución considere utilizar un ciclo interactivo que le permite al usuario ingresar cero o más
empleados.
*/
$profesional = 0;
$totalEdades = 0;
$encuestas = 0;
$menor = 999;
$empleadoMenor = "";
$tecnico = 0;
echo"¿Desea realizar una encuesta? (si/no)";
$decision = trim(fgets(STDIN));
if ($decision == "si"|| $decision == "SI"){
do{

    echo "ingrese el nombre del empleado: ";
    $empleado = trim(fgets(STDIN));
    echo "ingrese la edad del empleado: ";
    $edad = intval(trim(fgets(STDIN)));
    echo "ingrese el puesto: ";
    $puesto = trim(fgets(STDIN));

    if($edad < $menor){
        $menor = $edad;
        $empleadoMenor = $empleado;
    }   
    if($puesto == "p" || $puesto = "P"){
        $profesional = $profesional + 1;
    }
    if($puesto == "t" || $puesto = "T"){
        $tecnico = $tecnico + 1;
    $totalEdades =  $totalEdades + $edad;

    }
    $encuestas ++;

    echo "¿Desea realizar otra encuesta? (si/no) : \n";
    $decision = trim(fgets(STDIN));

}while($decision == "si");
if($tecnico> 0){
$promedioEdad = intval($totalEdades / $tecnico);
}

$porcentaje= intval(($encuestas * 100) /$profesional);

echo "El nombre de la persona con menor edad es: ".$empleadoMenor;
echo "\n"."El porcentaje de profesionales de la empresa es de: ".$porcentaje;
if($promedioEdad>0){
echo "\n"."el promedio de edad del personal técnico es : ".$promedioEdad;
}

}else{
    echo "No se realizaron encuestas.";
}
