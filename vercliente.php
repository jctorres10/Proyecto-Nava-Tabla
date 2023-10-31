<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
//incluye el archivo de conexión a la base de datos
include_once("conexion.php");

//obtención de datos en orden descendente (primero la última entrada)
$result = mysqli_query($mysqli, "SELECT * FROM clientes WHERE id_usu=".$_SESSION['id']." ORDER BY id_Cliente DESC");
?>

<html>
<head>
	<title>Pagos</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="cliente.php">Agregar Cliente</a> | <a href="cerrarsesion.php">Cerrar Sesión</a>
	<br/><br/>
	
	<table width='95%' border=0>
		<tr bgcolor='#CCCCCC'>
            <td>id_Cliente</td>
            <td>Email</td>
            <td>Nombres</td>
			<td>A.Paterno</td>
			<td>A.Materno</td>
			<td>Telefono</td>
			<td>Codigo Postal</td>
            <td>Dirreccion</td>
			<td>Sector</td>
			<td>Fech de nacimiento</td>

		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id_Cliente']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['Nombres']."</td>";
            echo "<td>".$res['APaterno']."</td>";
            echo "<td>".$res['AMaterno']."</td>";
            echo "<td>".$res['telefono']."</td>";
			echo "<td>".$res['copo']."</td>";
			echo "<td>".$res['direccion']."</td>";	
            echo "<td>".$res['sector']."</td>";
            echo "<td>".$res['fechadenacimiento']."</td>";
			echo "<td><a href=\"editarcliente.php?id=$res[id_Cliente]\">Editar</a> | <a href=\"borrarcliente.php?id=$res[id_Cliente]\" onClick=\"return confirm('¿Estás seguro que quieres eliminarlo?')\">Eliminar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
