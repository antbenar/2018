<?php
$dbname = 'alumnos_ucsp';
$dbuser = 'root';
$dbpass = ''; 
$dbhost = 'localhost';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se puede conectar a '$dbhost'");

mysqli_select_db($connect, $dbname) or die("No se puede abrir '$dbname'");

$result = mysqli_query($connect ,"SELECT * FROM alumno");

$text='';

while ($row = mysqli_fetch_array($result)) {
	$text .= "CODIGO: ".$row[0]." NOMBRE: ".$row[1]." APELLIDO: ".$row[2]."<br>";
}
echo $text;
?>