<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from artistes";
$query = $con->query($sql1);
?>

<?php
      $per_page = 10;
      $result = mysqli_query($con, "SELECT COUNT(*) AS count FROM artistes");
      $row = mysqli_fetch_assoc($result);
      $total_rows = $row['count'];
      $total_pages = ceil($total_rows / $per_page);
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $offset = ($current_page - 1) * $per_page;
      $sql = "SELECT * FROM artistes LIMIT $offset, $per_page";
      $result = mysqli_query($con, $sql);
      ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Artista</th>
            <th>Album</th>
            <th>Data Concert</th>
            <th>Ciutat</th>
            <th>Preu</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['album']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['preu']; ?></td>
              <td style="width:220px;">
		<a href="./editar.php?id=<?php echo $row["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $row["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<a href="./veureconcerts.php" class="btn btn-info">Veure</a>
		<script>
		$("#del-"+<?php echo $row["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas segur?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $row["id"];?>;

			}

		});
		</script>
	</td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <ul class="pagination">
        <?php
        if ($current_page > 1) {
          echo "<li class='page-item'><a class='page-link' href='?page=".($current_page - 1)."'>Anterior</a></li>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
          echo "<li class='page-item ";
          if ($current_page == $i) {
            echo "active";
          }
          echo "'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        if ($current_page < $total_pages) {
          echo "<li class='page-item'><a class='page-link' href='?page=".($current_page + 1)."'>Siguiente</a></li>";
        }
        ?>
      </ul>
