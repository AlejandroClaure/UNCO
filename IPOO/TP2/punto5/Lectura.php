<?php

/**5. Realizar las modificaciones que crea necesaria en la clase implementada en el punto 4 para poder almacenar
información de los libros que va leyendo una persona. Implementar los siguientes métodos:
a) libroLeido($titulo): retorna true si el libro cuyo título recibido por parámetro se encuentra dentro del
conjunto de libros leídos y false en caso contrario.
b) darSinopsis($titulo): retorna la sinopsis del libro cuyo título se recibe por parámetro.
c) leidosAnioEdicion($x): que retorne todos aquellos libros que fueron leídos y su año de edición es un
año X recibido por parámetro.
d) darLibrosPorAutor($nombreAutor): retorna todos aquellos libros que fueron leídos y el nombre de su
autor coincide con el recibido por parámetro.
 */
class Lectura
{
    private $libro;
    private $numPagina;
    private $arrayDeObjLibros = [];

    // (a) Método construct
    public function __construct($numPagina)
    {
        $this->numPagina = $numPagina;
    }

    // (b) Métodos de acceso
    public function getLibro()
    {
        return $this->libro;
    }
    public function setLibro($libro)
    {
        $this->libro = $libro;
    }

    public function getNumPagina()
    {
        return $this->numPagina;
    }
    public function setNumPagina($numPagina)
    {
        $this->numPagina = $numPagina;
    }

    public function getArrayDeObjLibros()
    {
        return $this->arrayDeObjLibros;
    }
    public function setArrayDeObjLibros($arrayDeObjLibros)
    {
        $this->arrayDeObjLibros = $arrayDeObjLibros;
    }

    // (c) Método siguientePagina()
    public function siguientePagina()
    {
        $this->setNumPagina($this->getNumPagina() + 1);
    }

    // (d) Método retrocederPagina()
    public function retrocederPagina()
    {
        $this->setNumPagina($this->getNumPagina() - 1);
    }

    // (e)
    public function irPagina($x)
    {
        $this->setNumPagina($x);
    }
    //agregar un nuevo libro a la colección

    public function agregarLibro()
    {
        //ingresa los datos del libro
        echo "ingrese el isbn del libro: ";
        $isbn = trim(fgets(STDIN));
        echo "ingrese el titulo del libro: ";
        $titulo = trim(fgets(STDIN));
        echo "ingrese el año de edicion del libro: ";
        $anioEdicion = trim(fgets(STDIN));
        echo "ingrese la editorial del libro: ";
        $editorial = trim(fgets(STDIN));
        echo "ingrese el nombre de autor del libro: ";
        $nombreAutor = trim(fgets(STDIN));
        echo "ingrese el apellido del autor del libro: ";
        $apellidoAutor = trim(fgets(STDIN));
        echo "ingrese la cantidad de páginas del libro: ";
        $cantPaginas = trim(fgets(STDIN));
        echo "ingrese la sinopsis del libro: ";
        $sinopsis = trim(fgets(STDIN));
        //creamos el objeto libro
        $libro = new Libro($isbn, $titulo, $anioEdicion, $editorial, $nombreAutor, $apellidoAutor, $cantPaginas, $sinopsis);
        //almaceno el objeto libro dentro del array indexado
        $this->setArrayDeObjLibros($libro);
        return $this->getArrayDeObjLibros();
    }
    /**a) libroLeido($titulo): retorna true si el libro cuyo título recibido por parámetro se encuentra dentro del
conjunto de libros leídos y false en caso contrario. */
    public function libroLeido($titulo)
    {
        //probando con bucle for
        $array = $this->getArrayDeObjLibros();
        $cont = count($array);
        do{
        for ($i = 0; $i <=$cont ; $i++) {
            if ($array[$i][$this->getEditorial()] == $titulo) {
                $libroLeido = true;
            } else {
                $libroLeido = false;
            }
        }
    }while($libroLeido== false || $i<=$cont);
    return $libroLeido;
    }

    /**b) darSinopsis($titulo): retorna la sinopsis del libro cuyo título se recibe por parámetro. */
    public function darSinopsis($titulo)
    {
    }
    /**c) leidosAnioEdicion($x): que retorne todos aquellos libros que fueron leídos y su año de edición es un
año X recibido por parámetro. */
    public function leidosAnioEdicion($x)
    {
    }
    /**d) darLibrosPorAutor($nombreAutor): retorna todos aquellos libros que fueron leídos y el nombre de su
autor coincide con el recibido por parámetro.*/
    public function darLibrosPorAutor($nombreAutor)
    {
    }

    // (f)
    public function __toString()
    {
        return "El libro seleccionado es: " . $this->getLibro() . "\n" .
            "El número de la página seleccionada es: " . $this->getNumPagina();
    }
}
