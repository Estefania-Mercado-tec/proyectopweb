<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

class ReporteServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::orderBy('nombre')->get();

        return view('reportes.servicios', compact('servicios'));
    }
}
