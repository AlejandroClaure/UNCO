<?php
/**14. Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el saldo actual y
 *  el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos: 
 * 
 * a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la clase. 

b) Los método de acceso de cada uno de los atributos de la clase. 

c) actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual). 

d) depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta. 

e) retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo). 

f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase. 

g) Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno de los métodos implementados. 
 */

class CuentaBancaria{
    private $numeroCuenta;
    private $dni;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numeroCuenta, $dni, $saldoActual, $interesAnual){
        $this->numeroCuenta=$numeroCuenta;
        $this->dni=$dni;
        $this->saldoActual=$saldoActual;
        $this->interesAnual=$interesAnual;
    }

    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setNumeroCuenta($numeroCuenta){
        return $this->numeroCuenta=$numeroCuenta;
    }
    public function setDni($dni){
        return $this->dni=$dni;
    }
    public function setSaldoActual($saldoActual){
        return $this->saldoActual=$saldoActual;
    }
    public function setInteresAnual($interesAnual){
        return $this->interesAnual=$interesAnual;
    }

    //actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual).
    public function actualizarSaldo(){
        $interes = ($this->getInteresAnual()/365);
        $this->setSaldoActual($this->getSaldoActual()-$interes);
    }
    //depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta. 
    public function depositar($cant){
        $this->setSaldoActual($this->getSaldoActual()+$cant);
    }

    //retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
    public function retirar($cant){
        if($this->getSaldoActual()>=$cant){
        $this->setSaldoActual($this->getSaldoActual()+$cant);
        }else{
            echo "saldo insuficiente.";
        }
    }

    public function __toString(){
        "su cuenta es: ".$this->getNumeroCuenta()."\n".
        "su dni es: ".$this->getDni()."\n".
        "su saldo actual es: ".$this->getSaldoActual()."\n".
        "su interes anual es: ".$this->getInteresAnual()."\n";
    }

}
?>