
<?php
session_start();
	//definicion de variables
$usuNombre = $_POST['usu_nombre'];
$usuCI = $_POST['usu_cedula'];   //captura de datos por post
$usuUser = $_POST['usu_user'];
$usuClave = $_POST['usu_pass'];

  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "prueba3";

  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);

  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }

   // Consulta a la base de datos.
$query = "INSERT INTO  `usuarios`(`usu_nombre`,`usu_cedula`,`usu_user`,`usu_password`) VALUES ('$usuNombre','$usuCI','$usuUser','$usuClave')";
  $resultado = mysqli_query($conn,$query);
  //Verifica que la consulta se realizo con o sin coincidencias en la base
  if($resultado){
    echo 'los datos han sido grabados<br/>';
	   }
    else
	   {
        echo("Ups...! algo salió mal");}

?>
