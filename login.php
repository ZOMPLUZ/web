<?php
include 'header.php'; // Incluir el encabezado de la página si es necesario
include 'config.php'; // Incluir archivo de configuración
include 'conexion.php'; // Incluir archivo de conexión a la base de datos

session_start(); // Iniciar la sesión si aún no se ha iniciado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM tblusuario WHERE Email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verificar la contraseña
            if (password_verify($password, $user['Contraseña'])) {
                // Iniciar sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['Nombre'];
                $_SESSION['email'] = $user['Email'];
                header("Location: index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Contraseña incorrecta.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>No se encontró una cuenta con ese correo electrónico.</div>";
        }
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
    }
}
?>



<!-- Sección de autenticación centrada en la pantalla -->
<section class="auth-center">

    <!-- Caja de autenticación que contiene el formulario -->
    <div class="auth-box">

        <!-- Encabezado de la sección de autenticación -->
        <div class="auth-header">
            <!-- Título del encabezado -->
            <header id="auth-header-text">Login</header>
        </div>

        <!-- Contenedor del formulario de autenticación -->
        <div class="auth-form-container">

            <!-- Formulario de inicio de sesión -->
            <form id="login-form" class="auth-form" method="POST" action="login.php">

                <!-- Caja de entrada para el correo electrónico -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de correo electrónico (solo para lectores de pantalla) -->
                    <label for="login-email" class="sr-only">Email</label>
                    <!-- Campo de entrada para el correo electrónico -->
                    <input type="email" id="login-email" class="input-field" name="email" placeholder="Correo Electronico"
                        autocomplete="off" required>
                </div>

                <!-- Caja de entrada para la contraseña -->
                <div class="input-box">
                    <!-- Etiqueta para el campo de contraseña (solo para lectores de pantalla) -->
                    <label for="login-password" class="sr-only">Password</label>
                    <!-- Campo de entrada para la contraseña -->
                    <input type="password" id="login-password" class="input-field" name="password" placeholder="Contraseña"
                        autocomplete="off" required>
                </div>

                <!-- Contenedor para el botón de envío -->
                <div class="input-submit">
                    <!-- Botón de envío del formulario -->
                    <button type="submit" class="submit-btn" id="login-submit">Iniciar Sesion</button>
                </div>

                <!-- Enlace para cambiar al formulario de registro -->
                <div class="switch-link">
                    <p>No tienes una cuenta? <a id="switch-to-register" href="register.php">Registrate</a></p>
                </div>

            </form> <!-- Fin del formulario de inicio de sesión -->

        </div> <!-- Fin del contenedor del formulario de autenticación -->

    </div> <!-- Fin de la caja de autenticación -->

</section> <!-- Fin de la sección de autenticación centrada -->

<?php include 'footer.php'; ?>
