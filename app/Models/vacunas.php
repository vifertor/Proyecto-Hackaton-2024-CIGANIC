<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vacunas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre_de_vacuna' ,
        'descripcion',
        'Estado'
    ];

}
