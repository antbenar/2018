<?php
  include "datos_conexion.php";
	include 'consulta.php';
	
	$db = mysqli_connect($dbhost, $dbuser,$dbpass) or die("No se puede conectar a 'localhost'");
    
  mysqli_select_db($db, $dbname) or die("No se puede abrir '$dbname'");
	
  
  $consulta="SELECT usuario.nombre_apellido, usuario.user,comentario.tema, comentario.Comentario
  FROM comentario
  INNER JOIN usuario ON Usuario.codigo=comentario.codUser;";
  $comentarios=getJson($consulta);

      foreach ($comentarios as $comentario) {
         echo "<div class='card border-success mb-3' style='max-width: 70rem;'>";
         echo " <div class='card-header'>";
         //echo "   <strong> ".$comentario->{'nombre_apellido'}."</strong> dice:";
         echo "   <a href= ' profile2.php?q=".$comentario->{'user'}."'> ".$comentario->{'nombre_apellido'}."</a> dice:";
         echo "  </div>";
         echo " <div class='card-body '>";
         echo "   <h5 class='card-title'>El tema es: ".$comentario->{'tema'}."</h5>";
         echo "   <p class='card-text'>".$comentario->{'Comentario'}."</p>";
         echo " </div>";
         echo "</div>";
      }
    ?>
