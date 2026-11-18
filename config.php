<?php

$ruta_env = __DIR__ . '/.env';

if (file_exists($ruta_env)) {
    $lineas = file($ruta_env, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        $linea = trim($linea);

        if ($linea === '' || str_starts_with($linea, '#')) {
            continue;
        }

        if (!str_contains($linea, '=')) {
            continue;
        }

        [$clave, $valor] = explode('=', $linea, 2);

        $clave = trim($clave);
        $valor = trim($valor);
        $valor = trim($valor, "\"'");

        if ($clave !== '') {
            putenv("$clave=$valor");
        }
    }
}

define('APP_NAME', getenv('APP_NAME') ?: 'Mely Nails');
define('SUPPORT_EMAIL', getenv('SUPPORT_EMAIL') ?: '');
define('APP_ENV', getenv('APP_ENV') ?: 'local');
