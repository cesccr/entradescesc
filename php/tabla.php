<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from artistes";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Artista</th>
	<th>Albúm</th>
	<th>Ciutat</th>
	<th>Data concert</th>
	<th>Preu</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["name"]; ?></td>
	<td><?php echo $r["album"]; ?></td>
	<td><?php echo $r["date"]; ?></td>
	<td><?php echo $r["city"]; ?></td>
	<td><?php echo $r["preu"]; ?></td>
	<td style="width:220px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<a href="./veureconcerts.php" class="btn btn-info">Veure</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas segur?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

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
