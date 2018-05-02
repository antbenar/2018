<?php

include 'PageTemplate.php';

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
		if($this->ciudad==''){
			return;
		}
		$text = "  <div id='country'>
					  <h2>".$this->ciudad."</h2>
					  <h1>".$this->diaNacimiento."</h1>
					</div>

					<div id='profile'>
					  <h1>Perfil de ".$this->nombre."</h1>
					  <h2>".$this->carrera."</h2>
					  <img id='perfil1_img' src='img/perfil1.png' title='perfil1_img'  alt='' >
					  <hr>
					  <button class='btn2' onclick='red.fade_in(perfil1_img)'>View Photo</button>
					  <button class='btn1' onclick= ' red.fade_out( perfil1_img )' >Hide Photo</button>
					</div>";
		return $text;
	}

	public function printFooter( $autor=''){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$autor."</h1> </center>";
		return $text;
	}
		
}
?>
