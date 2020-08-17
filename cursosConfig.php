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

$query = "SELECT * FROM cursos WHERE estado = 1";
$data = $conexion->query($query);

$query = "SELECT * FROM cursos WHERE estado = 0";
$datas = $conexion->query($query);


$idUsuario = $_SESSION['usuario'];

$statement = $conexion->prepare("SELECT * FROM usuarios WHERE idAdmin = :idAdmin");
$statement->execute(array(':idAdmin' => $idUsuario));
$idUsu = $statement->fetchAll();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$nombreCurso = limpiarDatos($_POST['nombreCurso']);
    $tipoCurso = limpiarDatos($_POST['tipoCurso']);
    $centroFormacion = limpiarDatos($_POST['centroFormacion']);
    $fechaInicio = limpiarDatos($_POST['fechaInicio']);
    $fechaFin = limpiarDatos($_POST['fechaFin']);
	$estado = limpiarDatos($_POST['estado']);


		$statement = $conexion->prepare("SELECT MAX(idCurso) + 1 FROM cursos");
		$statement->execute();
		$id = $statement->fetchAll();

        $statement = $conexion->prepare("INSERT INTO cursos VALUES(:idCurso, :tipoCurso, :centroFormacion, :nombreCurso, :fechaInicio, :fechaFin, :estado)");
		$statement->execute(
            array(
            ':idCurso' => $id, 
            ':tipoCurso' => $tipoCurso, 
            ':centroFormacion' => $centroFormacion, 
            ':nombreCurso' => $nombreCurso,
            ':fechaIncio' => $fechaInicio, 
            ':fechaFin' => $fechaFin,
            ':estado' => $estado
        ));

        

		header("Location: cursosConfig.php");

	
    
}
require 'views/cursosConfig.view.php';
require 'views/loader.view.php';
require 'views/footerAdmin.view.php';

?>
