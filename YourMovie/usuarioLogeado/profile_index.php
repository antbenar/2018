<?php
	include "SchoolPage.php";
	class Index extends SchoolPage{
		public function printBody() {
			$nick=$_SESSION['nick'];
			$text = "<h1>Bienvenido $nick!</h1>";
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
