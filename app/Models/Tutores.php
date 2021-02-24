<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_emp',
        'tipo_identidad',
        'nie_emp',
        'nombre_tutor',
        'apellido_tutor',
        'apellido2_tutor',
        'pais_doc_identidad',
        'provincia',
        'municipio',
        'estado_tutor',
        'tlf_tutor',
        'email',
    ];
}
