<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonaController extends Controller
{
    //
    public function index()
    {
        $data['personas'] = Persona::orderBy('id', 'desc')->paginate(8);

        return view('personas.personas', $data);
    }

    public function store(Request $request)
    {
        $personaID = $request->persona_id;
        $persona   =   Persona::updateOrCreate(
            ['id' => $personaID],
            ['nombres' => $request->ins_nombres, 'body' => $request->ins_apellidos]
        );

        return response()->json([
            'persona' => $persona
        ]);
    }
}
