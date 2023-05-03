<?php

// Cal iniciar la sessió abans de crear-la (línia 23)session_start();

require_once 'includes/conexion.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    $usuario = mysqli_fetch_assoc($login);

// Comprovació de la contrasenya introduïda per l'usuari i l'emmagatzemada a la base de dades    $verify = password_verify($password, $usuario['password']);

    $mensaje = "ERROR CONTRASENYA INCORRECTE";

// Si els resultats (count) són majors a zero i la contrasenya es verifica ...    if(count($usuario) > 0 && $verify){
// Emmagatzemem aquest nou usuari en una sessió activa perquè navegui        $_SESSION['id_usuario'] = $usuario;
        header('Location: entrades.php');
    }else{
        $mensaje = "Error,dades incorrectes";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<style>
        body {
            background-image: url(img/titulo.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #FFFFFF;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accedeix amb el teu compte</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require_once 'includes/cabecera.php' ?>

<!-- Missatge a imprimir en cas d'error el login -->
    <?php if(!empty($mensaje)) : ?>
        <p id="error"> <?= $mensaje ?> </p>
    <?php endif; ?>

    <h1>Iniciar Sessió</h1>
    <span>o <a href="singup.php" id="btnregister">Registrar-se</a></span>

    <form id="login" action="login.php" method="POST">
        <label for="email" id="id_email">Email</label>
        <input type="email" name="email" placeholder="Introdueix el teu correu electrònic">
        <label for="password" id="id_pass">Contrasenya</label>
        <input type="password" name="password" placeholder="Introdueix la teva contrasenya">

        <input type="submit" id="enviar" value="Entrar!">    
    </form>
    
    <?php require_once 'includes/footer.php' ?>