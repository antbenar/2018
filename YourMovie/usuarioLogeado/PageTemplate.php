<?php
abstract class PageTemplate {
	abstract protected function printHeader();
	abstract protected function printMenu();
	abstract protected function printCabecera();
	abstract protected function printBody();
	abstract protected function printFooter();

	protected $title ;

	protected $nombre;
	protected $carrera;
	protected $ciudad;
	protected $diaNacimiento;

	public function printPage() {
		$text = "<html>";
		$text .= $this->printHeader();
		
		$text .= "<body>";
				$text .= "<div id='menu'>";
					$text .= $this->printMenu();
				$text .= "</div>";

				$text .= "<div id='cabecera' class='bgImgCenter'>";
					$text .= $this->printCabecera();
				$text .= "</div>";

				$text .= "<div id='main'>";
					$text .= $this->printBody();
				$text .= "</div>";
		
				$text .= "<div id = 'footer'>";
					$text .= $this->printFooter("");//se le puede agregar un nombre
				$text .= "</div>";
		$text .= "</body>";
		
		$text .= "</html>";
		echo $text;
	}
	
}
?>
