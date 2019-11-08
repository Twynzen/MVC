
<?php
/**
 *
 */
class  ConexionBD{

  public function cBD()
  {
    //Esta clase pide 3 parametros 1nombre host, usuario bd y contrasena bd
    $bd = new PDO("mysql:host-localhost;dbname=crud", "root","");

    return $bd;
  }
}



 ?>
