<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["album"]) &&isset($_POST["date"]) &&isset($_POST["city"]) &&isset($_POST["preu"])){
		if($_POST["name"]!=""&& $_POST["album"]!=""&&$_POST["city"]!=""){
			include "conexion.php";
			
			$sql = "insert into artistes(name,album,date,city,preu,created_at) value (\"$_POST[name]\",\"$_POST[album]\",\"$_POST[date]\",\"$_POST[city]\",\"$_POST[preu]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Afegit correctament.\");window.location='../entrades.php';</script>";
			}else{
				print "<script>alert(\"No s'ha pogut afegir.\");window.location='../entrades.php';</script>";

			}
		}
	}
}



?>