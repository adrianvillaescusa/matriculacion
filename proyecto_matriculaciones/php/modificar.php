<?php
$host = "localhost";
$nombrebd = "matriculacion";
$user = "root";
$pass = "";

$bd = mysqli_connect($host, $user, $pass, $nombrebd);
mysqli_set_charset($bd, "utf8");

$DNI = $_GET['DNI'];

if(isset($_POST['nuevo'])) {
    $fecha = $_POST['fecha_nac'];
    $direccion = $_POST['direccion_dom'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $padres = $_POST['nombre_padre'];
    $nombre = $_POST['nombre_alu'];
    $nivel = $_POST['curso_elegido'];
    $escuela_ant = $_POST['escuela_ant'];
    $informacion_medica = $_POST['inf_medica'];
    $contacto_emergencia = $_POST['cont_emergencia'];

    if(empty($nombre) || empty($DNI) || empty($telefono)) {
        echo "Todos los campos son obligatorios.";
        header("refresh: 5; ./editar.php");

    } else {
        $update = "UPDATE datos_mat SET nombre_alu='$nombre', fecha_nac='$fecha', curso_elegido='$nivel', escuela_ant='$escuela_ant', 
        inf_medica='$informacion_medica', cont_emergencia='$contacto_emergencia',
        direccion_dom='$direccion', telefono='$telefono', email='$email', nombre_padre='$padres' WHERE DNI = '$DNI'";

        mysqli_query($bd, $update);
        echo "Matricula actualizada.";
        header("refresh: 5; ./listado.php");

    }
}
?>