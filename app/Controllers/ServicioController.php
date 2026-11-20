<?php

require_once __DIR__ . '/../Models/Servicio.php';

class ServicioController
{
    private $modelo;

    public function __construct($conexion)
    {
        $this->modelo = new Servicio($conexion);
    }

    public function index()
    {
        $servicios = $this->modelo->obtenerTodos();

        require __DIR__ . '/../Views/servicios.php';
    }
}
