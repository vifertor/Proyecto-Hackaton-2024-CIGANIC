<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vacunas extends Model
{
    use HasFactory;


    protected $table = 'vacunas'; // Especificar la tabla si no sigue la convención

    protected $fillable = [
        'nombre_de_vacuna',
        'Descripción',
        'Estado',
    ]; // Campos que se pueden llenar en la base de datos con create() o fill()
}
