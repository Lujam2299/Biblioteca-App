<?php

namespace App\Models;
use App\Models\User;
use App\Models\Libro;
use App\Models\Prestamo;

use Illuminate\Database\Eloquent\Model;

class Adeudo extends Model
{
    protected $fillable = [
        'user_id',
        'libro_id',
        'prestamo_id',
        'fecha_inicio_adeudo',
        'fecha_fin_adeudo',
        'monto',
        'pagado'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class, 'prestamo_id');
    }

}
