<?php
session_start();
include "datos_conexion.php";

$nickname = $_POST['usuario'];
$password = $_POST['contrasenia'];

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se puede conectar a 'localhost'");

mysqli_select_db($connect, $dbname) or die("No se puede abrir '$dbname'");
$consulta ="SELECT * FROM usuario WHERE user='".$nickname."' AND password = '".$password."';";
$result = $connect->query($consulta);
	if($result){
		if($result->num_rows > 0){
			$_SESSION['nick']=$nickname; 
			echo "Ingreso corractamente";
			header("Location: profile.php"); 
			exit;
		}
		else{
			echo "Datos no validos";
			header("Location: index.html"); 
		}
	}
	else{
		echo "Error al enviar datos al servidor";		
	}


?>