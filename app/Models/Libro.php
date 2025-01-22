<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'isbn',
        'paginas',
        'anio_publicacion',
        'cantidad',
        'vista_previa'
    ];
}
