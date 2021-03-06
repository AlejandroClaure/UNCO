<?php

/**Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de
atención de la tienda), estado (abierta o cerrada), dirección y dueño. El atributo dueño debe referenciar a un
objeto de la clase Persona implementada en el punto 1. Defina en la clase los siguientes métodos:
a) Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los métodos de acceso de cada uno de los atributos de la clase.
c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
encontrarse abierta en ese horario y false en caso contrario.
d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre.
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos
implementados.
 */
class Disquera{
    private $hora_desde;
    private $hora_hasta;
}

?>