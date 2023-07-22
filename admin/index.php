<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "models/usuarios.modelo.php";

$plantilla = new PlantillaControlador();
$plantilla -> llamarPlantilla();

?>