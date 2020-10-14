<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table='imagens';
    public $timestamps = false;

    protected $fillable = [
        'ruta',
        'tabla',
        'id_tabla'
    ];
}
