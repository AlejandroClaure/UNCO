<?php

include "Lectura.php";
include "Libro.php";

$libro = new Libro(20, "La Tregua", 1960,"ale","c", "Flores", 300, "Narra la vida de Martín Santomé, un hombre viudo y cercano a jubilarse, que se enamora perdidamente de su compañera de trabajo.");

$lectura = new Lectura(50);

/*
do{
    //pregunto si se desea almacenar un nuevo libro
    echo "¿Desea ingresar un libro a la cantidad de libros leidos?(si/no)";
    $ingreso= trim(fgets(STDIN));
    $ingreso= strtoupper($ingreso);
    //cuento la cantidad de objetos dentro del array
    $i= count($arrayDeObjLibros);
    //ingresa los datos del libro
    echo "ingrese el isbn del libro: ";
    $isbn= trim(fgets(STDIN));
    echo "ingrese el titulo del libro: ";
    $titulo= trim(fgets(STDIN));
    echo "ingrese el año de edicion del libro: ";
    $anioEdicion= trim(fgets(STDIN));
    echo "ingrese la editorial del libro: ";
    $editorial= trim(fgets(STDIN));
    echo "ingrese el nombre de autor del libro: ";
    $nombreAutor= trim(fgets(STDIN));
    echo "ingrese el apellido del autor del libro: ";
    $apellidoAutor= trim(fgets(STDIN));
    echo "ingrese la cantidad de páginas del libro: ";
    $cantPaginas= trim(fgets(STDIN));
    echo "ingrese la sinopsis del libro: ";
    $sinopsis= trim(fgets(STDIN));
    //creamos el objeto libro
    $libro = new Libro($isbn, $titulo, $anioEdicion, $editorial, $cantPaginas, $sinopsis);
    //almaceno el objeto libro dentro del array indexado
    $arrayDeObjLibros=$libro;
}while($ingreso== "SI");
*/


$lectura->setLibro($libro->getTitulo());
echo $lectura . "\n";
$lectura ->agregarLibro();

echo $lectura;

var_dump($lectura->getArrayDeObjLibros());

if($lectura ->libroLeido("palmeras")){
    echo "palmeras está";
}else{
    echo "palmeras no está";
}


?>