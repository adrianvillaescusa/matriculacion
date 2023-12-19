<!DOCTYPE html>
    <html>
        <head>
            <title>Listado</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos_lista.css">
        </head>
        <body>
            <div class= "container">
                <div class="header">
                    <img src="../imgs/logo.png" alt="logoies" class="img1">
                    <img src="../imgs/logo.png" alt="logoies" class="img2">
                    <h1>IES SanVicente</h1>
                    <div class="menu">
                        <ul>
                            <li><a href = "../index.html" >Home</a></li>
                            <li><a href = "./form_mat.php" >Matriculación</a></li>
                            <li><a href = "./login.php" >Base de datos Matriculación</a></li>
                            <li class="menu"><button onclick="redireccion()">Info personal</button></li>
                        </ul>
                        <script src="../js/redirect2.js"></script>
                    </div>
                </div>
                <div class="main"></div>

            <?php
            $host = "localhost";
            $nombrebd = "matriculacion";
            $user = "root";
            $pass = "";

            $bd = mysqli_connect($host, $user, $pass, $nombrebd);
            mysqli_set_charset($bd, "utf8");

            $consulta = "SELECT * FROM datos_mat";
            $resultat = mysqli_query($bd, $consulta);

            echo "<table>";
            echo "<caption>Base de Datos</caption>";
            echo "<tr><th>Nombre</th>  <th>Fecha</th>  <th>Dirección</th>  <th>Teléfono</th>
            <th>Email</th>  <th>Padres/Tutores</th>  <th>DNI</th>  <th>Curso</th>  
            <th>Escuela Anterior</th>  <th>Información médica</th> <th>Contacto emergencia</th></tr>";

            while ($fila = mysqli_fetch_assoc($resultat))
            {
                $fecha = $fila['fecha_nac'];
                $direccion = $fila['direccion_dom'];
                $telefono = $fila['telefono'];
                $email = $fila['email'];
                $DNI = $fila['DNI'];
                $padres = $fila['nombre_padre'];
                $nombre = $fila['nombre_alu'];
                $nivel = $fila['curso_elegido'];
                $escuela_ant = $fila['escuela_ant'];
                $informacion_medica = $fila['inf_medica'];
                $contacto_emergencia = $fila['cont_emergencia'];

                echo "<tr><td>$nombre</td>  <td>$fecha</td>  <td>$direccion</td>  <td>$telefono</td>  
                <td>$email</td>  <td>$padres</td>  <td>$DNI</td>  <td>$nivel</td>  
                <td>$escuela_ant</td>  <td>$informacion_medica</td> <td>$contacto_emergencia</td>
                <td><a href='./borrar.php?DNI=$DNI' class='otros'><strong>Borrar</strong></a></td>
                <td><a href='./editar.php?DNI=$DNI' class='otros'><strong>Editar</strong></a></td></tr>";
            }

            ?>
        </body>
    </html>