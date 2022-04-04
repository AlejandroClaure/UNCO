<?php

/**c) Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y necesarios para almacenar el día, 
 * el mes y el año, además de métodos que devuelvan un String con la fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) . 
 * Implementar una función incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado de incrementar 
 * la fecha recibida por parámetro en el numero de días definido por el parámetro entero. 
 * Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de cuatrocientos, en cuyo caso si son bisiestos. 
 * Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia. */
class Fecha
{
    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia, $mes, $anio)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }
    public function getDia()
    {
        return $this->dia;
    }
    public function getMes()
    {
        return $this->mes;
    }
    public function getAnio()
    {
        return $this->anio;
    }
    public function setDia($dia)
    {
        $this->dia = $dia;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;
    }
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    public function fechaAbreviada()
    {
        $fecha = $this->getDia() . "/" . $this->getMes() . "/" . $this->getAnio();
        return $fecha;
    }
    public function fechaExtendida()
    {
        //"1","2","3","4","5","6","7","8","9","10","11","12"
        //si el mes está en número, lo pasamos a un string con el nombre del mes
        if ($this->getMes() == 1) {
            $this->setMes("enero");
        } elseif ($this->getMes() == 2) {
            $this->setMes("febrero");
        } elseif ($this->getMes() == 3) {
            $this->setMes("marzo");
        } elseif ($this->getMes() == 4) {
            $this->setMes("abril");
        } elseif ($this->getMes() == 5) {
            $this->setMes("mayo");
        } elseif ($this->getMes() == 6) {
            $this->setMes("junio");
        } elseif ($this->getMes() == 7) {
            $this->setMes("julio");
        } elseif ($this->getMes() == 8) {
            $this->setMes("agosto");
        } elseif ($this->getMes() == 9) {
            $this->setMes("septiembre");
        } elseif ($this->getMes() == 10) {
            $this->setMes("octubre");
        } elseif ($this->getMes() == 11) {
            $this->setMes("noviembre");
        } elseif ($this->getMes() == 12) {
            $this->setMes("diciembre");
        }

        $meses = [
            "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto",
            "septiembre", "octubre", "noviembre", "diciembre"];

        if (in_array($this->getMes(), $meses)) {
            $fecha = $this->getDia() . " de " . $this->getMes() . " de " . $this->getAnio();
            echo $fecha;
        }else {
            echo "ingrese una fecha válida";
        }
    }
    
    public function incremento(){
        
    }
}
