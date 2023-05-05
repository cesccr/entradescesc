<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from month where id = ".$_GET["id"];
$query = $con->query($sql1);
$month = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $month=$r;
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
<?php if($month!=null):?>

  <div style="display:flex; justify-content:center; align-items:center; height:100vh;">
  <div style="border:1px solid black; padding:20px;">
    <form role="form" method="post" action="actualizar.php">
      <div class="form-group">
        <label for="name">Mes del espectacle</label>
        <input type="text" class="form-control" value="<?php echo $month->name; ?>" name="name" required>
      </div>
      <div class="form-group">
        <label for="tipus">Tipus de espectacle</label>
        <input type="text" class="form-control" value="<?php echo $month->tipus; ?>" name="tipus" required>
      </div>
      <div class="form-group">
        <label for="seient">Seient ubicat</label>
        <input type="text" class="form-control" value="<?php echo $month->seient; ?>" name="seient" required>
      </div>
      <div class="form-group">
        <label for="vip">VIP</label>
        <input type="text" class="form-control" value="<?php echo $month->vip; ?>" name="vip" >
      </div>
      <div class="form-group">
        <label for="preu">Preu</label>
        <input type="text" class="form-control" value="<?php echo $month->preu; ?>" name="preu" >
      </div>
      <input type="hidden" name="id" value="<?php echo $month->id; ?>">
      <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
  </div>
</div>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>

</body>
</htm>