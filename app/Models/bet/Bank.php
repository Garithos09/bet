<?php

namespace App\Models\bet;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'bank_inicial',
        'bank_actual',
        'n_partes',
        'id_user'
    ];
    
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function bank_movimiento(){
        return $this->hasMany(Bank::class, 'id');
    }
}
