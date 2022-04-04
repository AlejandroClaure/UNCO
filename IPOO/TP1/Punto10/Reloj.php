<?php

/**b) Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital 
 * (con las características puesta_a_cero, incremento, etc.).
 *  Cuando el contador llegue a 23:59:59 y reciba el mensaje de incremento deberá pasar a 00:00:00.  */

class Reloj
{
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($horas, $minutos, $segundos)
    {
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }
    /**Devuelve horas
     * @Return number
     */
    public function getHoras()
    {
        return $this->horas;
    }
    /**Devuelve minutos
     * @Return number
     */
    public function getMinutos()
    {
        return $this->minutos;
    }
    /**Devuelve segundos
     * @Return number
     */
    public function getSegundos()
    {
        return $this->segundos;
    }
    /**Selecciona la variable $horas para modificar su valor
     * @param number $numero1
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;
    }
    /**Selecciona la variable $minutos para modificar su valor
     * @param number $numero1
     */
    public function setMinutos($minutos)
    {
        $this->minutos = $minutos;
    }
    /**Selecciona la variable $segundos para modificar su valor
     * @param number $numero1
     */
    public function setSegundos($segundos)
    {
        $this->segundos = $segundos;
    }
    /**Vuelve a 0 todo el contador del reloj */
    public function puesta_a_cero()
    {
        $this->setHoras(0);
        $this->setMinutos(0);
        $this->setSegundos(0);
    }

    public function incremento()
    {
        do {
            if ($this->getHoras() == 23 && $this->getMinutos() == 59 && $this->getSegundos() == 59) {
                //si las horas llegan a 23, 59 minutos y 59 segundos, se hace la puesta a cero.
                $this->puesta_a_cero();
                echo $this->getHoras() . " : " . $this->getMinutos() . " : " . $this->getSegundos() . "\n";
            } else {
                if ($this->getMinutos() >= 59 && $this->getSegundos() >= 59) {
                    //Si el minuto llega a 59, suma 1 a la hora y los minutos vuelven a 0.
                    $this->setHoras($this->getHoras() + 1);
                    $this->setMinutos(0);
                }

                if ($this->getSegundos() >= 59) {
                    //si los segundos llegan a 59, se suma un minuto.
                    $this->setMinutos($this->getMinutos() + 1);
                }
                if ($this->getSegundos() >= 59) {
                    //cuando los segundos llegan a 59, se recetean a 0.
                    $this->setSegundos(0);
                } else {
                    //mientras los segundos no lleguen a 59, se seguiran sumando 1  a los segundos.
                    $this->setSegundos($this->getSegundos() + 1);
                }
                //se crean las variables horas, minutos y segundos para llamarlos.
                $horas = $this->getHoras();
                $minutos = $this->getMinutos();
                $segundos = $this->getSegundos();
                //echo $horas . ":" . $minutos . ":" . $segundos . "\n";
                echo $this;
            }
        } while ($horas = 24);
    }
    
    public function __toString()
    {
        return  $this->getHoras() . " : " . $this->getMinutos() . " : " . $this->getSegundos()."\n";
    }
    
}

/**$p = new Reloj(23, 58, 50);
echo $p->incremento(); */

