<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function create()
    {
        return view('reserva');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date|after:fecha_entrada',
            'cliente_id' => 'required|exists:clientes,id',
            'habitacion_id' => 'required|exists:habitaciones,id',
        ]);

        Reserva::create($validated);
        return redirect()->route('reserva.create')->with('success', 'Reserva guardada exitosamente');
    }
}
