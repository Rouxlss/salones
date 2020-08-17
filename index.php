<?php session_start();
    
require 'config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if (!$conexion) {
   header('location: error.php'); 
}

if (isset($_SESSION['usuario'])){
    header('Location: salonesAdmin.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    
    $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password
    ');
    
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));
    
    $resultado = $statement->fetch();
    if ($resultado !== false) {
       $_SESSION['usuario'] = $usuario;
        header('Location: salonesAdmin.php');
    } else {
        $errores = '<li>Datos Incorrectos</li>';
    }
    
}

require 'views/header.view.php';
require 'views/index.view.php';
require 'views/loader.view.php';
require 'views/footer.view.php';

?>