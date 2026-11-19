<?php

$rol_requerido = 'Administrador';

require_once '../includes/auth_guard.php';
require_once '../config/conexion.php';

$sql = "SELECT servicios.id_servicio,
               servicios.nombre,
               servicios.descripcion,
               servicios.precio,
               categorias.nombre AS categoria
        FROM servicios
        INNER JOIN categorias
        ON servicios.id_categoria = categorias.id_categoria
        ORDER BY servicios.id_servicio DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$servicios = $stmt->fetchAll();

$titulo_pagina = 'Administrar servicios';
$descripcion_pagina = 'Administración de servicios de Mely Nails';
$pagina_actual = 'admin';

require_once '../includes/header.php';
require_once '../includes/nav.php';

?>

<main class="container py-5">

    <h2 class="text-center mb-4">Administración de servicios</h2>

    <div class="mb-4 text-end">
        <a href="crear.php" class="btn btn-primary">
            Agregar nuevo servicio
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($servicios as $servicio): ?>

                    <tr>

                        <td>
                            <?= htmlspecialchars((string)$servicio['id_servicio']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($servicio['nombre']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($servicio['descripcion'] ?? '') ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($servicio['categoria']) ?>
                        </td>

                        <td>
                            $<?= htmlspecialchars((string)$servicio['precio']) ?>
                        </td>

                        <td>

                            <a href="editar.php?id=<?= (int)$servicio['id_servicio'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="eliminar.php"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('¿Estás segura de eliminar este servicio?');">

                                <input type="hidden"
                                       name="id"
                                       value="<?= (int)$servicio['id_servicio'] ?>">

                                <button type="submit"
                                        class="btn btn-danger btn-sm">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>
    </div>

</main>

<?php require_once '../includes/footer.php'; ?>
