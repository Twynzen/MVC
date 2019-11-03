<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">

</head>

<body>

<?php
 //incluimos el menu con un modulo de php
  include "modulos/menu.php";

 ?>

<section>

<?php

 //incluimos el objeto controlador de rutas
  $rutas = new RutasControlador();
  $rutas -> Rutas();

 ?>

</section>

</body>

</html>
