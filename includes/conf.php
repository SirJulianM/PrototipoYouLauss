<?php

define('DEFAULT_VIEW', 'vlogin');
define('DEFAULT_LAYOUT', 'layout.php');
define('VIEW_LAYOUT', 'view_layout.php');
define('CONTROLLER_LAYOUT', 'controller_layout.php');


//Definición de rutas
define('PATH_VIEWS', realpath('views'));
define('PATH_LAYOUTS', realpath('views/layouts'));
define('PATH_CONTROLLERS', realpath('controllers'));
define('DS', DIRECTORY_SEPARATOR);

/* --------------------------------------------- Public area ------------------------------------------------------- */
$conf["vlogin"] = array("modulo" => "mod_seguridad", 'archivo' => "login", "layout"  => DEFAULT_LAYOUT);
$conf["clogin"] = array("modulo" => "mod_seguridad", 'archivo' => "login", "layout"  => CONTROLLER_LAYOUT);
$conf["vregister"] = array("modulo" => "mod_seguridad", 'archivo' => "register", "layout" => DEFAULT_LAYOUT);
$conf["cregister"] = array("modulo" => "mod_seguridad", 'archivo' => "register", "layout" => CONTROLLER_LAYOUT);

/* ----------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------- Private area ------------------------------------------------------- */
$conf["vdepartamentos"] = array("modulo" => "mod_nomina", 'archivo' => "departamentos", "layout"  => VIEW_LAYOUT);
$conf["cdepartamentos"] = array("modulo" => "mod_nomina", 'archivo' => "departamentos", "layout"  => CONTROLLER_LAYOUT);
/* ----------------------------------------------------------------------------------------------------------------- */
