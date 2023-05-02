<?php

if(!empty($_POST)){
	if(isset($_POST["nmaes"]) &&isset($_POST["tournmaes"]) &&isset($_POST["price"]) &&isset($_POST["address"]) &&isset($_POST["dayes"])){
		if($_POST["nmaes"]!=""&& $_POST["tournmaes"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "update person set nmaes=\"$_POST[nmaes]\",tournmaes=\"$_POST[tournmaes]\",price=\"$_POST[price]\",address=\"$_POST[address]\",dayes=\"$_POST[dayes]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>