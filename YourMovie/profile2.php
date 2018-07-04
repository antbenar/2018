<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mi Perfil</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

    <?php include 'consulta.php'; ?>
  </head>


  
  <body>
	<!-- preguntar lo del nickname-->
  <br><br><br>
  <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" vhref="#">
        <img  src="img/casa.png" title="MiFoto" alt="" width="30" height="30" >
        Home
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foro.php">Foro</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Configuración
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editar.html">Editar Información</a>
              <a class="dropdown-item" href="#">Cambiar Nombre</a>
              <a class="dropdown-item" href="#">Cambiar Contraseña</a>
          </div>
        </li>
      </ul> 
      
    </div>

    <a class="navbar-brand" href="cerrar_sesion.php">
        Log Out
        <img  src="img/cancelar.png" title="MiFoto" alt="" width="30" height="30" >  
    </a>
  </nav>

  <?php 
  $nick=$_GET['q']; 
  $consulta="SELECT codigo,nombre_apellido, user, sexo FROM usuario WHERE user='".$nick."';";
  $miUsuario = getJson($consulta);

  //consultar peliculas de usuario
  $consulta="SELECT nombre, descripcion FROM pelicula WHERE codigo IN (SELECT codPelicula FROM usuario_x_pelicula WHERE codUser=".$miUsuario[0]->{'codigo'}.");";
  $misPeliculas = getJson($consulta); 

 //consultar actores de usuario
  $consulta="SELECT nombre FROM Actor WHERE codigo IN (SELECT codActor FROM usuario_x_actor WHERE codUser=".$miUsuario[0]->{'codigo'}.");";
  $misActores = getJson($consulta); 


   //consultar genero de usuario
  $consulta="SELECT nombre FROM Genero WHERE codigo IN (SELECT codgenero FROM usuario_x_genero WHERE codUser=".$miUsuario[0]->{'codigo'}.");";
  $misGeneros = getJson($consulta); 
  ?>

    <div class="container">
     
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark row">
        <div class="col-md-9 px-0">
          <h2 class="display-4 font-italic">Bienvenido  </h2>
          <h1 class="display-4 font-italic"><?php echo $miUsuario[0]->{'nombre_apellido'};?></h1>
          <p class="lead mb-0">Sexo:  <?php echo $miUsuario[0]->{'sexo'}; ?>, Usuario:  <?php echo $miUsuario[0]->{'user'}; ?></p>
          
        </div>
        <div class="col-md-3">
          <img  src="img/perfil.png" title="MiFoto" alt="" width="200" height="200" >
        </div>
      </div>

      <div class="row mb-3 justify-content-between">
        <div class="col-md-6">
          <div class="card flex-md-row mb-1 box-shadow h-md-250">
  
              
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Pelicula</strong>
                <h5 class="mb-1">
                  <a class="text-dark" href="#"><?php echo $misPeliculas[0]->{'nombre'}?></a>
                </h5>
                <p class="card-text mb-auto"><?php echo $misPeliculas[0]->{'descripcion'}?></p>
              </div>
            
                <img  src="img/pelicula.png" width="200" height="200" alt="Card img cap">
          </div>

        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Actor</strong>
              <h5 class="mb-0">
                <a class="text-dark"><?php echo $misActores[0]->{'nombre'}?></a>
              </h5>
      
              <p class="card-text mb-auto">Reconocido por su fama mundial.</p>
              
            </div>
           <img  src="img/actor.png" width="200" height="200" alt="Card img cap">
          </div>
        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-1 box-shadow h-md-250">
            
             
            
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Género Preferido</strong>
                <h5 class="mb-1">
                  <a class="text-dark" href="#"><?php echo $misGeneros[0]->{'nombre'}?></a>
                </h5>
                <p class="card-text mb-auto">Es uno de los mejores para gente joven.</p>
              </div>
            
                <img  src="img/genero.png" width="200" height="200" alt="Card img cap">
          </div>

        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Cine</strong>
              <h5 class="mb-0">
                <a class="text-dark">CINEMARK</a>
              </h5>
      
              <p class="card-text mb-auto">Los cines obtuvieron su fama mundial desde ya hace varias descadas.</p>
              
            </div>
           <img  src="img/cine.png" width="200" height="200" alt="Card img cap">
          </div>
        </div>



      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
