<?php

//creamos la clase que usara el index.php para controlar las rutas
 class RutasControlador{
//Creamos la función plantilla
  public function Plantilla(){
    include "vistas/plantilla.php";


}
   public function Rutas(){

    if (isset($_GET["ruta"])) {

      $rutas = $_GET["ruta"];

    }else {
      $rutas = "index.php";
    }
    /*la conexion con una funcion se hacen 2 2 puntos*/
    $respuesta = Modelo::RutasModelo($rutas);

    include $respuesta;

    }

  }


 ?>
