<?php

require_once 'includes/auth_guard.php';

$titulo_pagina = 'Panel de usuario';
$descripcion_pagina = 'Panel de usuario de Mely Nails';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titulo_pagina) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card shadow p-4">

        <h1 class="text-center mb-4">Bienvenida a Mely Nails</h1>

        <h4>
            Hola,
            <?= htmlspecialchars($_SESSION['usuario_nombre']) ?>
        </h4>

        <p>
            Apellido:
            <?= htmlspecialchars($_SESSION['usuario_apellido'] ?? '') ?>
        </p>

        <p>
            Rol:
            <?= htmlspecialchars($_SESSION['rol']) ?>
        </p>

        <p class="text-success">
            ¡Iniciaste sesión correctamente!
        </p>

        <?php if ($_SESSION['rol'] === 'Administrador'): ?>

            <a href="admin_panel.php" class="btn btn-primary mb-3">
                Panel de administración
            </a>

        <?php endif; ?>

        <a href="index.php" class="btn btn-secondary mb-3">
            Volver al inicio
        </a>

        <form action="logout.php" method="POST">
            <button type="submit" class="btn btn-danger w-100">
                Cerrar sesión
            </button>
        </form>

    </div>

</div>

</body>
</html>
