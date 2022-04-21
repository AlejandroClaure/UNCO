<?php
class ResponsableV{
    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;
    public function __construct($nroEmpleado, $nroLicencia, $nombre, $apellido){
        $this->nroEmpleado=$nroEmpleado;
        $this->nroLicencia=$nroLicencia;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
    //metodos get
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }
    public function getNroLicencia(){
        return $this->nroLicencia;
    }
    public function getNombreResponsable(){
        return $this->nombre;
    }
    public function getApellidoResponsable(){
        return $this->apellido;
    }

    //metodos set
    public function setNroEmpleado($nroEmpleado){
        $this->nroEmpleado=$nroEmpleado;
    }
    public function setNroLicencia($nroLicencia){
        $this->nroLicencia=$nroLicencia;
    } 
    public function setNombreResponsable($nombre){
        $this->nombre=$nombre;
    }
    public function setApellidoResponsable($apellido){
        $this->apellido=$apellido;
    }

    /**
     * Función toString
     */
    public function __toString()
    {
        return 
        "Nombre del Empleado Responsable: ".$this->getNombreResponsable()."\n".
        "Apellido del Empleado Responsable: ".$this->getApellidoResponsable()."\n".
        "Numero de Empleado del Empleado Responsable: ".$this->getNroEmpleado()."\n".
        "Numero de Licencia del Empleado Responsable: ".$this->getNroLicencia()."\n";
    }
}
?>