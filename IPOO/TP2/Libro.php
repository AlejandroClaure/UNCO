<?php
/**16. Cree una clase Libro que tenga los atributos ISBN(codigo que identifica a cada libro), titulo, año de edición, editorial, nombre y apellido del autor. Defina en la clase los siguientes métodos: 

a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la clase. 

b) Los método de acceso de cada uno de los atributos de la clase. 

c) Método __toString() que retorne la información de los atributos de la clase. 

d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro una editorial y
 devuelve un valor verdadero/falso. 

 e)aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.

f) Cree un script TestLibro que:
1) defina el método iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por
parámetro ya se encuentra en dicha colección.
2) defina el método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
con todos los libros publicados por la editorial dada.
3) cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Librof)
 iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por parámetro ya se encuentra en dicha colección. 

 */
class Libro{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreAutor;
    private $apellidoAutor;
    private $cantPaginas;
    private $sinopsis;

    public function __construct($isbn, $titulo, $anioEdicion, $editorial, $cantPaginas, $sinopsis){
        //$nombreAutor, $apellidoAutor
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->anioEdicion=$anioEdicion;
        $this->editorial=$editorial;
        //$this->nombreAutor=$nombreAutor;
       //$this->apellidoAutor=$apellidoAutor;
        $this->cantPaginas= $cantPaginas;
        $this->sinopsis=$sinopsis;
    }
    //metodos de acceso get
    public function getISBN(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }

    public function getNombreAutor(){
        return $this->nombreAutor;
    }
    public function getApellidoAutor(){
        return $this->apellidoAutor;
    }
    public function getCantPaginas() {
        return $this->cantPaginas;
    }
    public function getSinopsis() {
        return $this->sinopsis;
    }
    //metodos de acceso set
    public function setISBN($isbn){
        $this->isbn=$isbn;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function setAnioEdicion($anioEdicion){
        $this->anioEdicion=$anioEdicion;
    }
    public function setEditorial($editorial){
        $this->editorial=$editorial;
    }
    public function setNombreAutor($nombreAutor){
        $this->nombreAutor=$nombreAutor;
    }
    public function setApellidoAutor($apellidoAutor){
        $this->apellidoAutor=$apellidoAutor;
    }
    public function setCantPaginas($paginas) {
        $this->cantPaginas = $paginas;
    }
    public function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    //perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro una editorial y
    //devuelve un valor verdadero/falso. 
    public function perteneceEditorial($peditorial){
            if($peditorial == $this->getEditorial()){
                $pertenece= true;
            }else{
                $pertenece= false;
            }
            return $pertenece;
    }

    // iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por parámetro ya se encuentra en dicha colección
    public function iguales($plibro,$parreglo){
        $cont= count($parreglo);
        $seEncuentra=false;
        $i=0;
        do{
            if($plibro == $parreglo[$i]){
                $seEncuentra= true;
            }else{
                $seEncuentra=false;
            }
            $i++;
    }while($seEncuentra== false || $i<=$cont);
        return $seEncuentra;
    }
    //aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.
    public function aniosdesdeEdicion(){
        $anios= date("Y") - $this->getAnioEdicion();
        return $anios;
    }
    //método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
    //con todos los libros publicados por la editorial dada.
    public function librodeEditoriales($arregloLibros, $peditorial){
        //declaro el array donde se van a guardar los libros guardados por la editorial
        $LibrosDeEditorial=[""];
        $cant= count($arregloLibros);
        for($i=0;$i<=$cant;$i++){
            if($arregloLibros[$i]["editorial"]== $peditorial){
                $LibrosDeEditorial[$i]=$arregloLibros[$i];
            }
        }
        return $LibrosDeEditorial;
    }
     public function __toString()
     {
        return "isbn: ".$this->getISBN()."\n".
         "titulo: ".$this->getTitulo()."\n".
         "año edicion: ".$this->getAnioEdicion()."\n".
         "editorial: ".$this->getEditorial()."\n".
         "nombre de Autor: ".$this->getNombreAutor()."\n".
         "apellido de Autor: ".$this->getApellidoAutor()."\n".
         "cant páginas del libro: ".$this->getCantPaginas()."\n".
         "sinopsis del libro: " .$this->getSinopsis()."\n";

     }
}