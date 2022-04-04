<?php
include "Libro.php";
include "Persona.php";

$libro = new Libro(20, "La Tregua", 1960, "Flores", 300, "Narra la vida de Martín Santomé, un hombre viudo y cercano a jubilarse, que se enamora perdidamente de su compañera de trabajo.");
$persona= new Persona("ale", "claure", 2833);
$libro->setNombreAutor($persona->getNombre());
$libro->setApellidoAutor($persona->getApellido());
echo $libro;
?>