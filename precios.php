<?php
$titulo_pagina = 'Precios | Mely Nails';
$pagina_actual = 'precios';
$descripcion_pagina = 'Consultá los precios de los servicios de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h2>Nuestros precios</h2>
        <p>Conocé nuestros servicios y consultá sus valores.</p>
    </section>

    <section class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Manicura clásica</td>
                            <td>Consultar</td>
                        </tr>
                        <tr>
                            <td>Esmaltado semipermanente</td>
                            <td>Consultar</td>
                        </tr>
                        <tr>
                            <td>Uñas esculpidas</td>
                            <td>Consultar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="text-center mt-5">
        <p>Para conocer los valores actualizados, comunicate con nosotros.</p>
        <a href="contacto.php" class="btn btn-rosa">Consultar precios</a>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
