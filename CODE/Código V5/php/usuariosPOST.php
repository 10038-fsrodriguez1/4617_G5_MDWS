
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

// VALIDACIONES

//if (empty($_POST['usu_nombre']) && empty($_POST['usu_cedula']) && empty($_POST['usu_user']) && empty($_POST['usu_pass'])){
//echo "<h1>Vuelva a intentar</h1>";
//}else{

if (empty($_POST['usu_nombre'])) {
  echo "<h1>- VUELVA A INGRESAR EL NOMBRE -</h1>";
}
if (empty($_POST['usu_cedula'])) {
  echo "<h1>- VUELVA A INGRESAR LA CEDULA -</h1>";
}
if (empty($_POST['usu_user'])) {
  echo "<h1>- VUELVA A INGRESAR EL USUARIO -</h1>";
}
if (empty($_POST['usu_pass'])) {
  echo "<h1>- VUELVA A INGRESAR LA CONTRASEÑA -</h1>";
} else {
  $query = "INSERT INTO  `usuarios`(`usu_nombre`,`usu_cedula`,`usu_user`,`usu_password`) VALUES ('$usuNombre','$usuCI','$usuUser','$usuClave')";
  $resultado = mysqli_query($conn,$query);
    //Verifica que la consulta se realizo con o sin coincidencias en la base
    if($resultado){
    echo "<h1>Los datos han sido grabados</h1>";
    }
}
//}

   // Consulta a la base de datos.

//}
