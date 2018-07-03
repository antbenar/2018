<?php
include("consulta.php");


$text="
<!DOCTYPE html>
<html lang='en'>
<head>
<title> cinesocial </title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel = 'stylesheet' href= 'miarchivo.css'>
</head>
<?php
include('conexion_registro.php');
?>
<body>	
<center>
<img id='title_reg' src='img/registrarse.png' alt = 'Cinesocial' width = '300px' height ='150px' >
		<form id='register'  method='post' action='conexion_registro.php' name='register' autocomplete='false' onsubmit='return preRegister'>
		<table border=0>
		<tr>
		<td><label>Nombres y Apellidos:</label></td>
		<td><input type='text' name='fullname' required></td>
		</br>
				</tr>
				<tr>				
				<td><label>Usuario:</label></td>
				<td><input type='text' name='usuario' required> </td>
				</br>
				</tr>
				
				<tr>
				<td> <label>Password:</label></td>
				<td> <input type='password' name='contrasenia' > 
				</br>
				</tr>
				
				<tr>
				<td> <label>Sexo:</label> </td>
				<td> <input type='text' placeholder='masculino/femenino' name='sexo' required > </td>
				</br>
				</tr>
				<tr>
				<td> <label>Genero Favorito:</label> </td>
				<td>
					<p>Con ctrl seleccionas varios opciones.</p>
					<select name='genero' size='5' multiple='multiple'>
					";
						$consulta='SELECT codigo,nombre FROM genero;';
						$miUsuario = getJson($consulta);

						for ($i = 0; $i < count($miUsuario); $i++) {
						    $text.= "<option value='".$miUsuario[$i]->{'codigo'}."'>".$miUsuario[$i]->{'nombre'}."</option>";
						}						
		$text.=	"	/select>
				</td>
				</br>
				</tr>

				<tr>
				<td> <label>Pelicula Favorita:</label> </td>
				<td>
					<select name='pelicula_fav' size='5' multiple>
					";
						$consulta='SELECT codigo,nombre FROM Pelicula;';
						$miUsuario = getJson($consulta);

						for ($i = 0; $i < count($miUsuario); $i++) {
						     $text.= "<option value='".$miUsuario[$i]->{'codigo'}."'>".$miUsuario[$i]->{'nombre'}."</option>";
						}						
		$text.=	"	/select>
				</td>
				</br>
				</tr>

				<tr>
				<td> <label>Actor Favorito:</label> </td>
				<td>
					<select name='actor_fav' size='5' multiple>
					";
						$consulta='SELECT codigo,nombre FROM actor;';
						$miUsuario = getJson($consulta);

						for ($i = 0; $i < count($miUsuario); $i++) {
						    $text.= "<option value='".$miUsuario[$i]->{'codigo'}."'>".$miUsuario[$i]->{'nombre'}."</option>";
						}						
		$text.=	"	/select>
				</td>
				</br>
				</tr>



			</table>
			</br></br>
			<input type='submit' value='Registrarse' id='login_button'>
		</form>
		</br>
		</center>
</body>
</html>";
echo $text;