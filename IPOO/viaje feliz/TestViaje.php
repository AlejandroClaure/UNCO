<?php
include "Viaje.php";
include "ResponsableV.php";
include "Pasajero.php";
$viaje = new Viaje(235, "SanMartin", 20);
echo "ingrese el nombre del responsable del viaje: ";
$nombre = strtoupper(trim(fgets(STDIN)));
echo "ingrese el apellido del responsable del viaje: ";
$apellido = strtoupper(trim(fgets(STDIN)));
echo "ingrese el numero de empleado del responsable del viaje: ";
$nroEmpleado = strtoupper(trim(fgets(STDIN)));
echo "ingrese el numero de licencia del responsable del viaje: ";
$nroLicencia = strtoupper(trim(fgets(STDIN)));

$responsable = new ResponsableV($nroEmpleado, $nroLicencia, $nombre, $apellido);
$viaje->setResponsable($responsable);

echo "¿Desea realizar cambios al viaje?(si/no)";
$cambio = trim(fgets(STDIN));
$cambio = strtoupper($cambio);
if ($cambio == "SI" || $cambio == "NO") {
    while ($cambio == "SI") {
        echo "ingrese la opción que desea cambiar: \n";
        echo "1) Cambiar código del viaje\n";
        echo "2) Cambiar destino del viaje\n";
        echo "3) Cambiar cantidad máxima de pasajeros\n";
        echo "4) Agregar un Pasajero\n";
        echo "5) Cambiar datos de un Pasajero\n";
        echo "6) Borrar datos de un Pasajero\n";
        echo "7) Cambiar datos del Responsable\n";
        echo "8) Mostrar datos\n";
        echo "9) salir.\n";
        $opcion = trim(fgets(STDIN));

        switch ($opcion) {
            case "1":
                echo "Ingrese el nuevo código de viaje: \n";
                $codigo = trim(fgets(STDIN));
                $viaje->setCodigo($codigo);
                break;
            case "2":
                echo "ingrese el nuevo destino: ";
                $destino = trim(fgets(STDIN));
                $viaje->setDestino($destino);
                break;
            case "3":
                echo "ingrese la nueva cantidad máxima de pasajeros: \n";
                $cantMax = trim(fgets(STDIN));
                $viaje->setCantidadMax($cantMax);
                break;
            case "4":
                $cont = count($viaje->getPasajeros());
                if ($cont >= $viaje->getCantidadMax()) {
                    echo "se ha alcanzado la cantidad máxima de pasajeros.\n";
                } else {
                    echo "ingrese el nombre del nuevo pasajero: \n";
                    $nombre = trim(fgets(STDIN));
                    echo "ingrese el apellido del nuevo pasajero: \n";
                    $apellido = trim(fgets(STDIN));
                    echo "ingrese el documento del nuevo pasajero: \n";
                    $documento = trim(fgets(STDIN));
                    echo "ingrese el telefono del nuevo pasajero: \n";
                    $telefono = trim(fgets(STDIN));
                    if ($viaje->verificarDni($documento)) {
                        echo "el documento del usuario ya existe. Intentelo de nuevo. \n";
                    } else if(count($viaje->getPasajeros()) <= $viaje->getCantidadMax()) {
                        $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono);
                        $viaje->agregarPasajeros($pasajero);
                    }
                }

                break;

            case "5":
                echo "¿Qué dato desea cambiar?(nombre, documento, apellido)\n";
                $datoCambio = trim(fgets(STDIN));
                $datoCambio = strtoupper($datoCambio);
                if ($datoCambio == "NOMBRE") {
                    echo "ingrese el dni del pasajero cuyo nombre que desea cambiar: ";
                    $num = trim(fgets(STDIN));
                    if ($viaje->verificarDni($num)) {
                        echo "ingrese el nuevo nombre del pasajero: ";
                        $nombre = trim(fgets(STDIN));
                        $viaje->cambiarNombrePasajero($dni, $nombre);
                    } else {
                        echo "dni de pasajero inválido \n";
                    }
                } elseif ($datoCambio == "APELLIDO") {
                    echo "ingrese el dni del pasajero cuyo nombre que desea cambiar: ";
                    $num = trim(fgets(STDIN));
                    if ($viaje->verificarDni($num)) {
                        echo "ingrese el nuevo apellido del pasajero: ";
                        $apellido = trim(fgets(STDIN));
                        $viaje->cambiarApellidoPasajero($dni, $apellido);
                    } else {
                        echo "dni de pasajero inválido";
                    }
                } elseif ($datoCambio == "DOCUMENTO") {
                    echo "ingrese el dni del pasajero cuyo documento que desea cambiar: ";
                    $num = trim(fgets(STDIN));
                    if ($viaje->verificarDni($num)) {
                        echo "ingrese el nuevo documento del pasajero: ";
                        $documento = trim(fgets(STDIN));
                        if ($viaje->verificarDni($documento)) {
                            echo "este dni ya se encuentra en uso.";
                        } else {
                            $viaje->cambiarDocumentoPasajero($dni, $documento);
                        }
                    } else {
                        echo "número de dni inválido: ";
                    }
                } else {
                    echo "vuelva a intentarlo e ingrese una opcion válida";
                }
                break;
            case "6":
                echo "ingrese el número del pasajero a eliminar: ";
                $num = trim(fgets(STDIN));
                if ($viaje->verificarNumero($num)) {
                    $viaje->eliminarPasajero($num);
                } else {
                    echo "número de pasajero inválido";
                }
                break;

            case "7":
                echo "¿Qué dato desea cambiar?\n";
                echo "1) Cambiar el nombre del Empleado Responsable.\n";
                echo "2) Cambiar el apellido del Empleado Responsable\n";
                echo "3) Cambiar el número del Empleado Responsable. \n";
                echo "4) cambiar el número de Licencia del Empleado Responsable.\n";
                $nro = trim(fgets(STDIN));
                switch ($nro) {
                    case "1":
                        echo "ingrese el nuevo nombre del Empleado Responsable: ";
                        $nombre = strtoupper(trim(fgets(STDIN)));
                        $viaje->cambiarDatosResponsable($nro, $nombre);
                        break;
                    case "2":
                        echo "ingrese el nuevo apellido del Empleado Responsable: ";
                        $apellido = strtoupper(trim(fgets(STDIN)));
                        $viaje->cambiarDatosResponsable($nro, $apellido);
                        break;
                    case "3":
                        echo "ingrese el nuevo numero del Empleado Responsable: ";
                        $numero = strtoupper(trim(fgets(STDIN)));
                        $viaje->cambiarDatosResponsable($nro, $numero);
                        break;
                    case "4":
                        echo "ingrese el nuevo numero de licencia del Empleado Responsable: ";
                        $licencia = strtoupper(trim(fgets(STDIN)));
                        $viaje->cambiarDatosResponsable($nro, $licencia);
                        break;

                    default:
                        echo "vuelva a intentarlo e ingrese una opción válida\n";
                        break;
                }
                break;
            case "8":
                echo $viaje;
                break;

            case "9":
                $cambio = "sale del programa.";
                break;
            default:
                echo "ingrese una opción válida\n";
                break;
        }
    }
    if ($cambio == "NO") {
        echo "no se realizaron cambios.";
    }
} else {
    echo "por favor, vuelva a intentarlo";
}
