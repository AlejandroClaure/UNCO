<?php
/**15. Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. 
 * Cada función tiene un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase, 
 * teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el precio. 
 * Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con las claves “nombre” y “precio”.
 */
class Teatro{
    private $nombre;
    private $direccion;
    private $funcion1=["nombre"=>"funcionUno", "precio"=>" "];
    private $funcion2=["nombre"=>"funcionDos", "precio"=>" "];
    private $funcion3=["nombre"=>"funcionTres", "precio"=>" "];
    private $funcion4=["nombre"=>"funcionCuatro", "precio"=>" "];

    public function __construct($nombre,$direccion, $funcion1, $funcion2, $funcion3, $funcion4){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->funcion1=$funcion1;
        $this->funcion2=$funcion2;
        $this->funcion3=$funcion3;
        $this->funcion4=$funcion4;
    }
    //metodos de acceso get
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFuncion1(){
        return $this->funcion1;
    }
    public function getFuncion2(){
        return $this->funcion2;
    }
    public function getFuncion3(){
        return $this->funcion3;
    }
    public function getFuncion4(){
        return $this->funcion4;
    }
    //metodos de acceso set
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setDireccion($direccion){
        $this->nombre=$direccion;
    }
    public function setFuncion1($funcion1){
        $this->funcion1=$funcion1;
    }
    public function setFuncion2($funcion2){
        $this->funcion2=$funcion2;
    }
    public function setFuncion3($funcion3){
        $this->funcion3=$funcion3;
    }
    public function setFuncion4($funcion4){
        $this->funcion4=$funcion4;
    }

    //cambia el nombre del teatro
    public function cambiarNombreTeatro($nombreNuevo){
        $this->setNombre($nombreNuevo);
    }
    //cambia la direccion del teatro
    public function cambiarDireccionTeatro($direccionNueva){
        $this->setDireccion($direccionNueva);
    }
    //cambia el nombre y precio de la funcion elegida
    public function cambiarFuncion(){
        echo "el nombre de la funcion 1 es: ".$this->getFuncion1["nombre"]."con un precio de: ".$this->getFuncion1["precio"];
        echo "el nombre de la funcion 2 es: ".$this->getFuncion2["nombre"]."con un precio de: ".$this->getFuncion2["precio"];
        echo "el nombre de la funcion 3 es: ".$this->getFuncion3["nombre"]."con un precio de: ".$this->getFuncion3["precio"];
        echo "el nombre de la funcion 4 es: ".$this->getFuncion4["nombre"]."con un precio de: ".$this->getFuncion4["precio"];
        echo "¿Qué funcion desea cambiar?(1,2,3,4)";
        $numFuncion= trim(fgets(STDIN));
        if($numFuncion==1){
            echo "ingrese el nuevo nombre de la funcion 1: ";
            $nuevoNombre= trim(fgets(STDIN));
            $this->funcion1["nombre"]=$nuevoNombre;
            echo "ingrese el nuevo precio de la funcion 1: ";
            $nuevoValor= trim(fgets(STDIN));
            $this->funcion1["precio"]=$nuevoValor;
        }elseif($numFuncion==2){
            echo "ingrese el nuevo nombre de la funcion 2: ";
            $nuevoNombre= trim(fgets(STDIN));
            $this->funcion2["nombre"]=$nuevoNombre;
            echo "ingrese el nuevo precio de la funcion 2: ";
            $nuevoValor= trim(fgets(STDIN));
            $this->funcion2["precio"]=$nuevoValor;
        }elseif($numFuncion==3){
            echo "ingrese el nuevo nombre de la funcion 3: ";
            $nuevoNombre= trim(fgets(STDIN));
            $this->funcion3["nombre"]=$nuevoNombre;
            echo "ingrese el nuevo precio de la funcion 3: ";
            $nuevoValor= trim(fgets(STDIN));
            $this->funcion3["precio"]=$nuevoValor;
        }elseif($numFuncion==4){
            echo "ingrese el nuevo nombre de la funcion 4: ";
            $nuevoNombre= trim(fgets(STDIN));
            $this->funcion4["nombre"]=$nuevoNombre;
            echo "ingrese el nuevo precio de la funcion 4: ";
            $nuevoValor= trim(fgets(STDIN));
            $this->funcion4["precio"]=$nuevoValor;
        }else{
            echo "la función ingresada no existe";
        }
    }

}
?>