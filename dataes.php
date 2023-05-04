<?php
// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'crud1');

// Consulta para obtener los datos del producto
$query = "SELECT name FROM person WHERE id = 1";
$result = mysqli_query($conn, $query);

// Obtener los datos del producto
$producto = mysqli_fetch_assoc($result);
?>

<!-- Mostrar el name del producto enlazado a su página -->
<p>Visita nuestro <a href="<?php echo $producto['name']; ?>"><?php echo $producto['name']; ?></a></p>
