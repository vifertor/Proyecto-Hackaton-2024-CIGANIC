<?php

namespace App\Livewire\Vacunna;

use Livewire\Component;
use App\Models\Vacuna;
use App\Models\vacunas;
use Livewire\Attributes\Title;
class Vervacuna extends Component
{
    public function eliminar($Id_vacuna)
    {
        // Encontrar y eliminar la vacuna
        vacunas::findOrFail($Id_vacuna)->delete();
    }

    public function render()
    {
        return view('livewire.vacunna.vervacuna',['vacunas' => vacunas::all()]);
    }
}
