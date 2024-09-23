<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vacuna;
use App\Models\vacunas;

class VacunaController extends Controller
{
    //

    public function index(){

        $vacunas = vacunas::all();



        return view('vacunas.index', compact('vacunas'));




    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_de_vacuna' => 'required|string|max:255',
            'Descripción' => 'required|string|max:255',
            'Estado' => 'required|in:1,2',
        ]);

        $vacuna = new vacunas();
        $vacuna->nombre_de_vacuna = $request->input('nombre_de_vacuna');
        $vacuna->Descripción = $request->input('Descripción');
        $vacuna->Estado = $request->input('Estado');
        $vacuna->save();

        return response()->json(['success' => true, 'vacuna' => $vacuna]);
    }



}
