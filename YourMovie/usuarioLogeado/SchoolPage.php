<?php

include 'PageTemplate.php';
include '../consulta.php';
abstract class SchoolPage extends PageTemplate{

	public function SchoolPage( $newTitle='', $newnombre='', $newcarrera='',$newciudad='',$newdia='') {
		$this->title = $newTitle;
		$this->nombre = $newnombre;
		$this->carrera = $newcarrera;
		$this->ciudad = $newciudad;
		$this->diaNacimiento = $newdia;
	}
	
	public function printHeader(){
		$text  = '<head>';
		$text .= '<title>'.$this->title.'</title>';
		$text .= "<link rel='stylesheet' type='text/css' href='css/style.css'>";
		$text .= "<link rel='stylesheet' type='text/css' href='css/general.css'>";
		$text .= "<script type='text/javascript' src='js/jquery-3.3.1.min.js' ></script>";
		$text .= "<script type='text/javascript' src='js/main.js' ></script>";
		$text .= '</head>';
		return $text;
	}

	public function printMenu(){
		$text = "<table>";
		$links = array(
					"MENU" => '#', 
					"Home" => "index.php",
					"Informacion" => "informacion.php", 
					"Consulta" => "consulta.php",
					"Notas"=>"notas.php");

		foreach( $links as $name => $link) {
			$text .= "<td><div class='fakeButton'>
						<a href='$link'>".$name."</a>
					  </div></td>";
		}
		$text .= "</table>";
		return $text;
	}
	
	public function printCabecera(){
		session_start();
		$nick=$_SESSION['nick'];
		$consulta="SELECT nombre_apellido, user, sexo FROM usuario WHERE user='".$nick."';";
		$miUsuario = getJson($consulta);
		if(isset($miUsuario)){
			$text = "<div id='country'>
					  <h2>".$miUsuario[0]->{'nombre_apellido'}.	"</h2>
					  <h1>".$miUsuario[0]->{'sexo'}."</h1>
					</div>

					<div id='profile'>
					  <h1>Perfil de ".$miUsuario[0]->{'user'}."</h1>
					  <img id='perfil1_img' src='img/perfil1.png' title='perfil1_img'  alt='' >
					  <hr>
					  <button class='btn2' onclick='red.fade_in(perfil1_img)'>View Photo</button>
					  <button class='btn1' onclick= ' red.fade_out( perfil1_img )' >Hide Photo</button>
					</div>";
			return $text;
		}
	}

	public function printFooter( $autor=''){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$autor."</h1> </center>";
		return $text;
	}
		
}
?>
