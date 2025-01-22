<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Libro;

class Prestamo extends Model
{
    protected $fillable = [
        'usuario_id',
        'libro_id',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}
