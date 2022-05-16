<?php
/**De los viajes aéreos se conoce el número del vuelo, la categoría del asiento (primera clase o no), 
nombre de la aerolínea, y la cantidad de escalas del vuelo en caso de tenerlas.  */
class Aereo extends Viaje{
    private $numeroVuelo;
    private $categoria;
    private $nombreAerolinea;
    private $cantidadEscalas;

    public function __construct($codigo, $destino, $cantidadMax, $importe, $viajeIda, $viajeVuelta, $numeroVuelo, $categoria, $nombreAerolinea, $cantidadEscalas){
        
        parent::__construct($codigo, $destino, $cantidadMax, $importe, $viajeIda, $viajeVuelta);
        $this->numeroVuelo = $numeroVuelo;
        $this->categoria = $categoria;
        $this->nombreAerolinea = $nombreAerolinea;
        $this->cantidadEscalas = $cantidadEscalas;
    }
    //metodos get
    public function getNumeroVuelo(){
        return $this->numeroVuelo;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getNombreAerolinea(){
        return $this->nombreAerolinea;
    }
    public function getCantidadEscalas(){
        return $this->cantidadEscalas;
    }
    //metodos set
    public function setNumeroVuelo($numeroVuelo){
        $this->numeroVuelo=$numeroVuelo;
    }
    public function setCategoria($categoria){
        $this->categoria= $categoria;
    }
    public function setNombreAerolinea($nombreAerolinea){
        $this->nombreAerolinea=$nombreAerolinea;
    }
    public function setCantidadEscalas($cantidadEscalas){
        $this->cantidadEscalas=$cantidadEscalas;
    }


    public function venderPasaje($pasajero)
    {
        if ($this->getCategoria() && $this->getCantidadEscalas() == 0) {
            $importe = parent::venderPasaje($pasajero);
            $importe = (($importe * 100)/40)+$importe;   
            $this->setImporte($importe);    
        } else if ($this->getCategoria() && $this->getCantidadEscalas() > 0) {
            $importe = parent::venderPasaje($pasajero);
            $importe = (($importe * 100)/60)+$importe;
            $this->setImporte($importe);
        }
        return $importe;
    }

    /**
     * Se redefine el metodo toString
     */

     public function __toString()
     {
         $cadena = parent::__toString();
        $cadena.="\n Numero de vuelo: ".$this->getNumeroVuelo()."\n".
        $cadena.="\n La categoria es: ".$this->getCategoria()."\n".
        $cadena.="\n El nombre de la aerolinea es: ".$this->getNombreAerolinea()."\n".
        $cadena.="\n La cantidad de escalas es: ".$this->getCantidadEscalas()."\n";
        return $cadena;
     }
}
?>