TP6 – Diseño y Normalización de la Base de Datos

Proyecto Integrador: Mely Nails

Carrera: Tecnicatura Superior en Análisis de Sistemas y Desarrollo de Software
Unidad Curricular: Programación Web
Docente: Lic. Gabriel Artaza
Institución: IES N.º 6001 "Gral. Manuel Belgrano"

1. Descripción del sistema

Mely Nails es un sitio web destinado a ofrecer información sobre servicios de manicura y permitir que los clientes puedan registrarse y solicitar turnos.

El sistema contará con dos tipos de usuarios: clientes y administradores.

Los clientes podrán consultar los servicios disponibles, sus descripciones y precios, y realizar solicitudes de turnos. El administrador podrá gestionar los servicios, las categorías, los usuarios y las reservas.

2. Entidad principal sin normalizar

Inicialmente, se plantea una tabla hipotética denominada "reservas_sin_normalizar", que contiene información de clientes, servicios y turnos en una misma estructura.

ID reserva| Cliente| Correo| Servicios solicitados| Fecha| Estado
1| Ana Pérez| ana@email.com| Manicura, Esmaltado| 20/11/2026| Pendiente
2| Laura Gómez| laura@email.com| Uñas esculpidas| 21/11/2026| Confirmado

Esta estructura presenta problemas porque almacena varios servicios en un mismo campo y repite información de los clientes.

3. Proceso de normalización

Primera Forma Normal (1FN)

Se establece que cada campo debe contener un único valor y no debe almacenar listas de datos.

Por ejemplo, los servicios solicitados ya no se guardan juntos en una columna. Cada reserva se relacionará con un único servicio por registro de turno.

Segunda Forma Normal (2FN)

Se busca que todos los atributos que no forman parte de una clave dependan completamente de la clave primaria.

Para evitar dependencias parciales y repetición de información, se separan los datos de los clientes, los servicios y las reservas en tablas diferentes.

Tercera Forma Normal (3FN)

Se eliminan las dependencias transitivas, separando la información que pertenece a otras entidades.

Por ejemplo:

- Los nombres de los roles se almacenan en la tabla "roles".
- Las categorías de los servicios se almacenan en "categorias".
- Los estados de las reservas se almacenan en "estados_turno".

De esta manera, se evita repetir información y se mejora la organización de la base de datos.

4. Tablas resultantes del modelo relacional

Tabla: roles

- "id_rol" (PK)
- "nombre"

Almacena los tipos de usuarios del sistema, como administrador y cliente.

Tabla: usuarios

- "id_usuario" (PK)
- "id_rol" (FK)
- "nombre"
- "apellido"
- "email"
- "password"
- "created_at"
- "updated_at"

Almacena los datos personales y de acceso de los usuarios.

Tabla: categorias

- "id_categoria" (PK)
- "nombre"
- "descripcion"

Permite clasificar los servicios ofrecidos por Mely Nails.

Tabla: servicios

- "id_servicio" (PK)
- "id_categoria" (FK)
- "nombre"
- "descripcion"
- "precio"
- "created_at"
- "updated_at"

Almacena los servicios disponibles y sus precios.

Tabla: estados_turno

- "id_estado" (PK)
- "nombre"

Almacena los posibles estados de una reserva: pendiente, confirmado, cancelado y finalizado.

Tabla: turnos

- "id_turno" (PK)
- "id_usuario" (FK)
- "id_servicio" (FK)
- "id_estado" (FK)
- "fecha"
- "hora"
- "created_at"
- "updated_at"

Registra las reservas realizadas por los clientes.

5. Relaciones entre las tablas

- Un rol puede estar asociado a muchos usuarios.
- Una categoría puede contener muchos servicios.
- Un usuario puede solicitar muchos turnos.
- Un servicio puede estar asociado a muchos turnos.
- Un estado puede corresponder a muchos turnos.

6. Conclusión

La normalización permite organizar la información de Mely Nails de manera eficiente, evitando la duplicación de datos y facilitando su mantenimiento.

El modelo relacional resultante proporciona una estructura adecuada para implementar la conexión PHP-MySQL y desarrollar las operaciones CRUD mediante PDO en el siguiente trabajo práctico.
