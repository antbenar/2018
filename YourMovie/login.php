<?php
class Login {
	public function printHeader(){
		$text="
		<head>
		<title> cinesocial </title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel = 'stylesheet' href= 'miarchivo.css'>
		</head>
		<?php include('conexion_ingreso.php'); ?> ";
	}

	public function printBody(){
		$text="
	<center>
	<img id='title' src='img/titulo.png' alt = 'Cinesocial' width ='300px' height ='150px' >
	</br>
	<form id='login' name='login'  action='conexion_ingreso.php'  method= 'post' autocomplete='false'>
		<input type='text' placeholder='Username' name='usuario' required> </br>
		<input type='password' placeholder='Password' name='contrasenia' required></br>
		<input type='submit' value='Ingresar' id='login_button'></br>
		<a href='#' style='color:rgb(170,184,194);'>Olvido su contrase&ntildea? </a><br/>
		<a href='registro.html' style='color:rgb(170,184,244);'>Registrarse</a>
		</center>
	</form>	 ";
	}

	public function printLogin($logeado=true) {
		$text = "<!DOCTYPE html>
				<html lang='es'>";

		$text .= $this->printHeader();
		
		$text .= "<body>";
			printBody();
			if ($logeado==false){
				$text.="<h1>Olvido su contrase&ntildea</h1><br/>";
			}
		$text .= "</body>";
		
		$text .= "</html>";
		echo $text;
	}
}
?>
