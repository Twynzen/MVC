<?php

class AdminC{

      public function IngresoC(){

        if (isset($_POST["usuario"])) {

        $datosC = array("usuarios"=>$_POST[usuario], "clave"=>$_POST["clave"]);

        $tablaBD = "administradores";

        $respesta = AdminM::IngresoM($datosC, $tablaBD);

        }

      }
}

 ?>
