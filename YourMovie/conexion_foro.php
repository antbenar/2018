<?php
include "datos_conexion.php";
include "consulta.php";

	$tema = $_POST['tema'];
	$comentario = $_POST['Comentario'];


	$db = mysqli_connect($dbhost, $dbuser,$dbpass) or die("No se puede conectar a 'localhost'");
    mysqli_select_db($db, $dbname) or die("No se puede abrir '$dbname'");
	

	session_start();//consultar info usuario
	$nick=$_SESSION['nick']; 
	$consulta="SELECT codigo FROM usuario WHERE user='".$nick."';";
	$miUsuario = getJson($consulta);

    //insertar datos usuario
	$query = "INSERT INTO comentario(tema,comentario,codUser)
	 VALUES
	 ('".$tema."', '".$comentario."',".$miUsuario[0]->{'codigo'}.");";
	echo $query;
	$conn = $db->query($query);
	

	if ($conn) {	//Datos Correctos Usuario
		
		header("Location: foro.php"); 

	}
	else{
		echo "<h1>Fallo de la base de datos al momento de insertar</h1>";		
	}
	$db->close();
?>