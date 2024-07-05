<?php
$page = 'preguntas-frecuentes';
include 'header.php';
?>

<div class="container mt-5">
        <h2 class="text-center mb-4 card card-header">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">
            <!-- Pregunta 1 -->
            <div class="card faq-card">
                <div class="card-header faq-header" id="faqHeading1">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true"
                            aria-controls="faqCollapse1">
                            ¿Cómo puedo realizar una compra?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1"
                    data-bs-parent="#faqAccordion">
                    <div class="card-body">
                        Para realizar una compra, simplemente navegue por nuestro catálogo, seleccione los productos que
                        desea y añádalos al carrito. Luego, proceda a la página de pago para completar su compra.
                    </div>
                </div>
            </div>
            <!-- Pregunta 2 -->
            <div class="card faq-card">
                <div class="card-header faq-header" id="faqHeading2">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false"
                            aria-controls="faqCollapse2">
                            ¿Cuáles son las opciones de pago disponibles?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="card-body">
                        Aceptamos diversas formas de pago, incluyendo tarjetas de crédito, débito, PayPal y
                        transferencias bancarias. Todas las transacciones son seguras y encriptadas.
                    </div>
                </div>
            </div>
            <!-- Pregunta 3 -->
            <div class="card faq-card">
                <div class="card-header faq-header" id="faqHeading3">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false"
                            aria-controls="faqCollapse3">
                            ¿Cómo puedo rastrear mi pedido?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="card-body">
                        Una vez que su pedido haya sido enviado, recibirá un correo electrónico con un número de
                        seguimiento. Puede utilizar este número para rastrear su pedido en nuestro sitio web.
                    </div>
                </div>
            </div>
            <!-- Pregunta 4 -->
            <div class="card faq-card">
                <div class="card-header faq-header" id="faqHeading4">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false"
                            aria-controls="faqCollapse4">
                            ¿Cuál es la política de devoluciones?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse4" class="collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="card-body">
                        Puede devolver cualquier producto dentro de los 30 días posteriores a la compra para obtener un
                        reembolso completo. El producto debe estar en su estado original y sin usar.
                    </div>
                </div>
            </div>
            <!-- Pregunta 5 -->
            <div class="card faq-card">
                <div class="card-header faq-header" id="faqHeading5">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark text-decoration-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false"
                            aria-controls="faqCollapse5">
                            ¿Cómo puedo contactar con atención al cliente?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse5" class="collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="card-body">
                        Puede ponerse en contacto con nuestro equipo de atención al cliente a través de nuestro
                        formulario de contacto en el sitio web, por correo electrónico o llamando a nuestro número de
                        atención al cliente disponible en la sección de contacto.
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>