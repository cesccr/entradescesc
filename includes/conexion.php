<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'entrades';

$db = mysqli_connect($host, $username, $password, $database);

// Comprobacion de conexión satisfactoria o no
try{
    $con = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
} catch(PDOException $e){
    die('Conexion fallida: '. $e->getMessage());

}

// Codificación de caracteres a uft8
mysqli_query($db, "SET NAMES 'utf8'");