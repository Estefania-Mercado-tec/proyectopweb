<?php
require_once '../config/conexion.php';

$error = '';

$stmt = $pdo->prepare("SELECT id_categoria, nombre FROM categorias ORDER BY nombre");
$stmt->execute();
$categorias = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    $precio = $_POST['precio'] ?? '';
    $id_categoria = $_POST['id_categoria'] ?? '';

    if ($nombre === '' || $precio === '' || $id_categoria === '') {
        $error = 'Completá todos los campos obligatorios.';
    } elseif (!is_numeric($precio) || $precio < 0) {
        $error = 'Ingresá un precio válido.';
    } else {

        $sql = "INSERT INTO servicios
                (id_categoria, nombre, descripcion, precio)
                VALUES (:categoria, :nombre, :descripcion, :precio)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':categoria' => $id_categoria,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio
        ]);

        header('Location: index.php');
        exit;
    }
}

$titulo_pagina = 'Agregar servicio';
$descripcion_pagina = 'Agregar servicios a Mely Nails';
$pagina_actual = 'admin';

require_once '../includes/header.php';
require_once '../includes/nav.php';
?>

<main class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <h2 class="text-center mb-4">Agregar nuevo servicio</h2>

            <?php if ($error !== ''): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="crear.php">

                <div class="mb-3">
                    <label class="form-label">Nombre del servicio:</label>
                    <input type="text" name="nombre"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea name="descripcion"
                              class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría:</label>
                    <select name="id_categoria"
                            class="form-select" required>

                        <option value="">Seleccionar categoría</option>

                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= (int)$categoria['id_categoria'] ?>">
                                <?= htmlspecialchars($categoria['nombre']) ?>
                            </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio:</label>
                    <input type="number" name="precio"
                           class="form-control"
                           min="0" step="0.01" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Guardar servicio
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Volver
                </a>

            </form>

        </div>
    </div>

</main>

<?php require_once '../includes/footer.php'; ?>
