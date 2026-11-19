<?php

// Configuración de cookies de sesión seguras
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    session_start();
}

require_once 'config/conexion.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $error = 'Completá tu correo y contraseña.';
    } else {

        // Buscar usuario y su rol
        $sql = "SELECT usuarios.id_usuario,
                       usuarios.nombre,
                       usuarios.apellido,
                       usuarios.email,
                       usuarios.password,
                       roles.nombre AS rol
                FROM usuarios
                INNER JOIN roles
                ON usuarios.id_rol = roles.id_rol
                WHERE usuarios.email = :email";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        $usuario = $stmt->fetch();

        // Verificar credenciales
        if ($usuario && password_verify($password, $usuario['password'])) {

            // Regenerar ID de sesión
            session_regenerate_id(true);

            // Guardar datos en la sesión
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_apellido'] = $usuario['apellido'];
            $_SESSION['rol'] = $usuario['rol'];

            // Redirigir al panel
            header('Location: dashboard.php');
            exit;

        } else {
            $error = 'Correo o contraseña incorrectos.';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión - Mely Nails</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">Iniciar sesión</h2>

                <?php if (isset($_GET['error']) && $_GET['error'] === 'acceso_denegado'): ?>
                    <div class="alert alert-warning">
                        Necesitás iniciar sesión para acceder.
                    </div>
                <?php endif; ?>

                <?php if ($error !== ''): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="login.php">

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico:</label>
                        <input type="email" name="email"
                               class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña:</label>
                        <input type="password" name="password"
                               class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Ingresar
                    </button>

                </form>

                <p class="text-center mt-3">
                    ¿No tenés cuenta?
                    <a href="registro.php">Registrate</a>
                </p>

                <p class="text-center">
                    <a href="index.php">Volver al inicio</a>
                </p>

            </div>
        </div>
    </div>
</div>

</body>
</html>
