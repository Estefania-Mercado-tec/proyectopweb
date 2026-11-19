<?php
$titulo_pagina = 'Resultado del contacto | Mely Nails';
$pagina_actual = 'contacto';
$descripcion_pagina = 'Resultado del envío del formulario de contacto.';

$errores = [];
$nombre = '';
$email = '';
$mensaje = '';
$enviado = false;

// Verificamos que el formulario se haya enviado por POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recibimos y limpiamos los datos.
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    // Validamos los campos obligatorios.
    if ($nombre === '') {
        $errores[] = 'El nombre es obligatorio.';
    }

    if ($email === '') {
        $errores[] = 'El correo electrónico es obligatorio.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Ingresá un correo electrónico válido.';
    }

    if ($mensaje === '') {
        $errores[] = 'El mensaje es obligatorio.';
    }

    // Si no hay errores, el envío fue procesado.
    if (empty($errores)) {
        $enviado = true;
    }

} else {
    $errores[] = 'El formulario debe enviarse mediante POST.';
}

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main class="container py-5">

    <h2 class="text-center mb-4">Resultado del contacto</h2>

    <?php if ($enviado): ?>

        <div class="alert alert-success">
            ¡Gracias, <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>!
            Tu mensaje fue procesado correctamente.
        </div>

        <p><strong>Correo:</strong>
            <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p><strong>Mensaje:</strong>
            <?= nl2br(htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8')) ?>
        </p>

    <?php else: ?>

        <div class="alert alert-danger">
            <strong>No se pudo procesar el formulario:</strong>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <p>Revisá los datos y volvé a intentarlo.</p>

        <form action="procesar-contacto.php" method="POST">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    value="<?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>"
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
                    value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"
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
                ><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Volver a enviar
            </button>

        </form>

    <?php endif; ?>

    <a href="contacto.php" class="btn btn-secondary mt-3">
        Volver al contacto
    </a>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
