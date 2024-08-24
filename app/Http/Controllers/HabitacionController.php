<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function create()
    {
        return view('habitacion');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero' => 'required|string|max:10|unique:habitaciones,numero',
            'precio' => 'required|numeric|min:0',
            'tipo' => 'required|string|max:50',
        ]);

        Habitacion::create($validated);
        return redirect()->route('habitacion.create')->with('success', 'Habitación guardada exitosamente');
    }
}
