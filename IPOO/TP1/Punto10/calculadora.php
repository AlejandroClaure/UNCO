<?php
//a) Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, / 
class Calculadora{
    //obtención del número
    private $numero;
    private $numero2;
    private $resultado;
    public function __construct($numero, $numero2){
$this->num1= $numero;
$this->num2= $numero2;
    }
    /**Devuelve num1
     * @Return number
     */
    public function getNum1(){
        return $this->num1;
    }
    /**Devuelve num2
     * @Return number
     */
    public function getNum2(){
        return $this->num2;
    }
    /**Selecciona la variable $numero para modificar su valor
     * @param number $numero1
     */
    public function setNum1($numero){
        $this-> num1=$numero;
    }
    /**Selecciona la variable $numero2 para modificar su valor
     * @param number $numero2
     */
    public function setNum2($numero2){
        $this-> num2=$numero2;
    }
    /**Realiza una suma
     * @Return number
     */
    public function suma(){
        $suma= $this->getNum1() + $this->getNum2();
        return $suma;
    }
    /**Realiza una resta
     * @Return number
     */
    public function resta(){
        $resta= $this->getNum1() - $this->getNum2();
        return $resta;
    }
    /**Realiza una multiplicacion
     * @Return number
     */
    public function multiplicar(){
        $multiplicacion= $this->getNum1() * $this->getNum2();
        return $multiplicacion;
    }
    /**Realiza una dividision
     * @Return number
     */
    public function dividir(){
        $division= $this->getNum1() / $this->getNum2();
        return $division;
    }
    public function __toString ( ) {
         return " ( " . $this->getNum1 ( ) . " , " . $this->getNum2( ) . " ) " ;
    }
}
echo"ingrese dos valores:";
$num1=trim(fgets(STDIN));
$num2=trim(fgets(STDIN));
$p= new calculadora($num1, $num2);
echo"¿que operación desea realizar?(suma o +, resta o -, multiplicacion o -, division o /)";
$operador=trim(fgets(STDIN));
if($operador= "suma"||$operador= "+"){
    $total= $p->suma();
echo "el total es: ".$total;
}elseif($operador= "resta"||$operador= "-"){
    echo "el total es: ".$p->resta();
    }elseif($operador= "multiplicacion"||$operador= "*"){
        echo "el total es: ".$p->multiplicar();
        }elseif($operador= "division"||$operador= "/"){
            echo "el total es: ".$p->dividir();
        }
