<?php

namespace App\Livewire\Vacunna;

use Livewire\Component;
use App\Models\Vacuna;
use App\Models\vacunas;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
class Crearvacuna extends Component
{
        // Atributos
        public $nombre_de_vacuna;
    public $Descripción;
    public $Estado = true;

    protected $rules = [
        'nombre_de_vacuna' => 'required|string|max:255',
        'Descripción' => 'nullable|string|max:255',
        'Estado' => 'boolean',
    ];



    public function guardar()
    {
        dd('Guardando'); // Para verificar que se llame
        $this->validate();

        Vacunas::create([
            'nombre_de_vacuna' => $this->nombre_de_vacuna,
            'Descripción' => $this->Descripción,
            'Estado' => $this->Estado,
        ]);

        $this->reset();
        session()->flash('message', 'Vacuna creada exitosamente.');
    }
    public function render()
    {
        return view('livewire.vacunna.crearvacuna');
    }


}
