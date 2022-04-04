<?php
/**11. Crear una clase Cuadrado que modele cuadrados por medio de cuatro puntos (los vértices). 
 * Puede utilizar arreglos asociativos para implementar cada uno de los vértices. La clase dispondrá de los siguientes métodos: 

a) Método constructor _ _construct () que recibe como parámetros las coordenadas de los puntos. 

b) Los métodos de acceso de cada uno de los atributos de la clase. 

c) area(): método que calcula el área del cuadrado. 

d) desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano desde su punto mas inferior izquierdo. 

e) aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado. 

f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase. 

g) Crear un script Test_Cuadrado que cree un objeto Cuadrado e invoque a cada uno de los métodos implementados.
 */
class Cuadrado{
    
        private $verticeA= ["x"=>0, "y"=>0];
        private $verticeB= ["x"=>0, "y"=>0];
        private $verticeC= ["x"=>0, "y"=>0];
        private $verticeD= ["x"=>0, "y"=>0];

        //a) Método constructor _ _construct () que recibe como parámetros las coordenadas de los puntos. 
        public function __construct($verticeA, $verticeB, $verticeC, $verticeD){
            $this->verticeA= $verticeA;
            $this->verticeA= $verticeB;
            $this->verticeA= $verticeC;
            $this->verticeA= $verticeD;
        }
        //b) Los métodos de acceso de cada uno de los atributos de la clase. 
        public function getVerticeA(){
            return $this->verticeA;
        }
        public function getVerticeB(){
            return $this->verticeB;
        }
        public function getVerticeC(){
            return $this->verticeC;
        }
        public function getVerticeD(){
            return $this->verticeD;
        }
        public function setVerticeA($verticeA){
            $this->verticeA=$verticeA;
        }
        public function setVerticeB($verticeB){
            $this->verticeB=$verticeB;
        }
        public function setVerticeC($verticeC){
            $this->verticeC=$verticeC;
        }
        public function setVerticeD($verticeD){
            $this->verticeD=$verticeD;
        }
        //c) area(): método que calcula el área del cuadrado.
        public function area(){
            $aB=abs($this->getVerticeA()["x"]) - $this->getVerticeB()["x"];
            $cD=abs($this->getVerticeC()["x"]) - $this->getVerticeD()["x"];
            //$lado = ($this->getVerticeB()["x"] - $this->getVerticeA()["x"]);
            //$area = pow($lado,2);
            $area = $aB - $cD;
            return $area;
        }

        //d) desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano desde su punto mas inferior izquierdo. 
        public function desplazar($d){

        }

        //e) aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado. 
        public function aumentarTamaño($t){

        }
        //f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
        public function __toString(){
            return $this->getVerticeA() .", ". $this->getVerticeB() .", ".$this->getVerticeC() .", ". $this->getVerticeD();
        }

}