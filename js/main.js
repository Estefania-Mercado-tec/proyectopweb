
document.addEventListener('DOMContentLoaded', () => {

    const inputBusqueda = document.getElementById('inputBusqueda');
    const contenedorResultados = document.getElementById('resultados');

    // Verificar que los elementos existan en la página
    if (!inputBusqueda || !contenedorResultados) {
        return;
    }

    // Escuchar lo que escribe el usuario
    inputBusqueda.addEventListener('input', async (e) => {

        const query = e.target.value.trim();

        try {

            // Consultar el endpoint PHP mediante Fetch API
            const response = await fetch(
                `api/buscar_servicios.php?q=${encodeURIComponent(query)}`
            );

            if (!response.ok) {
                throw new Error(`Error HTTP: ${response.status}`);
            }

            // Convertir la respuesta a JSON
            const respuesta = await response.json();

            if (respuesta.status === 'success') {
                renderizarServicios(respuesta.data);
            } else {
                throw new Error('No se pudieron obtener los servicios.');
            }

        } catch (error) {

            console.error('Error al buscar servicios:', error);

            contenedorResultados.textContent =
                'Ocurrió un error al cargar los servicios.';

        }

    });

    // Mostrar los servicios en la página
    function renderizarServicios(servicios) {

        contenedorResultados.innerHTML = '';

        if (servicios.length === 0) {

            contenedorResultados.textContent =
                'No se encontraron servicios.';

            return;
        }

        servicios.forEach(servicio => {

            const tarjeta = document.createElement('div');
            tarjeta.className = 'card mb-3 p-3';

            const nombre = document.createElement('h5');
            nombre.textContent = servicio.nombre;

            const descripcion = document.createElement('p');
            descripcion.textContent = servicio.descripcion || '';

            const precio = document.createElement('p');
            precio.textContent = `Precio: $${servicio.precio}`;

            tarjeta.appendChild(nombre);
            tarjeta.appendChild(descripcion);
            tarjeta.appendChild(precio);

            contenedorResultados.appendChild(tarjeta);

        });

    }

});

