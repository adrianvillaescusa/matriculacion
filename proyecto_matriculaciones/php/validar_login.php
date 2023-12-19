<?php
// Obtener los valores ingresados por el usuario
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];


$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "matriculacion"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Consultar la base de datos para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

// Verificar si se encontró un resultado
if ($result->num_rows > 0) {
  echo "Inicio de sesión exitoso!";
  header("refresh: 5; ./listado.php");

} else {
  echo "Nombre de usuario o contraseña incorrectos.";
  header("refresh: 5; ./login.php");
}


?>