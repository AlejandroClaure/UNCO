<?php

/**d) Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la contraseña ingresada y 
 * las ultimas 4 contraseñas utilizadas. 
 * Implementar un método que permita validar una contraseña con la almacenada y 
 * un método para cambiar la contraseña actual por otra nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada 
 * recientemente (es decir no se encuentra dentro de las cuatro almacenadas). 
 * Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña. */
class Login
{
    private $nombreUsuario;
    private $contraseña;
    private $fraseRecuperación;
    private $exContraseñas = [""];

    public function __construct($nombreUsuario, $contraseña, $fraseRecuperación, $exContraseñas)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseña = $contraseña;
        $this->fraseRecuperación = $fraseRecuperación;
        $this->exContraseñas = $exContraseñas;
    }
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }
    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function getFraseRecuperacion()
    {
        return $this->fraseRecuperación;
    }
    public function getExContraseñas()
    {
        return $this->exContraseñas;
    }
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }
    public function setFraseRecuperacion($fraseRecuperación)
    {
        $this->fraseRecuperación = $fraseRecuperación;
    }
    public function setExContraseñas($exContraseñas)
    {
        $this->exContraseñas = $exContraseñas;
    }

    public function validarContrasenia($contraseña)
    {
        if ($this->getContraseña() == $contraseña) {
            $contraseniaValida = true;
        } else {
            $contraseniaValida = false;
        }
        return $contraseniaValida;
    }
    public function cambiarContrasenia($contra)
    {

        do {
            for ($i = 0; $i <= 4; $i++) {

                if ($contra == $this->getExContraseñas()[$i]) {
                   
                    echo "La contraseña ya se ha usado, ¿Desea intentarlo nuevamente?(si/no)";
                    $contra = trim(fgets(STDIN));

                    if ($contra == "si") {
                        $contrasenia = true;
                    } elseif ($contra == "no") {
                        $contrasenia = false;
                    }
                } else {
                    array_push($this->getExContraseñas(), $contra);
                        if($this->getExContraseñas()[4]!= null){
                            array_shift($this->getExContraseñas());
                        }
                    $contrasenia = false;
                }
            }
        } while ($contrasenia == true);
    }
    public function recordar(){
        echo $this->getFraseRecuperacion();
    }
    public function __toString()
    {
        return  $this->getNombreUsuario() . ", " . $this->getContraseña() . ", " . $this->getFraseRecuperacion().", " . $this->getExContraseñas()."\n";
    }

}
