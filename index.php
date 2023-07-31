<?php

require_once "controllers/plantilla.controlador.php";

require_once "controllers/slide.controlador.php";
require_once "controllers/nosotros.controlador.php";
require_once "controllers/servicios.controlador.php";
require_once "controllers/galeria.controlador.php";
require_once "controllers/hsimple.controlador.php";
require_once "controllers/hdoble.controlador.php";
require_once "controllers/htriple.controlador.php";
require_once "controllers/hsuit.controlador.php";
require_once "controllers/mensajes.controlador.php";

require_once "models/slide.modelo.php";
require_once "models/nosotros.modelo.php";
require_once "models/servicios.modelo.php";
require_once "models/galeria.modelo.php";
require_once "models/hsimple.modelo.php";
require_once "models/hdoble.modelo.php";
require_once "models/htriple.modelo.php";
require_once "models/hsuit.modelo.php";
require_once "models/mensajes.modelo.php";

$plantilla = new PlantillaControlador();
$plantilla -> llamarPlantilla();

?>