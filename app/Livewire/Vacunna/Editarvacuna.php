<?php

namespace App\Livewire\Vacunna;

use Livewire\Component;
use App\Models\Vacuna;
use App\Models\vacunas;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
class Editarvacuna extends Component
{
    public $Id_vacuna;
    public $nombre_de_vacuna;
    public $Descripción;
    public $Estado;

    // Reglas de validación
    protected $rules = [
        'nombre_de_vacuna' => 'required|min:3',
        'Descripción' => 'nullable|min:5',
        'Estado' => 'boolean',
    ];

    public function mount($Id_vacuna)
    {
        // Encontrar la vacuna y llenar los campos
        $vacuna = vacunas::findOrFail($Id_vacuna);
        $this->Id_vacuna = $vacuna->Id_vacuna;
        $this->nombre_de_vacuna = $vacuna->nombre_de_vacuna;
        $this->Descripción = $vacuna->Descripción;
        $this->Estado = $vacuna->Estado;
    }

    public function actualizar()
    {
        // Validar los campos
        $this->validate();

        // Actualizar la vacuna
        $vacuna = vacunas::findOrFail($this->Id_vacuna);
        $vacuna->update([
            'nombre_de_vacuna' => $this->nombre_de_vacuna,
            'Descripción' => $this->Descripción,
            'Estado' => $this->Estado
        ]);

        // Redirigir a la lista de vacunas
        return redirect()->to('/');
    }


    public function render()
    {
        return view('livewire.vacunna.editarvacuna');
    }
}
