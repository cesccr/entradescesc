<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person where nmaes like '%$_GET[s]%' or tournmaes like '%$_GET[s]%' or address like '%$_GET[s]%' or price like '%$_GET[s]%' or dayes like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>price</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nmaes"]; ?></td>
	<td><?php echo $r["tournmaes"]; ?></td>
	<td><?php echo $r["price"]; ?></td>
	<td><?php echo $r["address"]; ?></td>
	<td><?php echo $r["dayes"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
