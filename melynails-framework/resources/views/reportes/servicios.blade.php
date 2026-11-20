
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de servicios - Mely Nails</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff5f8;
            margin: 0;
            padding: 30px;
        }

        h1 {
            color: #a64d79;
            text-align: center;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ead5df;
            text-align: left;
        }

        th {
            background: #a64d79;
            color: white;
        }

        .vacio {
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Reporte de servicios - Mely Nails</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>${{ number_format($servicio->precio, 2, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="vacio">
                        No hay servicios registrados.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>


