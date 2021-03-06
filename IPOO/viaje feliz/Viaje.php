<?php

class Viaje
{
    private $codigo;
    private $destino;
    private $cantidadMax;
    private $pasajero;
    private $responsable;
    private $importe;
    private $viajeIda;
    private $viajeVuelta;


    public function __construct($codigo, $destino, $cantidadMax, $importe, $viajeIda, $viajeVuelta)
    {
        $this->pasajero = [];
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMax = $cantidadMax;
        $this->importe = $importe;
        $this->viajeIda = $viajeIda;
        $this->viajeVuelta = $viajeVuelta;
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
        return $this->pasajero;
    }
    public function getResponsable()
    {
        return $this->responsable;
    }
    public function getImporte()
    {
        return $this->importe;
    }
    public function getViajeIda()
    {
        return $this->viajeIda;
    }
    public function getViajeVuelta()
    {
        return $this->viajeVuelta;
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
        $this->pasajero = $pasajeros;
    }

    public function setResponsable($responsable)
    {
        $this->responsable=$responsable;
    }
    public function setImporte($importe)
    {
        $this->importe=$importe;
    }
    public function setViajeIda($viajeIda)
    {
        $this->viajeIda=$viajeIda;
    }
    public function setViajeVuelta($viajeVuelta)
    {
        $this->viajeVuelta=$viajeVuelta;
    }

    /**
     * Método que verifica un número para saber si corresponde al indice dentro del array de pasajeros
     * (este método ya no se usa en la última versión)
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
            if ($pasajero->getNroDoc() == $dni) {
                $valido = true;
                break;
            } else {
                $valido = false;
            }
        }   
        return $valido;
    }

    /**
     * Método para agregar a pasajero
     * @param array $pasajero
     * @return boolean $validacion
     */
    public function agregarPasajeros($pasajero) {
            $arrayPasajeros = $this->getPasajeros();
            array_push($arrayPasajeros, $pasajero);
            $this->setPasajeros($arrayPasajeros);
    }

    /**
     * Método para agregar responsable
     * @param int $nro
     * @param string $nuevo
     */
    public function cambiarDatosResponsable($nro, $nuevo) {
        $responsable=$this->getResponsable();
        switch($nro){
            case "1":
                $responsable->setNombreResponsable($nuevo);
                $this->setResponsable($responsable);
             break;
             
             case "2":
                $responsable->setApellidoResponsable($nuevo);
                $this->setResponsable($responsable);
             break;
             
             case "3":
                $responsable->setNroEmpleado($nuevo);
                $this->setResponsable($responsable);
             break;
             
             case "4":
                $responsable->setNroLicencia($nuevo);
                $this->setResponsable($responsable);
             break;
        }
 
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

    /**
     * Metodo para cambiar el nombre de un pasajero
     * @param string $dni, $nombre
     */
    public function cambiarNombrePasajero($dni, $nombre){
        foreach($this->getPasajeros() as $key=>$pasajero){
            if($pasajero[$dni]== $dni){
                $pasajero->setNombre($nombre);
                break;
            }
        }
    }
        /**
     * Metodo para cambiar el nombre de un pasajero
     * @param string $dni, $apellido
     */
    public function cambiarApellidoPasajero($dni, $apellido){
        foreach($this->getPasajeros() as $key=>$pasajero){
            if($pasajero[$dni]== $dni){
                $pasajero->setApellido($apellido);
                break;
            }
        }
    }    
    
    /**
    * Metodo para cambiar el documento de un pasajero
    * @param string $dni, $dniNuevo
    */
   public function cambiarDocumentoPasajero($dni, $dniNuevo){
       foreach($this->getPasajeros() as $key=>$pasajero){
           if($pasajero[$dni]== $dni){
               $pasajero->setNroDoc($dniNuevo);
               break;
           }
       }
   }

   /**
    * Metodo para cambiar el telefono de un pasajero
    * @param string $dni, $dniNuevo
    */
    public function cambiarTelefonoPasajero($dni, $telefono){
        foreach($this->getPasajeros() as $key=>$pasajero){
            if($pasajero[$dni]== $dni){
                $pasajero->setTelefono($telefono);
                break;
            }
        }
    }



    /**
     * funcion para devolver el string concatenado de pasajeros
     */
    public function stringPasajero(){
        $col= " \n \n *************** \n ";
        foreach($this->getPasajeros() as $key=>$pasajero){
            $col.= $pasajero;
        }
        return $col;
    }

    /**
     * Funcion que verifica si hay pasaje disponible
     * retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario.
     * @return boolean $seVende
     */
    public function hayPasajesDisponible(){
        $seVende= false;
        if(count($this->getPasajeros())<= $this->getCantidadMax()){
            $seVende= true;
        }
        return $seVende;
    }
    /**
     * Función que vende un pasaje, recibe por parametro un pasajero
     * @param obj $pasajero
     * @return int $importe
     */
    public function venderPasaje($pasajero){
            if ($this->getViajeIda() == "si" && $this->getViajeVuelta() == "si") {
                $importe = (($this->getImporte() * 100)/50)+($this->getImporte());
                $this->setImporte($importe);
                $this->agregarPasajeros($pasajero); 
            } else {
                $importe = $this->getImporte();
                $this->agregarPasajeros($pasajero);
            }

            return $importe;    
    }
    /**
     * funcion para devolver el string concatenado del responsable
     */
    public function stringResponsable(){
        $col= " ";
        $col.= $this->getResponsable();
        return $col;

    }
    
    public function __toString()
    {
        return "el código del viaje es: " . $this->getCodigo() . "\n" .
            "el destino del viaje es: " . $this->getDestino() . "\n" .
            "la cantidad máxima de personas del viaje es de: " . $this->getCantidadMax() . "\n".
            "los pasajeros son: ".$this->stringPasajero(). "\n".
            $this->stringResponsable();

    }
}
