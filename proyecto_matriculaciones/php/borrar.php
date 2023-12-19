<?php
$host = "localhost";
$nombrebd = "matriculacion";
$user = "root";
$pass = "";

$bd = mysqli_connect($host, $user, $pass, $nombrebd);
mysqli_set_charset($bd, "utf8");

$DNI = $_GET['DNI'];

$borrar = "DELETE FROM datos_mat WHERE DNI='$DNI'";

mysqli_query($bd, $borrar);
echo "Matricula borrada";
header("refresh: 5; ./listado.php");

?>