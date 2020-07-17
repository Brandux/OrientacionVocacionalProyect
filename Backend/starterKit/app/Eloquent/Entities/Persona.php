<?php

namespace App\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Entities\TipoDocumento;

class Persona extends Model
{
    // use Filterable;
    protected $table = 'PERSONA';
    protected $primaryKey = 'idpersona';
    protected $fillable = [
        'idusuario',
        'idTipoDocumento',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'direccion',
        'email',
        'foto',
        'fecha_nacimiento',
        'num_documento',
        'sexo',
        'n_celular',
        'estado',
        'user_reg',
    ];
    const CREATED_AT = 'fecha_reg';
    const UPDATED_AT = 'fecha_upd';

    protected $hidden = [
        'fecha_reg',
        'fecha_upd',
        'estado',
        'user_reg'
    ];

    public function idTipoDocumento(){
        return $this->belongsTo(TipoDocumento::class, 'idTipoDocumento');
    }
}