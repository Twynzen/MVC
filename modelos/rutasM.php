<?php

//cramos el objeto que manejara los modelos
class Modelo{
  static public function RutasModelo($rutas){

    if ($rutas == "ingreso" || $rutas =="registrar" || $rutas == "empleados" || $rutas == "salir") {

     $pagina = "vistas/modulos/".$rutas.".php";

    }elseif ($rutas == "index") {

     $pagina = "vistas/modulos/ingreso.php;";

    }else {

     $pagina = "vistas/modulos/ingreso.php";

    }

      return $pagina;

  }



}


 ?>
