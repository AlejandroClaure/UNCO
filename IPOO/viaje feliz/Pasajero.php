<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $telefono;
    public function __construct($nombre, $apellido, $nroDoc, $telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->nroDoc=$nroDoc;
        $this->telefono=$telefono;
    }
    //metodos get
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNroDoc(){
        return $this->nroDoc;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    //metodos set
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setNroDoc($nroDoc){
        $this->nroDoc=$nroDoc;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    /**
     * Función toString
     */
    public function __toString()
    {
        return 
        "Nombre del Pasajero: ".$this->getNombre()."\n".
        "Apellido del Pasajero: ".$this->getApellido()."\n".
        "Numero de documento del Pasajero: ".$this->getNroDoc()."\n".
        "Numero de telefono del Pasajero: ".$this->getTelefono()."\n";
    }
}
?>