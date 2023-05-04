<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM artistes WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminat correctament.\");window.location='../entrades.php';</script>";
			}else{
				print "<script>alert(\"No s'ha pogut eliminar.\");window.location='../entrades.php';</script>";

			}
}

?>