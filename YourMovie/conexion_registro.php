<?php
include "datos_conexion.php";

	$fullname = $_POST['fullname'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['contrasenia'];
	$sexo = $_POST['sexo'];

	$genero = array($_POST['genero']);
	$pelicula_fav =  array($_POST['pelicula_fav']);
	$actor_fav =  array($_POST['actor_fav']);


	if(!$fullname || !$usuario || !$pass || !$sexo){ //actor opcional?
	    echo "<script>alert('No ingresó algun dato requerido');</script>";
	    header("Location: registro.php"); 
	    exit;
	}	
	$db = mysqli_connect($dbhost, $dbuser,$dbpass) or die("No se puede conectar a 'localhost'");
    mysqli_select_db($db, $dbname) or die("No se puede abrir '$dbname'");

    //insertar datos usuario
	$query = "INSERT INTO usuario(nombre_apellido,user,password,sexo)
	 VALUES
	 ('".$fullname."', '".$usuario."', '".$pass."','".$sexo."')";
	
	$conn = $db->query($query);
	

	if ($conn) {	//Datos Correctos Usuario
		
		$id = $db->insert_id;//obtener id de usuario

	    //insertar generos a usuario
		$query = "INSERT INTO usuario_x_genero(codUser,codgenero) VALUES (".$id.",'".$genero[0]."');"; 
		$db->query($query);

		//insertar pelicula a usuario
		$query = "INSERT INTO usuario_x_pelicula(codUser,codPelicula) VALUES (".$id.",'".$pelicula_fav[0]."');"; 
		$db->query($query);

		//insertar actor a usuario
		$query = "INSERT INTO usuario_x_actor(codUser,codActor) VALUES (".$id.",'".$actor_fav[0]."');"; 
		$db->query($query);

		header("Location: index.html"); 

	}
	else{
		echo "<h1>Fallo de la base de datos al momento de insertar una nueva persona</h1>";		
	}
	$db->close();
?>