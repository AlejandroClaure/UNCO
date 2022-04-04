<?php
include "Viaje.php";
$viaje= new Viaje(235, "SanMartin", 20);
echo "¿Desea realizar cambios al viaje?(si/no)";
$cambio= trim(fgets(STDIN));
$cambio= strtoupper($cambio);
if($cambio== "SI" || $cambio =="NO"){
while($cambio=="SI"){
echo "ingrese la opción que desea cambiar: \n";
echo "1) Cambiar código del viaje\n";
echo "2) Cambiar destino del viaje\n";
echo "3) Cambiar cantidad máxima de pasajeros\n";
echo "4) Agregar un Pasajero\n";
echo "5) Cambiar datos de un Pasajero\n";
echo "6) Borrar datos de un Pasajero\n";
echo "7) Mostrar datos\n";
echo "8) salir.\n";

$opcion= trim(fgets(STDIN));
switch ($opcion) {
    case "1":
        echo "Ingrese el nuevo código de viaje: \n";
        $codigo= trim(fgets(STDIN));
        $viaje->cambiarCodigo($codigo);
        break;
    case "2":
        echo "ingrese el nuevo destino: ";
        $destino= trim(fgets(STDIN));
        $viaje->cambiarDestino($destino);
        break;
    case "3":
        echo "ingrese la nueva cantidad máxima de pasajeros: \n";
        $cantMax= trim(fgets(STDIN));
        $viaje->cambiarCantMax($cantMax);
        break;
    case "4":
        $cont= count($viaje->getPasajeros());
        if ($cont>=$viaje->getCantidadMax()){
            echo "se ha alcanzado la cantidad máxima de pasajeros.\n";
            
        }else{
        echo "ingrese el nombre del nuevo pasajero: \n";
        $nombre= trim(fgets(STDIN));
        echo "ingrese el apellido del nuevo pasajero: \n";
        $apellido= trim(fgets(STDIN));
        echo "ingrese el documento del nuevo pasajero: \n";
        $documento= trim(fgets(STDIN));
        if($viaje->verificarDni($documento)){
            echo "el documento del usuario ya existe. Intentelo de nuevo. \n";
        }else{   
            $pasajeroNuevo= ["nombre"=> $nombre, "apellido"=>$apellido, "documento"=>$documento];
        $viaje->agregarPasajeros($pasajeroNuevo);
        }
    }
        
        break;
   
    case "5":
        echo "¿Qué dato desea cambiar?(nombre, documento, apellido)\n";
        $datoCambio= trim(fgets(STDIN));
        $datoCambio= strtoupper($datoCambio);
        if($datoCambio== "NOMBRE"){
            echo "ingrese el número del pasajero cuyo nombre que desea cambiar: ";
            $num= trim(fgets(STDIN));
            if($viaje->verificarNumero($num)){
            echo "ingrese el nuevo nombre del pasajero: ";
            $nombre= trim(fgets(STDIN));
            $keyNombre= "nombre";
            $viaje->modificarPasajero($num, $nombre, $keyNombre);
           
            }else{
                echo "número de pasajero inválido";
              
            }
        }elseif($datoCambio== "APELLIDO"){
            echo "ingrese el número del pasajero cuyo nombre que desea cambiar: ";
            $num= trim(fgets(STDIN));
            if($viaje->verificarNumero($num)){
            echo "ingrese el nuevo apellido del pasajero: ";
            $apellido= trim(fgets(STDIN));
            $keyApellido= "apellido";
            $viaje->modificarPasajero($num, $apellido, $keyApellido);
            
            }else{
                echo "número de pasajero inválido";
                
            }
        }elseif($datoCambio== "DOCUMENTO"){
            echo "ingrese el número del pasajero cuyo documento que desea cambiar: ";
            $num= trim(fgets(STDIN));
            if($viaje->verificarNumero($num)){
            echo "ingrese el nuevo documento del pasajero: ";
            $documento= trim(fgets(STDIN));
            if($viaje->verificarDni($documento)){
                echo "este dni ya se encuentra en uso.";      
            }else{       
                $keyDocumento= "documento";
                $viaje->modificarPasajero($num, $documento, $keyDocumento);
            }
            
            }else{
                echo "número de pasajero inválido: ";
                
            }
        }else{
            echo"vuelva a intentarlo e ingrese una opcion válida";
        }
        break;
        case "6":
            echo "ingrese el número del pasajero a eliminar: ";
            $num= trim(fgets(STDIN));
            if($viaje->verificarNumero($num)){
                $viaje->eliminarPasajero($num);
               
            }else{
                echo "número de pasajero inválido";
            }
            break;
        case "7":
            echo $viaje; 
            $cont= count($viaje->getPasajeros());    
            if($viaje->verificarNumero($cont)){
                    echo "\n los pasajeros son: \n";
                   $i=0;
                foreach($viaje->getPasajeros() as $key => $pasajero){
                    echo "pasajero N° ".$i." : \n";
                    echo "nombre: ".$pasajero["nombre"]."\n";
                    echo "apellido: ".$pasajero["apellido"]."\n";
                    echo "documento: ".$pasajero["documento"]."\n"."\n";
                  $i++;
            }
            
            }else{
                echo "no hay pasajeros en el viaje.";
                
            }
            break;
        
    case "8":
        $cambio= "sale del programa.";
        break;
    default:
        echo "ingrese una opción válida\n";
        break;
}


}
if($cambio== "NO"){
    echo "no se realizaron cambios.";
}
}else{
    echo "por favor, vuelva a intentarlo";
}
