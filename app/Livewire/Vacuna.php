<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\vacunas;

class Vacuna extends Component
{

    public $vacunas=[];
    public $nombre_de_vacuna;
    public $Descripción;
    public $Estado;
    public $modal=false;




    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function mount()
    {
        // Obtén todas las vacunas al inicializar el componente
        $this->vacunas = vacunas::all();
    }
    public function render()
    {
        return view('livewire.vacuna');
    }

    private function clearfields(){
        $this->nombre_de_vacuna='';
        $this->Descripción='';


    }

    public function crearvacunaa(){

        $this->clearfields();
        $this->modal=true;
    }

    public function crearvacuna(){
        dd($this->nombre_de_vacuna,$this->Descripción,$this->Estado);

    }
}
