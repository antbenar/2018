<?php
	include "SchoolPage.php";
	
	class Informacion extends SchoolPage{
		public function printBody() {
			$text= "<div id='superpoderes' class='bloque'>
		              <h1 class='titulo'>Superpoderes</h1>
		              <ul>
		              <li> Dormir con los ojos abiertos.</li>
		              <li> Lectura rápida: 2 mil palabras por segundo, 1 minuto antes del examen </li>
		              <li> Prueba de las partículas de Higgs. Higgs es mi hamster y a veces suelta unas partículas que se las puedo mostrar =D </li>
		              </ul>
		            </div>";

		          

		    $text.= "<div id='debilidades' class='bloque'>
		              <h1 class='titulo'>Debilidades</h1>
		              <ul>
		                <li>No poder trabajar más de 32 horas seguidas.</li>
		                <li>Olvidar siempre algo en la prueba y acordarme de ello solo cuando esta acaba.</li>
		              </ul>
		            </div>";
		            
		    $text.= "<div id='busqueda' class='bloque'>
		              <h1 class='titulo'>Causas que busca</h1>
		              <ul>
		                <li>Aprobar los cursos con éxito</li>
		                <li>Aprender 100% todo lo que se dicta en clase.</li>
		              </ul>
		            </div>";
		          
		    $text.= "<div id='superamigos' class='bloque'>
		              <h1 class='titulo'>Conoce sus superamigos</h1>
		              <table id='superamigos'>
		                <tr>
		                  <td>
			                  <a href='perfil2.html' >
			                  	<img src='img/perfil2.png' title='GreenPower' alt=' /'	>
			                  </a>
		                  </td>
		                </tr>
		              </table>            
		            </div>";
		          
		    $text.= "<div class='bloque'>
		              <h1 class='titulo'>Interacción con Supermarc</h1>
		              <fieldset>
		                <legend>Desea contactar a Supermarc?</legend>
		                <button name='invitacion'>Mandarle una invitación de amistad</button>          
		              </fieldset>
		              
		              <fieldset>
		                <legend>Solo enviarle palabras de aliento?</legend>
		                <textarea cols='50' rows='10' name='palabras'></textarea>
		                <button name='enviarPalabras'>Enviar</button>
		              </fieldset>
		              
		            </div>";

			return $text;
		}
	}
	
	$informacion = new Informacion("Informacion de Alumno", "Anthony Benavides","CCOMP", "Arequipa, Peru","Febrero 17, 1999");
	$informacion -> printPage();
	
?>
