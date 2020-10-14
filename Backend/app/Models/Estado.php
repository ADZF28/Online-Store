<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estados';
    public $timestamps = false;
    protected $primaryKey ='id';

    protected $fillable = [
        'estado'
    ];
}
