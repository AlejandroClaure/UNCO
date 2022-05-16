<?php
/**De los viajes terrestres se conoce la comodidad del asiento, si es semicama o cama.
 */
class Terrestres extends Viaje{
    
    private $comodidadAsiento;
    public function __construct($codigo, $destino, $cantidadMax, $importe, $viajeIda, $viajeVuelta, $comodidadAsiento){
        parent::__construct($codigo, $destino, $cantidadMax, $importe, $viajeIda, $viajeVuelta);
        $this->comodidadAsiento= $comodidadAsiento;
    }

    public function getComodidadAsiento(){
        return $this->comodidadAsiento;
    }
    public function setComodidadAsiento($comodidadAsiento){
        $this->comodidadAsiento=$comodidadAsiento;
    }

    /**
     * se redefine la funcion venderPasaje
     */

    public function venderPasaje($pasajero)
    {
        if ($this->getComodidadAsiento() == "cama") {
            $importe = parent::venderPasaje($pasajero);
            $importe = (($importe * 100)/25)+ $importe;
            $this->setImporte($importe);
        } else {
            $importe = parent::venderPasaje($pasajero);
        }
        return $importe;
    }
    /**
     * Se redefine el metodo toString
     */

    public function __toString()
    {
        $cadena = parent::__toString();
       $cadena.="\n La comodidad de asiento es: ".$this->getComodidadAsiento()."\n";
       return $cadena;
    }

}
