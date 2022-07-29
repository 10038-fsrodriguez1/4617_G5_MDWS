<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
	  <div align="center">Reportes</div></h1>
<br>
<br>
<?php
	// Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "prueba3";
//Conexion con la base
 $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);

// Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
 // Consulta a la base de datos.


$sqli = "SELECT * FROM usuarios";
  $resultado = mysqli_query($conn,$sqli);
?>
<table align="center">
	<thead bgcolor="#B3B3B3">
<tr>
<th>Código</th>
<th>Nombre</th>
	<th>Cédula</th>
	<th>Usuario</th>
	<th>Contraseña</th>
</tr>
		</thead>
<?php
	while ($row = mysqli_fetch_array($resultado)){
		?>
	<tbody  align="center">
	<tr>
	<td><?php echo $row['usu_codigo']?></td>
	<td><?php echo $row['usu_nombre']?></td>
	<td><?php echo $row['usu_cedula']?></td>
	<td><?php echo $row['usu_user']?></td>
	<td><?php echo $row['usu_password']?></td>
	</tr>
		</tbody>
	<?php
	}
	//echo("<a href='asistencia.php'>Regresar</a>");
	?>
	</table>
</body>
</html>
