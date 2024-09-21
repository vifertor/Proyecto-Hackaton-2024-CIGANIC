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
}
