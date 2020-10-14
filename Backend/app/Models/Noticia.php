<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    
    protected $table='noticias';
    public $timestamps = false;
    protected $primaryKey ='id';

    protected $fillable = [
        'titulo',
        'descripcion'
    ];
    
}
