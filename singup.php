<?php

require_once 'includes/conexion.php';

$mensaje = "";

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Xifratge de contrasenya per quatre passos
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    // Creem la consulta del nou usuari
    $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$email', '$password_segura')";

    // Desem aquest nou usuari a la base de dades
    $guardar = mysqli_query($db, $sql);

// Si la consulta ha tingut èxit mostrem el missatge, en cas contrari es mostra lerror    if($guardar){
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

<!-- Mostrem el missatge creat anteriorment en cas d'èxit o error -->    <?php if(!empty($mensaje)) : ?>
        <p id="s-exito"> <?= $mensaje ?> </p> <!-- Necessari utilitzar la forma de <.?.= per mostrar el contingut d'una variable -->
    <?php endif; ?>

    <h1>Registrar-se</h1>
    <span>o <a href="login.php">Iniciar sessió</a></span>

    <form id="registro" action="singup.php" method="POST">
        <label for="nombre" id="login-nombre">Nom</label>
        <input type="text" name="nombre" id=i-nombre placeholder="Introdueix un nom">
        <label for="email" id="login-email">Email</label>
        <input type="email" name="email" id="i-email" placeholder="Introdueix el teu email">
        <label for="password" id="login-pass">Contrasenya</label>
        <input type="password" name="password" id="i-pass" placeholder="Introdueix la teva contrasenya">

        <input type="submit"id="singup" value="Entrar!"> 
    </form>

    <?php require_once 'includes/footer.php' ?>