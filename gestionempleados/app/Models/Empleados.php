<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = [
      
        'id',
        'nombre',
        'telefono',
        'correo',

    ];

    public $timestamps = false;
}
