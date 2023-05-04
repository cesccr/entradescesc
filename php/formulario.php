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

<?php if($artistes!=null):?>

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
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>