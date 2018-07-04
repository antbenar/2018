<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foro</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
    <?php include 'consulta.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).on("ready",function(){
        $.ajaxSetup({"cache":false});
        setInterval(loadcomment(),500);
      });
      var request = false;
      var archivo ="comentario.php";
      setInterval(loadcomment(),500);

      function loadcomment(){
        $.ajax({
          url:"comentario.php"
        }).done(function(data){
          $("#comeent").html(data);
        });
      }
    </script>
  </head>



<body style="background-image:url(img/fondocanva.png);">
  
<nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img  src="img/casa.png" title="MiFoto" alt="" width="30" height="30" >
            Home
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Perfil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Foro</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Configuración
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="editar.html">Editar Perfil</a>
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
<br><br><br>

<div class="container" style="background-image:url(img/fondo.jpg); ">
  <br>
  <div id="comeent"></div>


  <div class="card border-success mb-3" style="max-width: 70rem;">
    <div class="card-header">
      <strong> Comentar: </strong> 
    </div>
      <form role="form" method="post" action="conexion_foro.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tema" name='tema' placeholder="Titulo" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="Comentario" class="col-sm-2 control-label">Comentario</label>
            <div class="col-sm-12">
              <textarea class="form-control" rows="4" name="Comentario"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
          </div>
          
      </form>
  </div>
  <br>
</div>




</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>