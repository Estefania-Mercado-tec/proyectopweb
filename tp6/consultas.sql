-- TP6 - Proyecto Mely Nails
-- Carga de datos de prueba

USE mely_nails;

-- 1. Insertar roles
INSERT INTO roles (nombre) VALUES
('Administrador'),
('Cliente');

-- 2. Insertar categorías
INSERT INTO categorias (nombre, descripcion) VALUES
('Manicura', 'Servicios de cuidado y belleza de uñas'),
('Uñas esculpidas', 'Servicios de construcción y diseño de uñas');

-- 3. Insertar estados de turnos
INSERT INTO estados_turno (nombre) VALUES
('Pendiente'),
('Confirmado'),
('Cancelado'),
('Finalizado');
-- 4. Insertar servicios
INSERT INTO servicios (id_categoria, nombre, descripcion, precio) VALUES
(1, 'Manicura tradicional', 'Limado y cuidado de uñas', 8000.00),
(2, 'Esmaltado semipermanente', 'Esmaltado de larga duración', 12000.00);

-- 5. Insertar usuarios
INSERT INTO usuarios (id_rol, nombre, apellido, email, password) VALUES
(1, 'Sonia', 'Mercado', 'admin@melynails.com', 'clave_demo_admin'),
(2, 'Ana', 'Pérez', 'ana@email.com', 'clave_demo_cliente');

-- 6. Insertar turnos
INSERT INTO turnos (id_usuario, id_servicio, id_estado, fecha, hora) VALUES
(2, 1, 1, '2026-12-01', '10:00:00'),
(2, 2, 2, '2026-12-02', '15:30:00');
-- 7. Consultar todos los servicios
SELECT *
FROM servicios;

-- 8. Buscar servicios con precio mayor a 9000
SELECT nombre, precio
FROM servicios
WHERE precio > 9000
ORDER BY precio DESC;

-- 9. Consultar turnos con datos relacionados
SELECT
    turnos.id_turno,
    usuarios.nombre AS cliente,
    servicios.nombre AS servicio,
    estados_turno.nombre AS estado,
    turnos.fecha,
    turnos.hora
FROM turnos
INNER JOIN usuarios
    ON turnos.id_usuario = usuarios.id_usuario
INNER JOIN servicios
    ON turnos.id_servicio = servicios.id_servicio
INNER JOIN estados_turno
    ON turnos.id_estado = estados_turno.id_estado;
    -- 10. Actualizar el estado de un turno
UPDATE turnos
SET id_estado = 2
WHERE id_turno = 1;

-- 11. Eliminar un turno específico
DELETE FROM turnos
WHERE id_turno = 2;
