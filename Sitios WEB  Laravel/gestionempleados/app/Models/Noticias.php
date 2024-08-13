<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = [
      
        'id',
        'titulo',
        'encabezado',
        'lugar',
        'contenido',
       

    ];

    public $timestamps = false;
}
