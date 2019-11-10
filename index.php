
<?php

require_once "Controladores/rutasC.php";
require_once "Controladores/adminC.php";
require_once "Controladores/empleadosC.php";

require_once "modelos/rutasM.php";
require_once "modelos/adminM.php";
require_once "modelos/empleadosM.php";

//Creamos el objeto que controlara las rutas
$rutas = new RutasControlador();
//asignamos el objeto a la funciín plantilla
$rutas -> Plantilla();


 ?>
