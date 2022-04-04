<?php
/*
Se desea registrar una encuesta para determinar qué lugar es mas turístico: San Martin de los Andes o Bariloche. auego
se desean obtener los resultados totales en base a un cuestionario. aas preguntas que se van a realizar a cada turista son
las siguientes:
1. Nombre
2. ¿Cantidad aproximada de dinero que piensa invertir en sus próximas vacaciones?
3. ¿Cuántas veces viajó a San Martin?
4. ¿Cuántas veces viajó a Bariloche?
5. ¿Cuál es medio de transporte por excelencia que utiliza para sus vacaciones: Auto o Colectivo?
Encapsular el registro de la encuesta en una función registrarEncuesta(), que retorna la info en un arreglo indexado
donde en cada posición i se almacena un arreglo asociativo con las respuestas de la encuesta. Es decir, a medida que se
van realizando las preguntas al turista, armar un arreglo asociativo con las siguientes claves: nombre, dinero,
cantsanmartin, cantbariloche, mediotransporte y almacenarlo en la posición i del arreglo indexado.
Ademas implementar las siguientes funciones:
1. cantidadPersonasEncuestadas($arreglo): función que recibe el arreglo de encuestas y retorna la cantidad de
personas encuestadas.
2. porcentajeAmbosDestinos($arreglo): función que recibe el arreglo de encuestas y retorna el porcentaje de
personas que conocen ambos destinos turísticos.
3. infoPersona($arreglo): función que recibe el arreglo de encuestas y retorna un arreglo asociativo con las
siguientes claves principales: bariloche, sanmartin. En cada una de estas posiciones se almacena otro arreglo
asociativo con las siguientes claves: nombrePersona y transporte. En este último arreglo en la clave
nombrePersona, se almacenará el nombre de la persona que más ha viajado al destino turístico y en la clave
transporte, se almacenara el transporte por excelencia seleccionado por la persona.
4. darPromedio($arreglo): función que recibe el arreglo de encuestas y retorna el promedio de inversión de un
turista en sus próximas vacaciones.
Realizar el diseño y la implementación en PHP de cada una de las funciones y un menú principal que invoque a cada
una de las funciones implementadas. 
Cada inciso debe corresponderse con la implementación de un método. Seleccionar correctamente los parámetros y tipos
retornados según cada caso. Desde el método principal de cada script invocar a cada uno de los métodos implementados
solicitando y visualizando la información según corresponda.
*/