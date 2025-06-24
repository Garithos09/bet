<?php

namespace App\Models\bet;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    protected $fillable = [
        'id_bank',
        'evento',
        'descripcion',
        'tipo_apuesta',
        'monto_apuesta',
        'cuota',
        'categoria',
        'estado'
    ];
    public function bank(){
        return $this->belongsTo(Bank::class, 'id_bank');
    }
}
