<!DOCTYPE html>
    <html>
        <head>
            <title>Información Matricula</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos_info.css">
            <script src="../js/jspdf.js"></script>
        </head>
        <body>

            <?php
                $host = "localhost";
                $nombrebd = "matriculacion";
                $user = "root";
                $pass = "";

                $bd = mysqli_connect($host, $user, $pass, $nombrebd);
                mysqli_set_charset($bd, "utf8");

                $DNI = $_GET['DNI'];

                $consulta = "SELECT * FROM datos_mat WHERE DNI= '$DNI' ";
                $resultat = mysqli_query($bd, $consulta);
                

                
            ?>
            <div class= "container">
                <div class="header">
                    <img src="../imgs/logo.png" alt="logoies" class="img1">
                    <img src="../imgs/logo.png" alt="logoies" class="img2">
                    <h1>IES SanVicente</h1>
                    <div class="menu">
                        <ul>
                            <li><a href = "../index.html" class="principal">Home</a></li>
                            <li><a href = "./form_mat.php" class="principal">Matriculación</a></li>
                            <li><a href = "./login.php" class="principal">Base de datos Matriculación</a></li>
                            <li class="menu"><button onclick="redireccion()">Info personal</button></li>
                        </ul>
                        <script src="../js/redirect2.js"></script>
                    </div>
                </div>
                <div class="main">
                    <div class ="content">
                        <div class="primero" id="primero">
                            <?php
                                        while ($fila = mysqli_fetch_assoc($resultat))
                                {
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

                                echo "
                                    <h2>Ficha Matriculación</h2>
                                    
                                    <p><strong>Nombre y apellidos</strong>:  $nombre  </p>
 
                                    <p><strong>Documento Nacional de Identidad</strong>:  $DNI  </p>
                                    
                                    <p><strong>Fecha de nacimiento</strong>: $fecha  </p>
                                    
                                    <p><strong>Dirección de su domicilio</strong>:  $direccion </p>
                                    
                                    <p><strong>Teléfono de contacto</strong>:  $telefono  </p>
                                    
                                    <p><strong>Dirección de correo electrónico</strong>:  $email  </p>

                                    <p><strong>Nombre de padres/madres/tutores</strong>: $padres </p>
  

                   
                                    <p><strong>Curso elegido al que matricularse</strong>:  $nivel  </p>
                     
                                    <p><strong>Escuela en la que estudiaste previamente</strong>:  $escuela_ant  </p>
                       
                                    <p><strong>Información médica (en caso de no tener ninguna enfermedad escribir Nada)</strong>:  $informacion_medica  </p>
                          
                                    <p><strong>Contacto para casos de emergencia (Nombre y teléfono)</strong>:  $contacto_emergencia  </p>
                       
                                    ";
                                }
                            ?>
                        </div>
                        <div class="segundo">
                            <a href='../index.html' class="otros">Volver a Home</a>
                            <button onclick="generarPDF()" class="otros">Descargar PDF</button>
                            <a href='../index.html' class="otros">Editar datos</a>
                        </div>
                        
                </div>
            </div>
        </body>
    </html>