<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
	  <div align="center">Usuarios</div></h1>
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

$query = "SELECT * FROM usuarios";
  $resultado = mysqli_query($conn,$query);
?>
<table align="center">
	<thead bgcolor="#B3B3B3">
<tr>
<th>Código</th>
<th>Nombre</th>
<th>Cedula</th>
	<th>Usuario</th>
</tr>
		</thead>
<?php
//Mostramos los registros
while ($row = mysqli_fetch_array($resultado))
{
echo '<tr><td>'.$row["usu_codigo"].'</td>';
echo '<td>'.$row["usu_nombre"].'</td>';
echo '<td>'.$row["usu_cedula"].'</td>';
echo '<td>'.$row["usu_user"].'</td></tr>';
}
mysqli_free_result($resultado)
?>
</table>

</body>
</html>
