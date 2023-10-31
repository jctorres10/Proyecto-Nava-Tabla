<?php session_start(); ?>
<html>
<head>
	<title>Inicio</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Bienvenido a mi Tienda de Musica Vinill!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("conexion.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bienvenido <?php echo $_SESSION['name'] ?> ! <a href='cerrarsesion.php'>Cerrar Sesión</a><br/>
		<br/>
		<a href='vercliente.php'>Ver y Agregar Cliente</a>
		<br/><br/>
	<?php	
	} else {
		echo "Debe iniciar sesión para ver esta página.<br/><br/>";
		echo "<a href='iniciarsesion.php'>Iniciar Sesión</a> | <a href='registro.php'>Registro</a>";
	}
	?>
	<div id="footer">
		Jorge Alejandro Ceniceros Torres 5°J</a>
	</div>
</body>
</html>
