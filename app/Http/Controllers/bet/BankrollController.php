<?php

namespace App\Http\Controllers\bet;

use Carbon\Carbon;
use App\Models\bet\Bank;
use Illuminate\Http\Request;
use App\Models\bet\Bank_movimiento;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class BankrollController extends Controller
{
    public function index(){
        Carbon::setLocale('es');
        $movimientos = Bank_movimiento::all();
        
        return view('bets.bankroll',[
            'movimientos'   => $movimientos
        ]);
    }
    
    public function store(Request $request){
        $request->validate([
            'bank_inicial'  => 'required',
            'n_partes'      => 'required'
        ]);
        
        $user = Auth::user();
        $bank = Bank::create([
            'bank_inicial'  => $request->bank_inicial,
            'bank_actual'   => $request->bank_inicial,
            'n_partes'      => $request->n_partes,
            'id_user'       => $user->id
        ]);
        
        Bank_movimiento::create([
            'bank_id'       => $bank->id,
            'tipo'          => 'Deposito',
            'cantidad'      => $request->bank_inicial,
            'descripcion'   => 'Deposito Inicial',
            'color'         => 'green'
        ]);
        
        return redirect()->back()->with('success', 'BankRoll Actualizado');

    }
}
