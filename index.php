<?php
require_once 'config/global.php';
require_once 'core/ControladorBase.php';
require_once 'core/ControladorFrontal.func.php';

$controllerObj = (isset($_GET['controller'])) ? cargarControlador($_GET['controller']) : cargarControlador(CONTROLADOR_DEFECTO);

lanzarAccion($controllerObj);

