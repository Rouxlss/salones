<?php

function conexion($bd_config) {
 
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['db'], $bd_config['user'], $bd_config['pass']);
        return $conexion;
    } catch (PDOExeption $e) {
        return false;
    }

}

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

?>