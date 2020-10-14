<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';
    public $timestamps = false;
    protected $primaryKey ='id';

    protected $fillable = [
        'categoria'
    ];
}
