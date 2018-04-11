<?php
	include "SchoolPage.php";
	
	class Consulta extends SchoolPage{
		public function printBody() {
			$text .= "<div class='notas'>";
			$text .= 	"<h2>Consulta de notas</h2>";
			$text .= 	"<table border='1'>";
			$text .= 		"<tr>
								<th>Matematica</th>
 								<th>Historia</th>
 							</tr>
							<tr>
								<td>15</td>
 								<td>14</td>
 							</tr>";	

			$text .= 	"</table>";				
			$text .= "</div>";
			return $text;
		}
	}
	
	$consulta = new Consulta("Consulta de notas");
	$consulta->printPage();
	
?>
