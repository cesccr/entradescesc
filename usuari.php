<?php if(isset($_SESSION['id_usuario'])) : ?>
    <div class="lg-exito">HOLA! 
    <span id="lg-correo"> <?= $_SESSION['id_usuario']['email'] ?> </span><br>
    Has iniciat sessió correctament
    <a href="logout.php" id="logout">Tancar sessió</a>
    </div> 
    <?php endif; ?>