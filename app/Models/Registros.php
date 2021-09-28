<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'email',
        'tipo',
        'telefono',
        'oficina',
        'monto',
        'imagen',
        'descripcion',
        'folio_sisec'
    ];
}
