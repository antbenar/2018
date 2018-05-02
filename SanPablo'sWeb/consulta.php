<?php
	include "SchoolPage.php";
	include "js/ajax.js";
	
	class Consulta extends SchoolPage{
		public function printBody() {
			$text = "<div class='formulario'>";
			$text .= "<h2>Consulta de curso</h2>";
			$text .= "<form action='consulta.php' method='GET'>";
			$text .= "T&iacute;tulo <input type='text' name='titulo'> <br>";
			$text .= "A&ntilde;o <select name='anho''>";
			$text .= "<option></option>";
			$text .= "<option value='2016a'>Primer Semestre</option>";
			$text .= "<option value='2016b'>Segundo Semestre</option>";
			$text .= "</select><br>";
			$text .= "<input type='submit'>";
			$text .= "</form>";
			$text .= "<button id='btn1' onclick='Ajax()>Hola</button>";
			$text .= "</div>";
			

			$tmpTitulo = $_GET["titulo"];
			$tmpAnho = $_GET["anho"];

			
			$text .= "<div class='resultado'>";
			$busquedaRetornoValor = false;
			if( isset($tmpTitulo) && $tmpTitulo != "") {
				$text .= "Buscaste por: ".$tmpTitulo."<br>";
				$busquedaRetornoValor = true;
			}
			if( isset($tmpAnho) && $tmpAnho != ""){
				$text .= "Buscaste en el semestre: ".$tmpAnho."<br>";
				$busquedaRetornoValor = true;
			}
			
			if( $busquedaRetornoValor){
				/*$dbname = 'alumnos_ucsp';
				$dbuser = 'root';
				$dbpass = ''; 
				$dbhost = 'localhost';

				$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se puede conectar a '$dbhost'");

				mysqli_select_db($connect, $dbname) or die("No se puede abrir '$dbname'");

				$result = mysqli_query($connect ,"SELECT * FROM alumno");
				
				
				
				while ($row = mysqli_fetch_array($result)) {
					if($tmpTitulo == $row[1]){
						$text .= "CODIGO: ".$row[0]." NOMBRE: ".$row[1]." APELLIDO: ".$row[2]."<br>";
					}
				}*/
				
				//$text.="<div id='miventana'>aaaaaaaa</div>";
				
				$text.="<div id='miventana'>aaaaaaaa</div>";
			}
			
			$text .= "</div>";
				
			return $text;
		}
	}
	
	$consulta = new Consulta("Consulta de cursos", "Anthony Benavides","CCOMP", "Arequipa, Peru","Febrero 17, 1999");
	$consulta->printPage();
	
?>
