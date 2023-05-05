<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM month WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminat correctament.\");window.location='dataentr.php';</script>";
			}else{
				print "<script>alert(\"No s'ha pogut eliminar.\");window.location='dataentr.php';</script>";

			}
}

?>