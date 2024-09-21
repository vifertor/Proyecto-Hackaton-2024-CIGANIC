<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vacunas extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre_de_vacuna' ,
        'descripcion',
        'Estado'
    ];

}
