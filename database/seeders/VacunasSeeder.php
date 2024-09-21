<?php

namespace Database\Seeders;
use App\Models\vacunas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;
class VacunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacunas=new vacunas(   );
        $vacunas->nombre_de_vacuna='Pfizer-BioNTech';
        $vacunas->Descripción='Vaccine developed by Pfizer and BioNTech, developed to help protect against COVID-19.';
        $vacunas->Estado=true;
        $vacunas->save();

    }
}
