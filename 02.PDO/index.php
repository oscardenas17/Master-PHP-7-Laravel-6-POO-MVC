<?php
 #index: En él se mostrará la salida de las vistas al usuario y también con él enviaremos las distintas acciones que el usuario envie al controlador

 require_once "controllers/plantillaController.php";
 require_once "controllers/formulariosController.php";

 require_once "models/conexion.php";

$conexion = Conexion::conectar();
echo '<pre>'; print_r($conexion); echo '</pre>';


 $plantilla = new ControllerPlantilla();
 $plantilla -> ctrTraerPlantilla();

?>