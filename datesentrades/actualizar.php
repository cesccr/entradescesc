<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["tipus"]) &&isset($_POST["seient"]) &&isset($_POST["vip"]) &&isset($_POST["preu"])){
		if($_POST["name"]!=""&& $_POST["tipus"]!=""&&$_POST["vip"]!=""){
			include "conexion.php";
			
			$sql = "update seient artistes set name=\"$_POST[name]\",tipus=\"$_POST[tipus]\",seient=\"$_POST[seient]\",vip=\"$_POST[vip]\",preu=\"$_POST[preu]\" where id=".$_POST["id"];
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