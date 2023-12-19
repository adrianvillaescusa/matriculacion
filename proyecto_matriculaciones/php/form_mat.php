<!DOCTYPE html>
    <html>
        <head>
            <title>Formulario de Matriculación</title>
            <link rel="stylesheet" type="text/css" href="../css/estilos_form.css">
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
                <h1>Formulario de Matriculación</h1>
                <div class="form">
                    <form action="procesar.php" method="POST">
                        <label for="nombre"><strong>Nombre del estudiante</strong>:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>

                        <label for="fecha_nac"><strong>Fecha de nacimiento</strong>:</label>
                        <input type="date" id="fecha_nac" name="fecha_nac" required><br><br>

                        <label for="direccion"><strong>Dirección de residencia</strong>:</label>
                        <input type="text" id="direccion" name="direccion" required><br><br>

                        <label for="telefono"><strong>Número de teléfono</strong>:</label>
                        <input type="tel" id="telefono" name="telefono" required><br><br>

                        <label for="email"><strong>Dirección de correo electrónico</strong>:</label>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="padres"><strong>Nombre de los padres/tutores</strong>:</label>
                        <input type="text" id="padres" name="padres" required><br><br>

                        <label for="DNI"><strong>Número de identificación del estudiante</strong>:</label>
                        <input type="text" id="DNI" name="DNI" required><br><br>

                        <label for="nivel"><strong>Nivel o grado al que se está matriculando</strong>:</label>
                        <input type="text" id="nivel" name="nivel" required><br><br>

                        <label for="escuela_ant"><strong>Información sobre la escuela anterior</strong>:</label>
                        <input type="text" id="escuela_ant" name="escuela_ant"><br><br>


                        <label for="informacion_medica"><strong>Información médica relevante</strong>:</label>
                        <textarea id="inf_medica" name="inf_medica"></textarea><br><br>

                        <label for="contacto_emergencia"><strong>Información de contacto de emergencia</strong>:</label>
                        <input type="text" id="contacto_emergencia" name="contacto_emergencia" required><br><br>

                        <label for="consentimiento"><strong>Consentimiento y autorización</strong>:</label>
                        <input type="checkbox" id="consentimiento" name="consentimiento" required>
                        <label for="consentimiento"><strong>Acepto los términos y condiciones</strong></label><br><br>

                        <input type="submit" name="nuevo" value="Enviar">
                    </form>
                </div>
            </div>
        </body>
</html>