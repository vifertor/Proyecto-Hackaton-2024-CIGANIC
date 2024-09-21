<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\vacunas;

class Vacuna extends Component
{

    public $vacunas;

    public function mount()
    {
        // Obtén todas las vacunas al inicializar el componente
        $this->vacunas = vacunas::all();
    }
    public function render()
    {
        return view('livewire.vacuna');
    }
}
