<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{

    public function index()
    {
        $cit = Cita::all();
        return view('citas.index', compact('cit'));
    }


    public function create()
    {
        return view('citas.create');
    }


    public function store(Request $request)
    {
        $cit = new Cita();
        $cit->nombre= $request->input("nombre");
        $cit->email = $request->input("email");
        $cit->telefono = $request->input("telefono");
        $cit->nombre_mascota = $request->input("nombre_mascota");
        $cit->raza = $request->input("raza");
        $cit->clase_mascota = $request->input("clase_mascota");
        $cit->fecha_cita = $request->input("fecha_cita");
        $cit->hora_cita = $request->input("hora_cita");

        $cit->save();
        return 'se guardo exitosamente';
    }


    public function show(string $id)
    {
        $cit = Cita::find($id);
        return view("citas.show", compact("cit"));
    }


    public function edit(string $id)
    {
         $cit = Cita::find($id);
        return view("citas.edit", compact("cit"));
    }


    public function update(Request $request, string $id)
    { $cit = Cita::find($id);
        $cit->nombre = $request->input("nombre");
        $cit->email = $request->input("email");
        $cit->telefono = $request->input("telefono");
        $cit->nombre_mascota = $request->input("nombre_mascota");
        $cit->raza = $request->input("raza");
        $cit->clase_mascota = $request->input("clase_mascota");
        $cit->fecha_cita = $request->input("fecha_cita");
        $cit->hora_cita = $request->input("hora_cita");

        $cit->save();
        return redirect()->route('citas.index')->with('success', 'Se actualizó exitosamente');
    }


    public function destroy(string $id)
    {
         $cita = Cita::find($id);
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita borrada exitosamente');
    }
}
