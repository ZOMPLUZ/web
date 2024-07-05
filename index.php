<?php include 'header.php'; ?>

<!--Sección del panel principal con información promocional-->
<section id="hero">
    <h4>Llevalo en Oferta</h4>
    <h2>Super ofertas</h2>
    <h1>En todos los productos</h1>
    <p>Llevate mas con el cupon de descuento del 20% en compras mayores a S/500</p>
    <button>Compra Ahora</button>
</section>

<!--Sección de características destacadas-->
<section id="feature" class="section-p1">
    <!--Caja de caracteristicas individuales de la empresa-->
    <div class="fe-box">
        <img src="img/caracteristicas/f1.png" alt="">
        <h6>Envio Gratis</h6>
    </div>
    <div class="fe-box">
        <img src="img/caracteristicas/f2.png" alt="">
        <h6>Pedidos en Línea</h6>
    </div>
    <div class="fe-box">
        <img src="img/caracteristicas/f3.png" alt="">
        <h6>Ahorra Dinero</h6>
    </div>
    <div class="fe-box">
        <img src="img/caracteristicas/f4.png" alt="">
        <h6>Promociones</h6>
    </div>
    <div class="fe-box">
        <img src="img/caracteristicas/f5.png" alt="">
        <h6>Productos Variados</h6>
    </div>
    <div class="fe-box">
        <img src="img/caracteristicas/f6.png" alt="">
        <h6>Abierto 24/7</h6>
    </div>
</section>

<!--sección de productos destacados-->
<section id="product1" class="section-p1">
    <h2>Productos Destacados</h2>
    <p>Variedad en productos para el hogar y la familia</p>
    <div class="pro-container">
        <!--Cada individual de producto-->
        <div class="pro">
            <img src="img/productos/almohada (1).jpg" alt="">
            <div class="des">
                <span>Aneto</span>
                <h5>Almohada blanca</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="d-producto.php"><ion-icon name="cart"></ion-icon></a>
        </div>
        <!-- Add other products similarly -->
    </div>
</section>

<!--Sección de banner con información promocional-->
<section id="banner" class="section-m1">
    <h4>Nuevo Servicio </h4>
    <h2>Hasta un <span>30% de descuento</span> en todos los productos para el hogar</h2>
    <a href="productos.php"><button class="normal">Explora Más</button></a>
</section>

<!--sección de subcripción al boletín informativo-->
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Suscribete para saber las ofertas</h4>
        <p>Ingresa tu Email para recibir notificaciones de los nuevos y productos <span> y ofertas
                especiales.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Tu direccion de email">
        <button class="normal">Suscribirse</button>
    </div>
</section>

<?php include 'footer.php'; ?>
