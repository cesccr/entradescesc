<?php
    session_start();

    require_once 'includes/conexion.php';

    // Si existe la sesion el email dentro de la sesión id_usuario se realiza la consulta a la base de datos
    if(isset($_SESSION['id_usuario']['email'])){
        $email = $_SESSION['id_usuario']['email'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = mysqli_query($db, $sql);

        $usuario = mysqli_fetch_assoc($login);
    }
?>

<html>
	<head>
    
  <link rel="stylesheet" href="css/styles.css">
  <!-- <style>
        body {
            background-image: url(img/portada.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #FFFFFF;
        }
    </style> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="dropdown">
</div>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</div>
		<title>ENTRADES A ESPECTACLES</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php require_once 'includes/cabecera.php' ?>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gestió Usuari
  </button>
  <a href="dataes.php" class="btn btn-info">Dates Espectacles</a>
  <br>
  <br>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="usuari.php">Gestio del meu compte</a>
    <a class="dropdown-item" href="logout.php">Tancar Sessió</a>
  </div>
  
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>ESPECTACLES RECENTS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-primary">Afegir espectacle</a>
<br><br>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">NOU ESPECTACLE</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="name">Artista</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label for="album">Albúm</label>
    <input type="text" class="form-control" name="album" required>
  </div>
  <div class="form-group">
    <label for="date">Data Concert</label>
    <input type="text" class="form-control" name="date" required>
  </div>
  <div class="form-group">
    <label for="city">Ciutat</label>
    <input type="text" class="form-control" name="city" >
  </div>
  <div class="form-group">
    <label for="preu">Preu</label>
    <input type="text" class="form-control" name="preu" >
  </div>
<br>
  <button type="submit" class="btn btn-success">Afegir</button>
  
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  

<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="container">
  <div class="row">
    <div class="col-md-12">
      
    </div>
  </div>
</div>

  </body>
</html>

