
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió Usuari Registra't</title>
    <?php if(isset($_SESSION['id_usuario'])) : ?>
    <div class="lg-exito">HOLA! 
    <span id="lg-correo"> <?= $_SESSION['id_usuario']['email'] ?> </span><br>
    Has iniciat sessió correctament
    <a href="logout.php" id="logout">Tancar sessió</a>
    </div>
</head>
<body>

</body>
</html>