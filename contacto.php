<?php
$titulo_pagina = 'Contacto | Mely Nails';
$pagina_actual = 'contacto';
$descripcion_pagina = 'Contactá a Mely Nails para consultar servicios y reservar tu turno.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-4">
        <h2>Contacto y reservas</h2>
        <p>¿Querés realizar una consulta o reservar tu turno? ¡Escribinos!</p>
    </section>

    <section class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form
                action="confirmacion.php"
                method="get"
                class="card p-4 shadow-sm"
            >
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nombre"
                        name="nombre"
                        placeholder="Ingresá tu nombre"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="ejemplo@correo.com"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="servicio" class="form-label">Servicio de interés</label>
                    <select
                        class="form-control"
                        id="servicio"
                        name="servicio"
                        required
                    >
                        <option value="">Seleccioná un servicio</option>
                        <option value="Manicura clásica">Manicura clásica</option>
                        <option value="Esmaltado semipermanente">
                            Esmaltado semipermanente
                        </option>
                        <option value="Uñas esculpidas">Uñas esculpidas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Tu consulta</label>
                    <textarea
                        class="form-control"
                        id="mensaje"
                        name="mensaje"
                        rows="4"
                        placeholder="Escribí tu mensaje..."
                        required
                    ></textarea>
                </div>

                <button type="submit" class="btn btn-rosa w-100">
                    Enviar consulta
                </button>
            </form>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
