<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'fechaactualizacion',
    'sexo', 'fnac','poblacion','provincia','cp',
    'dni','telefono', 'movil','email','preno',
    'aviso'];
}
