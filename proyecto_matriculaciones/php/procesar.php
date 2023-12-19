<?php
$host = "localhost";
$nombrebd = "matriculacion";
$user = "root";
$pass = "";

$bd = mysqli_connect($host, $user, $pass, $nombrebd);
mysqli_set_charset($bd, "utf8");

if(isset($_POST['nuevo'])) {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha_nac'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $padres = $_POST['padres'];
    $DNI = $_POST['DNI'];
    $nivel = $_POST['nivel'];
    $escuela_ant = $_POST['escuela_ant'];
    $informacion_medica = $_POST['inf_medica'];
    $contacto_emergencia = $_POST['contacto_emergencia'];

    if(empty($nombre) || empty($fecha) || empty($direccion) || empty($telefono)|| empty($email)|| empty($padres)|| 
    empty($DNI)|| empty($nivel)|| empty($escuela_ant)|| empty($informacion_medica)|| empty($contacto_emergencia)) {
        echo "Todos los campos son obligatorios porfavor vuelva a rellenar el formulario.";
        header("refresh: 5; form_mat.php");

    } else {
        $insert = "INSERT INTO datos_mat(nombre_alu, fecha_nac, direccion_dom, telefono, email, nombre_padre, DNI, 
        curso_elegido, escuela_ant, inf_medica, cont_emergencia)" .
        " VALUES('$nombre', '$fecha', '$direccion', '$telefono', '$email', '$padres', '$DNI', '$nivel', 
        '$escuela_ant', '$informacion_medica', '$contacto_emergencia')";

        mysqli_query($bd, $insert);
        echo "Matricula enviada, muchas gracias.";
        header("refresh: 5; ./info_mat.php?DNI=$DNI");

    }
}
?>