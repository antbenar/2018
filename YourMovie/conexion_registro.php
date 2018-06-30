<?php
include "datos_conexion.php";

	$fullname = $_POST['fullname'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['contrasenia'];
	$sexo = $_POST['sexo'];

	if(!$fullname || !$usuario || !$pass || !$sexo){ //actor opcional?
		die("<h1>No ingresó algun dato requerido</h1>");
	}	
	$db = mysqli_connect($dbhost, $dbuser,$dbpass) or die("No se puede conectar a 'localhost'");
    mysqli_select_db($db, $dbname) or die("No se puede abrir '$dbname'");

	$query = "INSERT INTO usuario(nombre_apellido,user,password,sexo)
	 VALUES
	 ('".$fullname."', '".$usuario."', '".$pass."','".$sexo."')";

	$result = $db->query($query);
	if($result){
		echo "<h1>Se registro correctamente</h1>";
	}
	else{
		echo "<h1>Fallo de la base de datos al momento de insertar una nueva persona</h1>";		
	}
	$db->close();
?>