<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    
    protected $table='productos';
    public $timestamps = false;
    protected $primaryKey ='id';

    protected $fillable = [
        'id_categoria',
        'id_marca',
        'id_estado',
        'nombre',
        'descripcion',
        'stock',
        'precio'
    ];

    

    public function Rcategoria()
    {
            return $this->belongsTo('app\Models\Categoria','id_categoria');
    }
    public function Rmarca()
    {
            return $this->belongsTo('app\Models\Marca','id_marca');
    }
    public function Restado()
    {
            return $this->belongsTo('app\Models\Estado','id_estado');
    }

}
