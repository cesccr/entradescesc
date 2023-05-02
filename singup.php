<?php

require_once 'includes/conexion.php';

$mensaje = "";

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cifrado de contraseña por cuatro pasos
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    // Creamos la consulta del nuevo usuario
    $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$email', '$password_segura')";

    // Guardamos a ese nuevo usuario en la base de datos
    $guardar = mysqli_query($db, $sql);

    // Si la consulta ha tenido éxito mostramos el mensaje, en caso contrario se muestra el error
    if($guardar){
        $mensaje = "Registrat amb èxit!";
    }else{
        $mensaje = "ERROR AL REGISTRAR-SE";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
        body {
            background-image: url(img/registre.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #FFFFFF;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari de registre</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php require_once 'includes/cabecera.php' ?>

    <!-- Mostramos el mensaje creado anteriormente en caso de éxito o error -->
    <?php if(!empty($mensaje)) : ?>
        <p id="s-exito"> <?= $mensaje ?> </p> <!-- Necesario usar la forma de <.?.= para mostrar el contenido de una variable -->
    <?php endif; ?>

    <h1>Registrar-se</h1>
    <span>o <a href="login.php">Iniciar sessió</a></span>

    <form id="registro" action="singup.php" method="POST">
        <label for="nombre" id="login-nombre">Nom</label>
        <input type="text" name="nombre" id=i-nombre placeholder="Introdueix un nom">
        <label for="email" id="login-email">email</label>
        <input type="email" name="email" id="i-email" placeholder="Introdueix el teu email">
        <label for="password" id="login-pass">Contrasenya</label>
        <input type="password" name="password" id="i-pass" placeholder="Introdueix la teva contrasenya">

        <input type="submit"id="singup" value="Entrar!"> 
    </form>

    <?php require_once 'includes/footer.php' ?>