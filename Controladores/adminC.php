<?php

class AdminC{

      public function IngresoC(){

        if (isset($_POST["usuario"])) {

        $datosC = array("usuarios"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

        $tablaBD = "administradores";

        $respesta = AdminM::IngresoM($datosC, $tablaBD);

      if ($respuesta["usuario"] == $_POST["usuario"]&& $respuesta["clave"] == $_POST["claveI"]) {

        session_start();

        $_SESSION["Ingreso"] = true;

        header("location:index.php?ruta=empleados");

      }else{

        echo "ERROR AL INGRESAR";

      }

        }

      }
}

 ?>
