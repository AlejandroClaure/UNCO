<?php

/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

 Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (
 incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. 
 Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.
 
 Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita 
 cargar la información del viaje, modificar y ver sus datos. */

class Viaje
{
    private $codigo;
    private $destino;
    private $cantidadMax;
    private $pasajeros = array();

    public function __construct($codigo, $destino, $cantidadMax)
    {
        //los pasajeros se incluirán mediante el método agregarPasajero
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMax = $cantidadMax;
    }

    //metodos de acceso get
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getCantidadMax()
    {
        return $this->cantidadMax;
    }
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    //metodos de acceso set
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }
    public function setCantidadMax($cantidadMax)
    {
        $this->cantidadMax = $cantidadMax;
    }

    public function setPasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;
    }


    /**
     * estos métodos son los mismos que los setters(cambiarCodigo, cambiarDestino, cambiarCantMax), pero se crearon
     * para cumplir con el enunciado
     */

    /**
     * metodo que cambia el código del viaje
     */
    public function cambiarCodigo($nuevoCodigo)
    {
        $this->setCodigo($nuevoCodigo);
    }

    /**
     * metodo que cambia el destino del viaje
     */
    public function cambiarDestino($destino)
    {
        $this->setDestino($destino);
    }

    /**
    * metodo que cambia la cantidad máxima de pasajeros
    * @param int $cantidadMax
    */    
    public function cambiarCantMax($cantidadMax)
     {
         $this->setCantidadMax($cantidadMax);
     }

    /**
     * Método que verifica un número para saber si corresponde al indice dentro del array de pasajeros
     * @param int $num
     * @return boolean $valido
     */
    public function verificarNumero($num){
        if($num>-1 && $num <= count($this->getPasajeros()) && $num <= $this->getCantidadMax()){
            $valido=true;
        }else{
            $valido=false;
        }
        return $valido;
    }

    /**
     * Método para verificar si un DNI está en el array de pasajeros
     * @param int $dni
     * @return boolean $valido
     */
    public function verificarDni($dni){   
        $valido= false;
        foreach($this->getPasajeros() as $key => $pasajero) {
            if ($pasajero["documento"] == $dni) {
                $valido = true;
                break;
            } else {
                $valido = false;
            }
        }   
        return $valido;
    }

    /**
     * Método para modificar un pasajero
     * @param int $num
     * @param string $cambio, $key
     */
    public function modificarPasajero($num, $cambio, $key)
    {
        $arrayPasajeros= $this->getPasajeros();
        $arrayPasajeros[$num][$key]=$cambio;
        $this->setPasajeros($arrayPasajeros);
    }

    /**
     * Método para agregar a pasajero
     * @param array $pasajero
     * @return boolean $validacion
     */
    public function agregarPasajeros($pasajero) {
        if (count($this->getPasajeros()) <= $this->getCantidadMax()) {
            $arrayPasajeros = $this->getPasajeros();
            array_push($arrayPasajeros, $pasajero);
            $this->setPasajeros($arrayPasajeros);
            $validacion = true;
        } else {
            $validacion = false;
        }
        return $validacion;
    }

    /**
     * Método para eliminar un pasajero
     * @param int $num
     */
    public function eliminarPasajero($num){
        $arrayPasajeros= $this->getPasajeros();
        $eliminarPasajero= $this->getPasajeros()[$num];
        if(in_array($eliminarPasajero, $arrayPasajeros)){
            array_splice($arrayPasajeros, $num, 1);
            $this->setPasajeros($arrayPasajeros);
        }
    }

    
    public function __toString()
    {
        return "el código del viaje es: " . $this->getCodigo() . "\n" .
            "el destino del viaje es: " . $this->getDestino() . "\n" .
            "la cantidad máxima de personas del viaje es de: " . $this->getCantidadMax() . "\n";
    }
}
?>