<?php
$titulo_pagina = 'Buscar servicios | Mely Nails';
$pagina_actual = 'servicios';
$descripcion_pagina = 'Buscá servicios de Mely Nails.';

// Recibimos y sanitizamos el dato enviado por GET.
$busqueda = trim($_GET['q'] ?? '');

// Lista de servicios disponibles.
$servicios = [
    'Manicura',
    'Esmaltado semipermanente',
    'Uñas esculpidas',
    'Decoración de uñas',
    'Retiro de esmalte'
];

// Filtramos los servicios.
$resultados = [];

if ($busqueda !== '') {
    foreach ($servicios as $servicio) {
        if (stripos($servicio, $busqueda) !== false) {
            $resultados[] = $servicio;
        }
    }
}

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main class="container py-5">

    <h2 class="text-center mb-4">Buscá nuestros servicios</h2>

    <p class="text-center">
        Escribí el nombre de un servicio para encontrarlo.
    </p>

    <form action="busqueda.php" method="GET" class="mb-4">

        <div class="mb-3">
            <label for="q" class="form-label">Servicio a buscar</label>

            <input
                type="search"
                class="form-control"
                id="q"
                name="q"
                placeholder="Ejemplo: manicura"
                value="<?= htmlspecialchars($busqueda, ENT_QUOTES, 'UTF-8') ?>"
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Buscar
        </button>

    </form>

    <?php if ($busqueda !== ''): ?>

        <h3>Resultados de búsqueda</h3>

        <?php if (!empty($resultados)): ?>

            <div class="alert alert-success">
                Se encontraron <?= count($resultados) ?> resultado(s).
            </div>

            <ul class="list-group">
                <?php foreach ($resultados as $servicio): ?>
                    <li class="list-group-item">
                        <?= htmlspecialchars($servicio, ENT_QUOTES, 'UTF-8') ?>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php else: ?>

            <div class="alert alert-warning">
                No encontramos servicios que coincidan con tu búsqueda.
            </div>

        <?php endif; ?>

    <?php endif; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
