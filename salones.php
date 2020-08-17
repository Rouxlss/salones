<?php session_start();
    
require 'config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if (!$conexion) {
   header('location: error.php'); 
}

if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

require 'views/headerSalones.view.php';
require 'views/salones.view.php';
require 'views/loader.view.php';
require 'views/footerAdmin.view.php';

?>
