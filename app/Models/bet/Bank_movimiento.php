<?php

namespace App\Models\bet;

use Illuminate\Database\Eloquent\Model;

class Bank_movimiento extends Model
{
    protected $fillable = [
        'bank_id',
        'tipo',
        'descripcion',
        'cantidad',
        'color'
    ];
    public function bank(){
        return $this->belongsTo(Bank::class, 'bank_id');
    }
    
}
