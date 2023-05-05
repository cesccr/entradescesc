<!DOCTYPE html>
<html>
<head>
	<title>Página PHP</title>
	<style>
		body {
			background-color: #ccc;
		}

		nav {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav ul li {
			margin: 0 10px;
		}

		nav ul li a {
			color: #fff;
			text-decoration: none;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
			margin-top: 50px;
			min-height: 400px;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="entrades.php">Inici</a></li>
			<li><a href="logout.php">Tancar Sessió</a></li>
		</ul>
	</nav>
    <?php
// Conexión a la base de datos
$con = mysqli_connect('localhost', 'root', '', 'crud1');

// Consulta para obtener los datos del artistes
$query = "SELECT name FROM artistes WHERE id = 1";
$result = mysqli_query($con, $query);

// Obtener los datos del artistes
$artista = mysqli_fetch_assoc($result);
?>
	<div class="container">
		<h1><a href="<?php echo $artista['name']; ?>"><?php echo $artista['name']; ?></a></h1>
		<p>El artista <a href="<?php echo $artista['name']; ?>"><?php echo $artista['name']; ?></a>
         fara el espectacle el dia 22 de gener
         El seu album principal es anomenat English and English ?></a>
         I tindra un preu similar al 89€
         
         El concert/espectacle es fara en la ciutat de Barcelona
         psum dolor sit amet, consectetur adipiscing elit. Duis sit amet feugiat velit, ac tempor velit. Vivamus eget malesuada urna.
          Vivamus semper lorem ac quam commodo, nec tincidunt turpis dignissim. Nullam lacinia massa eget laoreet malesuada. 
          Nulla facilisi. Nam lobortis, ante vitae vehicula lobortis, justo leo malesuada tellus, non congue quam mauris quis
           velit. Sed et posuere lorem. In varius turpis libero, in auctor enim lobortis nec. Etiam sit amet rutrum lorem. Pr
           aesent vitae fermentum justo. Praesent tincidunt nibh eu urna feugiat, eget consectetur tortor lacinia. Donec euis
           mod elit a turpis dictum, id dignissim nunc consectetur. Duis pretium quam vel enim consequat ultricies. Morbi
            pellentesque vestibulum sapien, sit amet interdum nibh pharetra nec.</p>

		<p>Phasellus sodales mi ac mauris hendrerit bibendum. Nunc sed magna id tellus ultricies semper. Praesent a mauris mauris. </p>

</body>
</html>
