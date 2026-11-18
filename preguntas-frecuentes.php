<?php
$titulo_pagina = 'Preguntas frecuentes | Mely Nails';
$pagina_actual = 'preguntas-frecuentes';
$descripcion_pagina = 'Encontrá respuestas a las preguntas frecuentes sobre los servicios de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h2>Preguntas frecuentes</h2>
        <p>Te ayudamos a resolver tus dudas antes de reservar tu turno.</p>
    </section>

    <section class="accordion" id="preguntas">

        <div class="accordion-item">
            <h3 class="accordion-header">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#respuesta1"
                    aria-expanded="true"
                    aria-controls="respuesta1"
                >
                    ¿Cómo puedo reservar un turno?
                </button>
            </h3>

            <div
                id="respuesta1"
                class="accordion-collapse collapse show"
                data-bs-parent="#preguntas"
            >
                <div class="accordion-body">
                    Podés comunicarte mediante nuestro formulario de contacto para
                    consultar disponibilidad.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h3 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#respuesta2"
                    aria-expanded="false"
                    aria-controls="respuesta2"
                >
                    ¿Qué servicios ofrecen?
                </button>
            </h3>

            <div
                id="respuesta2"
                class="accordion-collapse collapse"
                data-bs-parent="#preguntas"
            >
                <div class="accordion-body">
                    Ofrecemos manicura clásica, esmaltado semipermanente y uñas
                    esculpidas.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h3 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#respuesta3"
                    aria-expanded="false"
                    aria-controls="respuesta3"
                >
                    ¿Dónde puedo consultar los precios?
                </button>
            </h3>

            <div
                id="respuesta3"
                class="accordion-collapse collapse"
                data-bs-parent="#preguntas"
            >
                <div class="accordion-body">
                    Podés visitar nuestra sección de precios o comunicarte con
                    nosotros.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h3 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#respuesta4"
                    aria-expanded="false"
                    aria-controls="respuesta4"
                >
                    ¿Puedo elegir mi propio diseño?
                </button>
            </h3>

            <div
                id="respuesta4"
                class="accordion-collapse collapse"
                data-bs-parent="#preguntas"
            >
                <div class="accordion-body">
                    Sí, podés consultar por diseños personalizados según tus gustos.
                </div>
            </div>
        </div>

    </section>

    <section class="text-center mt-5">
        <h2>¿Tenés otra consulta?</h2>
        <p>Estamos para ayudarte.</p>
        <a href="contacto.php" class="btn btn-rosa">Contactanos</a>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
