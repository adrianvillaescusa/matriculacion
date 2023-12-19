<!DOCTYPE html>
    <html>
        <head>
            <title>Formulario de Matriculación</title>
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

                <?php
                $host = "localhost";
                $nombrebd = "matriculacion";
                $user = "root";
                $pass = "";

                $bd = mysqli_connect($host, $user, $pass, $nombrebd);
                mysqli_set_charset($bd, "utf8");

                $DNI = $_GET['DNI'];

                $consulta = "SELECT * FROM datos_mat WHERE DNI='$DNI'";
                $resultat = mysqli_query($bd, $consulta);

                 while ($fila = mysqli_fetch_assoc($resultat)){
                $fecha = $fila['fecha_nac'];
                $direccion = $fila['direccion_dom'];
                $telefono = $fila['telefono'];
                $email = $fila['email'];
                $padres = $fila['nombre_padre'];
                $nombre = $fila['nombre_alu'];
                $nivel = $fila['curso_elegido'];
                $escuela_ant = $fila['escuela_ant'];
                $informacion_medica = $fila['inf_medica'];
                $contacto_emergencia = $fila['cont_emergencia'];
                }

                ?>

                <h1>Formulario de Matriculación</h1>
                <div class="form">
                    <form action="modificar.php?DNI=<?php echo $DNI ?>" method="POST">
                        <label for="nombre_alu"><strong>Nombre del estudiante</strong>:</label>
                        <input type="text" id="nombre_alu" name="nombre_alu" value="<?php echo $nombre ?>" required><br><br>

                        <label for="fecha_nac"><strong>Fecha de nacimiento</strong>:</label>
                        <input type="date" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha ?>" required><br><br>

                        <label for="direccion_dom"><strong>Dirección de residencia</strong>:</label>
                        <input type="text" id="direccion_dom" name="direccion_dom" value="<?php echo $direccion ?>" required><br><br>

                        <label for="telefono"><strong>Número de teléfono</strong>:</label>
                        <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono ?>" required><br><br>

                        <label for="email"><strong>Dirección de correo electrónico</strong>:</label>
                        <input type="email" id="email" name="email" value="<?php echo $email ?>" required><br><br>

                        <label for="nombre_padre"><strong>Nombre de los padres/tutores</strong>:</label>
                        <input type="text" id="nombre_padre" name="nombre_padre" value="<?php echo $padres ?>" required><br><br>

                        <label for="DNI"><strong>Número de identificación del estudiante</strong>:</label>
                        <input type="text" id="DNI" name="DNI" value="<?php echo $DNI ?>" required><br><br>

                        <label for="curso_elegido"><strong>Nivel o grado al que se está matriculando</strong>:</label>
                        <input type="text" id="curso_elegido" name="curso_elegido" value="<?php echo $nivel ?>" required><br><br>

                        <label for="escuela_ant"><strong>Información sobre la escuela anterior</strong>:</label>
                        <input type="text" id="escuela_ant" name="escuela_ant" value="<?php echo $escuela_ant ?>"><br><br>


                        <label for="inf_medica"><strong>Información médica relevante</strong>:</label>
                        <textarea id="inf_medica" name="inf_medica" value="<?php echo $informacion_medica ?>"></textarea><br><br>

                        <label for="cont_emergencia"><strong>Información de contacto de emergencia</strong>:</label>
                        <input type="text" id="cont_emergencia" name="cont_emergencia" value="<?php echo $contacto_emergencia ?>" required><br><br>

                        <label for="consentimiento"><strong>Consentimiento y autorización</strong>:</label>
                        <input type="checkbox" id="consentimiento" name="consentimiento" required>
                        <label for="consentimiento"><strong>Acepto los términos y condiciones</strong></label><br><br>

                        <input type="submit" name="nuevo" value="Enviar">
                    </form>
                </div>
            </div>
        </body>
    </html>