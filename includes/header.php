<?php
require_once __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?= htmlspecialchars($descripcion_pagina ?? 'Mely Nails: belleza y cuidado para tus uñas.') ?>">

    <title><?= htmlspecialchars($titulo_pagina ?? APP_NAME) ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>

<header class="encabezado text-center">
    <h1 class="m-0">💅 <?= htmlspecialchars(APP_NAME) ?></h1>

    <p class="m-0">Belleza y cuidado para tus uñas</p>
</header>
