<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="actualizar.php">
  <div class="form-group">
    <label for="nmaes">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->nmaes; ?>" nmaes="nmaes" required>
  </div>
  <div class="form-group">
    <label for="tournmaes">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person->tournmaes; ?>" nmaes="tournmaes" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" value="<?php echo $person->address; ?>" nmaes="address" required>
  </div>
  <div class="form-group">
    <label for="price">price</label>
    <input type="price" class="form-control" value="<?php echo $person->price; ?>" nmaes="price" >
  </div>
  <div class="form-group">
    <label for="dayes">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->dayes; ?>" nmaes="dayes" >
  </div>
<input type="hidden" nmaes="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>