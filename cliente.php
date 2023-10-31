<html>
<head>
	<title>Pago Boleto</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="vercliente.php">Ver Clientes</a> | <a href="cerrarsesion.php">Cerrar Sesion</a>
	<br/><br/>

	<form action="clienteproceso.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombres"></td>
			</tr>
			<tr> 
				<td>A.Paterno</td>
				<td><input type="text" name="AP"></td>
			</tr>
            <tr> 
				<td>A.Materno</td>
				<td><input type="text" name="AM"></td>
			</tr>
            <tr> 
				<td>Telefono</td>
				<td><input type="number" name="tel"></td>
			</tr>
            <tr> 
				<td>Codigo Postal</td>
				<td><input type="number" name="copo"></td>
			</tr>
            <tr> 
				<td>Dirreccion</td>
				<td><input type="text" name="direc"></td>
			</tr>
            <tr> 
				<td>Sector</td>
				<td><input type="text" name="sector"></td>
			</tr>
			<tr> 
				<td>Fecha Nacimiento</td>
				<td><input type="date" name="FechaNac"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="agregar" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

