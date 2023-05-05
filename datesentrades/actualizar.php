<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["month"]) &&isset($_POST["seient"]) &&isset($_POST["vip"]) &&isset($_POST["preu"])){
		if($_POST["name"]!=""&& $_POST["month"]!=""&&$_POST["vip"]!=""){
			include "conexion.php";
			
			$sql = "update month set name=\"$_POST[name]\",month=\"$_POST[month]\",seient=\"$_POST[seient]\",vip=\"$_POST[vip]\",preu=\"$_POST[preu]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='dataentr.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='dataentr.php';</script>";

			}
		}
	}
}



?>