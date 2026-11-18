<?php
$pagina_actual = $pagina_actual ?? '';

function enlaceActivo($pagina, $actual) {
    return $pagina === $actual ? 'active' : '';
}

$seccion_servicios = ['servicios', 'manicura', 'semipermanente', 'unas-esculpidas'];
$servicios_activo = in_array($pagina_actual, $seccion_servicios);
?>

<!-- MENÚ DE NAVEGACIÓN -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">Mely Nails</a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#menu"
      aria-controls="menu"
      aria-expanded="false"
      aria-label="Abrir menú de navegación"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="nav-link <?= enlaceActivo('index', $pagina_actual) ?>"
             href="index.php">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $servicios_activo ? 'active' : '' ?>"
             href="servicios.php"
             role="button"
             data-bs-toggle="dropdown"
             aria-expanded="false">
            Servicios
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="servicios.php">Todos los servicios</a></li>
            <li><a class="dropdown-item" href="manicura.php">Manicura clásica</a></li>
            <li><a class="dropdown-item" href="semipermanente.php">Semipermanente</a></li>
            <li><a class="dropdown-item" href="unas-esculpidas.php">Uñas esculpidas</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link <?= enlaceActivo('galeria', $pagina_actual) ?>" href="galeria.php">Galería</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('precios', $pagina_actual) ?>" href="precios.php">Precios</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('promociones', $pagina_actual) ?>" href="promociones.php">Promociones</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('sobre-nosotros', $pagina_actual) ?>" href="sobre-nosotros.php">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('opiniones', $pagina_actual) ?>" href="opiniones.php">Opiniones</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('preguntas-frecuentes', $pagina_actual) ?>" href="preguntas-frecuentes.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link <?= enlaceActivo('contacto', $pagina_actual) ?>" href="contacto.php">Contacto</a></li>

      </ul>
    </div>
  </div>
</nav>
