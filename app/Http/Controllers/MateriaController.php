<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMateriaRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Materia;

class MateriaController extends Controller
{
    /* Lista todos */
    public function index(Request $request)
    {
        $query = Materia::query();

        // Filtro por nombre
        if ($name = $request->query('filter_name'))
            $query->where('nombre', 'like', "%{$name}%");

        $materias = $query->get();

        return view('materias.index', compact('materias'));
    }

    /* Formulario para crear nuevas Materias */
    public function create()
    {
        return view('materias.create');
    }

    /*Guarda una nueva Materia en la base de datos. Para ello se valida con 'StoreMateriaRequest'.*/
    public function store(StoreMateriaRequest $request)
    {
        // Guardar la imagen en storage/app/public/logos
        $path = $request->file('logo')->store('logos', 'public');

        // Crear la materia usando los datos validados y el path de la imagen
        Materia::create([
            'numero' => $request->numero,
            'nombre' => $request->nombre,
            'logo' => $path,        // guardamos el path en la DB
            'anio' => $request->anio,
            'division' => $request->division,
        ]);

        return redirect()->route('materias.index');
    }




    /*Formulario para editar una Materia existente.*/
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /* Guarda una Materia existente.*/
    public function update(StoreMateriaRequest $request, Materia $materia)
    {
        $data = $request->validated();

        if ($request->hasFile('logo'))
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        else
            $data['logo'] = $materia->logo; // mantener el logo existente


        $materia->update($data);

        return redirect()->route('materias.index');
    }


    /* Elimina una Materia.*/
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
