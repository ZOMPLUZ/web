<?php
include 'header.php'; // Incluir el encabezado de la página si es necesario
include 'config.php'; // Incluir archivo de configuración
include 'conexion.php'; // Incluir archivo de conexión a la base de datos

// Verificar el método de solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "<div class='alert alert-danger'>Las contraseñas no coinciden.</div>";
    } else {
        // Encriptar la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Verificar si el email ya está registrado
            $sql = "SELECT * FROM tblusuario WHERE Email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<div class='alert alert-danger'>El correo electrónico ya está registrado.</div>";
            } else {
                // Insertar nuevo usuario en la base de datos
                $sql_insert = "INSERT INTO tblusuario (Nombre, Email, Contraseña) VALUES (:username, :email, :password)";
                $stmt_insert = $pdo->prepare($sql_insert);
                $stmt_insert->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt_insert->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt_insert->bindParam(':password', $hashed_password, PDO::PARAM_STR);

                if ($stmt_insert->execute()) {
                    echo "<div class='alert alert-success'>Registro exitoso</div>";
                    // Redirigir al usuario a la página de inicio de sesión
                    header("Location: login.php");
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Error al registrar el usuario.</div>";
                }
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
        }
    }
}
?>




<!-- Sección de registro centrada en la pantalla -->
<section class="auth-center">

    <!-- Caja de registro que contiene el formulario -->
    <div class="auth-box">

        <!-- Encabezado de la sección de registro -->
        <div class="auth-header">
            <!-- Título del encabezado -->
            <header id="auth-header-text">Registro</header>
        </div>

        <!-- Contenedor del formulario de registro -->
        <div class="auth-form-container">

            <!-- Formulario de registro -->
            <form id="register-form" class="auth-form" method="POST" action="register.php">

                <!-- Caja de entrada para el usuario -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de usuario (solo para lectores de pantalla) -->
                    <label for="username" class="sr-only">Usuario</label>
                    <!-- Campo de entrada para el usuario -->
                    <input type="text" id="username" class="input-field" name="username" placeholder="Usuario"
                        autocomplete="off" required>
                </div>

                <!-- Caja de entrada para el correo electrónico -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de correo electrónico (solo para lectores de pantalla) -->
                    <label for="register-email" class="sr-only">Email</label>
                    <!-- Campo de entrada para el correo electrónico -->
                    <input type="email" id="register-email" class="input-field" name="email" placeholder="Correo Electronico"
                        autocomplete="off" required>
                </div>

                <!-- Caja de entrada para la contraseña -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de contraseña (solo para lectores de pantalla) -->
                    <label for="register-password" class="sr-only">Password</label>
                    <!-- Campo de entrada para la contraseña -->
                    <input type="password" id="register-password" class="input-field" name="password" placeholder="Contraseña"
                        autocomplete="off" required>
                </div>

                <!-- Caja de entrada para confirmar la contraseña -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de confirmar contraseña (solo para lectores de pantalla) -->
                    <label for="register-confirm-password" class="sr-only">Confirm Password</label>
                    <!-- Campo de entrada para confirmar la contraseña -->
                    <input type="password" id="register-confirm-password" class="input-field" name="confirm_password"
                        placeholder="Confirmar Contraseña" autocomplete="off" required>
                </div>

                <!-- Contenedor para el botón de envío -->
                <div class="input-submit">
                    <!-- Botón de envío del formulario -->
                    <button type="submit" class="submit-btn" id="register-submit">Registrarse</button>
                </div>

                <!-- Enlace para cambiar al formulario de inicio de sesión -->
                <div class="switch-link">
                    <p>Ya tienes una cuenta? <a id="switch-to-login" href="login.php">Iniciar Sesion</a></p>
                </div>

            </form> <!-- Fin del formulario de registro -->

        </div> <!-- Fin del contenedor del formulario de registro -->

    </div> <!-- Fin de la caja de registro -->

</section> <!-- Fin de la sección de registro centrada -->

<?php include 'footer.php'; ?>
