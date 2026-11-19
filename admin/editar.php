<?php

$rol_requerido = 'Administrador';

require_once '../includes/auth_guard.php';
require_once '../config/conexion.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    http_response_code(400);
    exit('ID de servicio inválido.');
}

// Buscar el servicio
$sql = "SELECT * FROM servicios WHERE id_servicio = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$servicio = $stmt->fetch();

if (!$servicio) {
    http_response_code(404);
    exit('Servicio no encontrado.');
}

// Obtener categorías
$stmt = $pdo->prepare(
    "SELECT id_categoria, nombre FROM categorias ORDER BY nombre"
);
$stmt->execute();
$categorias = $stmt->fetchAll();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    $precio = $_POST['precio'] ?? '';
    $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);

    if ($nombre === '' || $precio === '' || !$id_categoria) {
        $error = 'Completá todos los campos obligatorios.';
    } elseif (!is_numeric($precio) || $precio < 0) {
        $error = 'Ingresá un precio válido.';
    } else {

        $sql = "UPDATE servicios
                SET id_categoria = :categoria,
                    nombre = :nombre,
                    descripcion = :descripcion,
                    precio = :precio
                WHERE id_servicio = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':categoria' => $id_categoria,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':id' => $id
        ]);

        header('Location: index.php');
        exit;
    }
}

$titulo_pagina = 'Editar servicio';
$descripcion_pagina = 'Editar servicios de Mely Nails';
$pagina_actual = 'admin';

require_once '../includes/header.php';
require_once '../includes/nav.php';

?>

<main class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <h2 class="text-center mb-4">Editar servicio</h2>

            <?php if ($error !== ''): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="editar.php?id=<?= (int)$id ?>">

                <div class="mb-3">
                    <label class="form-label">Nombre del servicio:</label>
                    <input type="text" name="nombre"
                           class="form-control"
                           value="<?= htmlspecialchars($servicio['nombre']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea name="descripcion"
                              class="form-control"><?= htmlspecialchars($servicio['descripcion'] ?? '') ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría:</label>
                    <select name="id_categoria" class="form-select" required>

                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= (int)$categoria['id_categoria'] ?>"
                                <?= ((int)$categoria['id_categoria'] === (int)$servicio['id_categoria']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($categoria['nombre']) ?>
                            </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio:</label>
                    <input type="number" name="precio"
                           class="form-control"
                           min="0" step="0.01"
                           value="<?= htmlspecialchars((string)$servicio['precio']) ?>"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Guardar cambios
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Volver
                </a>

            </form>

        </div>
    </div>

</main>

<?php require_once '../includes/footer.php'; ?>
