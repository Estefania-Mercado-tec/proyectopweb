<?php
require_once 'config/conexion.php';

$error = '';
$exito = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');
    $apellido = trim($_POST['apellido'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validar campos
    if ($nombre === '' || $apellido === '' || $email === '' || $password === '') {
        $error = 'Completá todos los campos.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Ingresá un correo electrónico válido.';
    } elseif (strlen($password) < 8) {
        $error = 'La contraseña debe tener al menos 8 caracteres.';
    } else {

        // Verificar si el correo ya existe
        $sql = "SELECT id_usuario FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        if ($stmt->fetch()) {
            $error = 'Ese correo electrónico ya está registrado.';
        } else {

            // Obtener el ID del rol Cliente
            $stmt = $pdo->prepare(
                "SELECT id_rol FROM roles WHERE nombre = :rol"
            );
            $stmt->execute([':rol' => 'Cliente']);
            $rol = $stmt->fetch();

            if (!$rol) {
                $error = 'No se encontró el rol Cliente.';
            } else {

                // Crear hash seguro de la contraseña
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                // Insertar nuevo usuario
                $sql = "INSERT INTO usuarios
                        (id_rol, nombre, apellido, email, password)
                        VALUES (:rol, :nombre, :apellido, :email, :password)";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    ':rol' => $rol['id_rol'],
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':email' => $email,
                    ':password' => $password_hash
                ]);

                $exito = '¡Registro exitoso! Ya podés iniciar sesión.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Mely Nails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">Registro de clientes</h2>

                <?php if ($error !== ''): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <?php if ($exito !== ''): ?>
                    <div class="alert alert-success">
                        <?= htmlspecialchars($exito) ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="registro.php">

                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña:</label>
                        <input type="password" name="password" class="form-control" minlength="8" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Registrarme
                    </button>

                </form>

                <p class="text-center mt-3 mb-0">
                    ¿Ya tenés cuenta?
                    <a href="login.php">Iniciar sesión</a>
                </p>

                <p class="text-center mt-2">
                    <a href="index.php">Volver al inicio</a>
                </p>

            </div>
        </div>
    </div>
</div>

</body>
</html>
