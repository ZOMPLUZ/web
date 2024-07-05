
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Seventeen Perú</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <!--Sección de encabezado-->
    <section id="header">
        <!--Logo del sitio web-->
        <a href="index.php"><img src="img/logo.jpg" class="logo" alt=""></a>

        <!--Barra de navegación-->
        <div>
            <ul id="navbar">
                <!--Enlace a la pagina principal-->
                <li><a class="active" href="index.php">Principal</a></li>
                <!--Enlace a la pagina de productos-->
                <li><a href="producto.php">Productos</a></li>
                <!--Enlace a la pagina sobre nosotros-->
                <li><a href="nosotros.php">Nosotros</a></li>
                <!--Enlace a la sección de contactos dentro de la mísma página-->
                <li><a href="contactos.php">Contactos</a></li>
                <!--Enlace a la pagina de inicio de sesión-->
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="logout.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
                <?php else: ?>
                    <li><a href="login.php">Iniciar Sesion</a></li>
                <?php endif; ?>
                <!--Enlace al carrito de compras-->
                <li><a href="mostrarCarrito.php"><i class="fa fa-shopping-bag"></i>(
                    <?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>
                )</a></li>
                <!--Botón para cerrar la barra de navegacion en dispositivos moviles -->
                <a href="#" id="close"><i class="far fa fa-times"></i></a>
            </ul>
        </div>

        <!--Barra de navegación para dispositivos móviles-->
        <div id="mobile">
            <li><a href="mostrarCarrito.php"><i class="fa fa-shopping-bag"></i></a></li>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>



    