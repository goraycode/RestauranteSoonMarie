<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "modelos/administradores.modelo.php";
require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";
require_once "controladores/tipoPlatos.controlador.php";
require_once "modelos/tipoPlatos.modelo.php";
require_once "controladores/especialidades.controlador.php";
require_once "modelos/especialidades.modelo.php";
require_once "controladores/platos.controlador.php";
require_once "modelos/platos.modelo.php";
require_once "controladores/reservas.controlador.php";
require_once "modelos/reservas.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
