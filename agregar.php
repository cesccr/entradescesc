<?php

if(!empty($_POST)){
	if(isset($_POST["nmaes"]) &&isset($_POST["tournmaes"]) &&isset($_POST["price"]) &&isset($_POST["address"]) &&isset($_POST["dayes"])){
		if($_POST["nmaes"]!=""&& $_POST["tournmaes"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "insert into person(nmaes,tournmaes,price,address,dayes,created_at) value (\"$_POST[nmaes]\",\"$_POST[tournmaes]\",\"$_POST[price]\",\"$_POST[address]\",\"$_POST[dayes]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>