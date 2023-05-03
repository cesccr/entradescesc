<?php 

    // Iniciem la sessio
    session_start();

    // Borrem la sessio
    session_unset();

    // Destruim la sessio
    session_destroy();

    // Redirecció
    header('Location: index.php');

?>