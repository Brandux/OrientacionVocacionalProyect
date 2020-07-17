<?php

namespace App\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    // use Filterable;
    protected $table = 'TipoDocumento';
    protected $primaryKey = 'idTipoDocumento';
    protected $fillable = [
        'nombre',
        'codigo',
        'estado',
    ];

    const CREATED_AT = null;
    const UPDATED_AT = null;
}