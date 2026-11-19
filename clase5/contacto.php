<?php
$titulo_pagina = 'Contacto | Mely Nails';
$pagina_actual = 'contacto';
$descripcion_pagina = 'Formulario de contacto de Mely Nails.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main class="container py-5">
    <h2 class="text-center mb-4">Contactanos</h2>

    <p class="text-center">
        Completá el formulario y nos comunicaremos con vos.
    </p>

    <form action="procesar-contacto.php" method="POST">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                id="nombre"
                name="nombre"
                required
            >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
            >
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea
                class="form-control"
                id="mensaje"
                name="mensaje"
                rows="4"
                required
            ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Enviar mensaje
        </button>

    </form>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
