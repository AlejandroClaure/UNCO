<?php
/**13.Desarrollar una clase Cafetera con los atributos capacidadMaxima (la cantidad máxima de café que puede contener la cafetera) y
 *  cantidadActual (la cantidad actual de café que hay en la cafetera). Implementar los siguientes métodos: 

a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la clase. 

b) Los método de acceso de cada uno de los atributos de la clase.

c) llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera. 

d) servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada. 
Si la cantidad actual de café “no alcanza” para llenar la taza, 
se sirve lo que quede y se envía un mensaje al consumidor para que sepa porque no se le sirvió un taza completa. 

e) vaciarCafetera(): pone la cantidad de café actual en cero. 

f) agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada. 

g) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase. 

h) Crear un script Test_Cafetera que cree un objeto Cafetera e invoque a cada uno de los métodos implementados. 
 */

 //clase cafetera usando arrays
class Cafetera{
    private $capacidadMaxima=[];
    private $cantidadActual=[];

    public function __construct($capacidadMaxima, $cantidadActual){
        $capacidadMaxima= array_fill(0, $capacidadMaxima, "☕");
        $this->capacidadMaxima= $capacidadMaxima;
        $this->cantidadActual= $cantidadActual;

    }
    public function getCapacidadMax(){
        return $this->capacidadMaxima;
    }
    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function setCapacidadMaxima($capacidadMaxima){
        $this->capacidadMaxima= $capacidadMaxima;
    }
    public function setCantidadActual($cantidadActual){
        $this->cantidadActual=$cantidadActual;
    }

    /**llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera. */
    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMax());
    }

    /**servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada. 
Si la cantidad actual de café “no alcanza” para llenar la taza, 
se sirve lo que quede y se envía un mensaje al consumidor para que sepa porque no se le sirvió un taza completa. */
public function servirTaza($cantidad){
    $contadorCant=0;
    for($i=0; $i<=$cantidad; $i++){
        $contadorCant++;
        $cant= count($this->getCantidadActual());
        if($cant>0){
            $this->setCantidadActual(array_pop($this->getCantidadActual()));
            $msg= "taza servida correctamente.";
        }else{
            $msg= "la cantidad de café no alcanza para llenar la taza y solo se le pudo servir ".$contadorCant. "ml";
            break;
        }
    }
    return $msg;
}
/**vaciarCafetera(): pone la cantidad de café actual en cero.  */
public function vaciarCafetera(){
            $cant= count($this->getCantidadActual());
            for($i=0; $i<=$cant; $i++){
                    $this->setCantidadActual(array_pop($this->getCantidadActual()));
                }
}
/**agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada. */
public function agregarCafe($cantidad){
    $cantMax = count($this->getCapacidadMax());
    $cantAct = count($this->getCantidadActual());
    
    for($i=$cantAct;$i<=$cantidad;$i++){
        $this->setCantidadActual[$i]("☕");
        $msg= "café añadido correctamente";
        if($i==$cantMax){
            $resta= $cantidad - $i;
            $msg= "sobran ".$resta. "ml de café";
            break;
        }
    }
    return $msg;
}
public function toString(){
    return "La cantidad actual de la cafetera es: ".$this->getCantidadActual()."\n".
            "La cantidad Máxima de la cafetera es: ".$this->getCapacidadMax()."\n";
}

}

//clase cafetera usando variables solo con enteros
/**class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function construct($cantidadActual, $capacidadMaxima){
        $this->cantidadActual = $cantidadActual;
        $this->capacidadMaxima = $capacidadMaxima;
    }

    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }

    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }


    public function setCantidadActual($cantidadActual){
        $this->cantidadActual = $cantidadActual;

    }
    public function setCapacidadMaxima($capacidadMaxima){
        $this->capacidadMaxima = $capacidadMaxima;
    }

    public function servirTaza($cantidad){
        if($this->getCantidadActual() <= $cantidad){
            echo "la cantidad de café actual no alcanza para llenar la taza, por lo que solo se le pudo servir: ".$this->getCantidadActual()." ml de la taza." ;
            $this->setCantidadActual(0);
        }else{
            echo "la taza se ha llenado";
            $this->setCantidadActual($this->getCantidadActual() - $cantidad);
        }
    }

    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }

    public function agregarCafe($cantidad){
        $limite= $this->getCapacidadMaxima() - $this->getCantidadActual();
        if($limite >= 0 && $cantidad <= $limite){
            $this->setCantidadActual($this->getCantidadActual() + $cantidad);
        }else{
            echo "la capacidad máxima excede el límite";
        }
    }

    public function toString(){
        return "La cantidad actual de la cafetera es: ".$this->getCantidadActual()."\n".
                "La cantidad Máxima de la cafetera es: ".$this->getCapacidadMaxima()."\n";
    }

} */
?>