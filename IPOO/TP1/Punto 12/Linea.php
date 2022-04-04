<?php
/**12.Definir una clase Linea con cuatro atributos: pA , p B, pC y pD donde ( pA , p B ) y ( pC,pD ) 
 * son 2 puntos por los que pasa la línea en un espacio de dos dimensiones. La clase dispondrá de los siguientes métodos: 

a) Método constructor _ _construct() que recibe como parámetros las coordenadas de los puntos. 

b) Los métodos de acceso de cada uno de los atributos de la clase. 

c) mueveDerecha($d): Desplaza la línea a la derecha la distancia(d) que se recibe por parámetro. 

d) mueveIzquierda($d): Desplaza la línea a la izquierda la distancia(d) que se recibe por parámetro. 

e) mueveArriba($d): Desplaza la línea hacia arriba la distancia que se recibe por parámetro. 

f) mueveAbajo($d): Desplaza la línea hacia abajo la distancia que se recibe por parámetro. 

g) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.

h) Crear un script Test_Linea que cree un objeto Linea e invoque a cada uno de los métodos implementados. 
 */
class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($pA, $pB, $pC, $pD){
        $this->pa=$pA;
        $this->pb=$pB;
        $this->pc=$pC;
        $this->pd=$pD;
    }
    public function getPA(){
        return $this->pa;
    }
    public function getPB(){
        return $this->pb;
    }
    public function getPC(){
        return $this->pc;
    }
    public function getPD(){
        return $this->pd;
    }
    public function setPA($pA){
        $this->pa=$pA;
    }
    public function setPB($pB){
        $this->pb=$pB;
    }
    public function setPC($pC){
        $this->pc=$pC;
    }
    public function setPD($pD){
        $this->pd=$pD;
    }
    
    public function mueveDerecha($d) {
        return ($this->pA = $this->getpA() + $d) . ($this->pC = $this->getpC() + $d);
    }

    public function mueveIzquierda($d) {
        return ($this->pA = $this->getpA() - $d) . ($this->pC = $this->getpC() - $d);
    }

    public function mueveArriba($d) {
        return ($this->pB = $this->getpB() + $d) . ($this->pD = $this->getpD() + $d);
    }

    public function mueveAbajo($d) {
        return ($this->pB = $this->getpB() - $d) . ($this->pD = $this->getpD() - $d);
    }
}
 
?>