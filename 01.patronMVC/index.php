<?php
 #index: En él se mostrará la salida de las vistas al usuario y también con él enviaremos las distintas acciones que el usuario envie al controlador

 require_once "controllers/plantillaController.php";

 $plantilla = new ControllerPlantilla();
 $plantilla -> ctrTraerPlantilla();

?>