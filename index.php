<?php

require_once "controllers/plantillaController.php";
require_once "controllers/UsuariosController.php";
require_once "controllers/categoriasController.php";
require_once "controllers/productosController.php";
require_once "controllers/clientesController.php";
require_once "controllers/ventasController.php";

require_once "models/UsuariosModel.php";
require_once "models/categoriasModel.php";
require_once "models/productosModel.php";
require_once "models/clientesModel.php";
require_once "models/ventasModel.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrlPlantilla();





















?>