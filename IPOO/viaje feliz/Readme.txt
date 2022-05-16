Entregable TP 1

La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
 De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

 Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (
 incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. 
 Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.
 
 Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita 
 cargar la información del viaje, modificar y ver sus datos. 

 
Entregable TP 2

Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. 
El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
También se desea guardar la información de la persona responsable de realizar el viaje,
 para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. 
 La clase Viaje debe hacer referencia al responsable de realizar el viaje. 

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. 
Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.

Entregable TP 3

La empresa de transporte desea gestionar la información correspondiente a los Viajes que pueden ser: 
Terrestres o Aéreos,   guardar su importe e indicar si el viaje es de ida y vuelta. 
De los viajes aéreos se conoce el número del vuelo, la categoría del asiento (primera clase o no), 
nombre de la aerolínea, y la cantidad de escalas del vuelo en caso de tenerlas. 
De los viajes terrestres se conoce la comodidad del asiento, si es semicama o cama.

La empresa ahora necesita implementar la venta de un pasaje, para ello debe realizar la función venderPasaje(pasajero) 
que registra la venta de un viaje al pasajero que es recibido por parámetro. 

La venta se realiza solo si hayPasajesDisponible. 
Si el viaje es terrestre y el asiento es cama, se incrementa el importe un 25%. 
Si el viaje es aéreo y el asiento es primera clase sin escalas, se incrementa un 40%, 
si el viaje además de ser un asiento de primera clase, el vuelo tiene escalas se incrementa el importe del viaje un 60%. 
Tanto para viajes terrestres o aéreos, si el viaje es ida y vuelta, se incrementa el importe del viaje un 50%. 
El método retorna el importe del pasaje si se pudo realizar la venta.

Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros 
y falso caso contrario.