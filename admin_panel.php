No
<?php

$rol_requerido = 'Administrador';

require_once 'includes/auth_guard.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de administración - Mely Nails</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card shadow p-4">

        <h1 class="text-center mb-4">Panel de administración</h1>

        <div class="alert alert-success">
            Acceso autorizado: solamente administradores pueden ingresar.
        </div>

        <p>
            Bienvenida,
            <?= htmlspecialchars($_SESSION['usuario_nombre']) ?>.
        </p>

        <p>
            Tu rol es:
            <strong><?= htmlspecialchars($_SESSION['rol']) ?></strong>
        </p>

        <a href="admin/index.php" class="btn btn-primary mb-3">
            Administrar servicios
        </a>

        <a href="dashboard.php" class="btn btn-secondary mb-3">
            Volver al panel
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
