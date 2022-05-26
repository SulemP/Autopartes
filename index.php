<?php

// 1. PRIMERO SE IMPORTAN LOS MODELOS

//require_once("modelo/servicio.modelo.php"); Este es un ejemplo.


// 2. SE IMPORTAN LOS CONTROLADORES

require_once("controlador/plantilla.controlador.php");


// 3. LLAMO A PLANTILLA

$plantilla = new controladorPlantilla(); // estoy construyendo un objeto al llamar al constructor de la clase.
$plantilla -> ctrObtenerPlantilla(); // aquí llamo al método/función que importa la plantilla. 

?>