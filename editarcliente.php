<?php session_start(); ?>

<?php
if(!isset($_SESSION['validar'])) {
}
?>

<?php
// incluir la conexión a la base de datos
include_once("conexion.php");

if(isset($_POST['Editar']))
{	
	$id = $_POST['id'];
	$id_usu = $_SESSION['id'];
	$email = $_POST['email'];
	$nombres= $_POST['nombres'];
	$AP = $_POST['AP'];
	$AM = $_POST['AM'];
    $tel=$_POST['tel'];
    $copo=$_POST['copo'];
    $direc=$_POST['direc'];
    $sector=$_POST['sector'];
	$fecha = $_POST['FechaNac'];
	
	// comprobando campos vacíos
	if(empty($email)|| empty($nombres)|| empty($AP) || empty($AM)|| empty($tel)|| empty($copo)|| empty($direc) || empty($sector) || empty($fecha)) {

        
        if(empty($email)) {
			echo "<font color='red'>El campo Email está vacío.</font><br/>";
		}

        if(empty($nombres)) {
			echo "<font color='red'>El campo Nombres está vacío.</font><br/>";
		}

        if(empty($AP)) {
			echo "<font color='red'>El campo Apellido Paterno está vacío.</font><br/>";
		}

        if(empty($AM)) {
			echo "<font color='red'>El campo Apellido Materno está vacío.</font><br/>";
		}

        if(empty($tel)) {
			echo "<font color='red'>El campo Telefono está vacío.</font><br/>";
		}

        if(empty($copo)) {
			echo "<font color='red'>El campo Código postal está vacío.</font><br/>";
		}

        if(empty($direc)) {
			echo "<font color='red'>El campo Dirección está vacío.</font><br/>";
		}
		
        if(empty($sector)) {
			echo "<font color='red'>El campo Sector está vacío.</font><br/>";
		}
		if(empty($fecha)) {
			echo "<font color='red'>El campo Fecha Nacimiento está vacío.</font><br/>";
		}
		//enlace a la página anterior
		echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
	} else {	
		//actualizando la tabla
		$result = mysqli_query($mysqli, "UPDATE `clientes` SET `id_Cliente`='$id',`id_usu`='$id_usu',`email`='$email',`Nombres`='$nombres',`APaterno`='$AP',`AMaterno`='$AM',`telefono`='$tel',`copo`='$copo',`direccion`='$direc',`sector`='$sector',`fechadenacimiento`='$fecha' WHERE id_Cliente='$id'");
		
		//redirigiendo a la página de visualización. En nuestro caso, es ver.php
		header("Location: vercliente.php");
	}
}
?>
<?php
//obteniendo identificación de la URL
$id = $_GET['id'];

//seleccionar datos asociados con esta identificación en particular
$resultado = mysqli_query($mysqli, "SELECT * FROM clientes WHERE id_Cliente=$id");

while($res = mysqli_fetch_array($resultado))
{
	$email = $res['email'];
	$nombres = $res['Nombres'];
	$AP = $res['APaterno'];
	$AM = $res['AMaterno'];
	$tel = $res['telefono'];
	$copo = $res['copo'];
	$direc = $res['direccion'];
    $sector = $res['sector'];
	$fecha = $res['fechadenacimiento'];
}
?>
<html>
<head>	
	<title>Editar Cliente</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="vercliente.php">Ver Cliente</a> | <a href="cerrarsesion.php">Cerrar Sesión</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editarcliente.php">
		<table border="0">
        <tr>
				<td>Email</td>
				<td><input type="text" name="email" value='<?php echo $email; ?>'></td>
			</tr>
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombres" value='<?php echo $nombres; ?>'></td>
			</tr>
			<tr> 
				<td>A.Paterno</td>
				<td><input type="text" name="AP" value='<?php echo $AP; ?>'></td>
			</tr>
            <tr> 
				<td>A.Materno</td>
				<td><input type="text" name="AM" value='<?php echo $AM; ?>'></td>
			</tr>
            <tr> 
				<td>Telefono</td>
				<td><input type="number" name="tel" value='<?php echo $tel; ?>'></td>
			</tr>
            <tr> 
				<td>Codigo Postal</td>
				<td><input type="number" name="copo" value='<?php echo $copo; ?>'></td>
			</tr>
            <tr> 
				<td>Dirreccion</td>
				<td><input type="text" name="direc" value='<?php echo $direc; ?>'></td>
			</tr>
            <tr> 
				<td>Sector</td>
				<td><input type="text" name="sector" value='<?php echo $sector; ?>'></td>
			</tr>
			<tr> 
				<td>Fecha Nacimiento</td>
				<td><input type="date" name="FechaNac" value='<?php echo $fecha; ?>'></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
				<td><input type="submit" name="Editar" value="Editar"></td>
			</tr>
		</table>
	</form>
</body>
</html>