<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["tipus"]) &&isset($_POST["seient"]) &&isset($_POST["vip"]) &&isset($_POST["preu"])){
		if($_POST["name"]!=""&& $_POST["tipus"]!=""&&$_POST["vip"]!=""){
			include "conexion.php";
			
			$sql = "insert into month(name,tipus,seient,vip,preu,created_at) value (\"$_POST[name]\",\"$_POST[tipus]\",\"$_POST[seient]\",\"$_POST[vip]\",\"$_POST[preu]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Afegit correctament.\");window.location='dataentr.php';</script>";
			}else{
				print "<script>alert(\"No s'ha pogut afegir.\");window.location='dataentr.php';</script>";

			}
		}
	}
}



?>