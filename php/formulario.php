<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from artistes where id = ".$_GET["id"];
$query = $con->query($sql1);
$artistes = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $artistes=$r;
  break;
}

  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Actualizar artista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #ABABAB;
    }
  </style>
</head>
<body>
<?php if($artistes!=null):?>

  <div style="display:flex; justify-content:center; align-items:center; height:100vh;">
  <div style="border:1px solid black; padding:20px;">
    <form role="form" method="post" action="php/actualizar.php">
      <div class="form-group">
        <label for="name">Nom Artista</label>
        <input type="text" class="form-control" value="<?php echo $artistes->name; ?>" name="name" required>
      </div>
      <div class="form-group">
        <label for="album">Album</label>
        <input type="text" class="form-control" value="<?php echo $artistes->album; ?>" name="album" required>
      </div>
      <div class="form-group">
        <label for="date">Data del concert</label>
        <input type="text" class="form-control" value="<?php echo $artistes->date; ?>" name="date" required>
      </div>
      <div class="form-group">
        <label for="city">Ciutat</label>
        <input type="text" class="form-control" value="<?php echo $artistes->city; ?>" name="city" >
      </div>
      <div class="form-group">
        <label for="preu">Preu</label>
        <input type="text" class="form-control" value="<?php echo $artistes->preu; ?>" name="preu" >
      </div>
      <input type="hidden" name="id" value="<?php echo $artistes->id; ?>">
      <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
  </div>
</div>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>

</body>
</htm>