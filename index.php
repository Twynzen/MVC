
<?php

require_once "Controladores/rutasC.php";
require_once "modelos/rutasM.php";

//Creamos el objeto que controlara las rutas
$rutas = new RutasControlador();
//asignamos el objeto a la funciín plantilla
$rutas -> Plantilla();


 ?>
