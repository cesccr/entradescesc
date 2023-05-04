<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["album"]) &&isset($_POST["date"]) &&isset($_POST["city"]) &&isset($_POST["preu"])){
		if($_POST["name"]!=""&& $_POST["album"]!=""&&$_POST["city"]!=""){
			include "conexion.php";
			
			$sql = "update artistes set name=\"$_POST[name]\",album=\"$_POST[album]\",date=\"$_POST[date]\",city=\"$_POST[city]\",preu=\"$_POST[preu]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../entrades.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../entrades.php';</script>";

			}
		}
	}
}



?>