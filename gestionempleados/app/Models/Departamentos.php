<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{



    protected $fillable = [
      
        'id',
        'nombre',
          
    ];

    public $timestamps = false;
}
