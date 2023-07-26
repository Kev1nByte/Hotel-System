<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/slide.controlador.php";
require_once "controllers/nosotros.controlador.php";
require_once "controllers/servicios.controlador.php";
require_once "controllers/galeria.controlador.php";
require_once "controllers/hsimple.controlador.php";

require_once "models/usuarios.modelo.php";
require_once "models/slide.modelo.php";
require_once "models/nosotros.modelo.php";
require_once "models/servicios.modelo.php";
require_once "models/galeria.modelo.php";
require_once "models/hsimple.modelo.php";

$plantilla = new PlantillaControlador();
$plantilla -> llamarPlantilla();

?>