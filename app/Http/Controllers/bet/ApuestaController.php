<?php

namespace App\Http\Controllers\bet;

use App\Models\bet\Bank;
use App\Models\bet\Apuesta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApuestaController extends Controller
{
    public function index(){
        return view('bets.apuestas');
    }
    
    public function store(Request $request){
        $request->validate([
            'evento'        => 'required',
            'descripcion'   => 'required',
            'tipo_apuesta'  => 'required',
            'monto_apuesta' => 'required',
            'cuota'         => 'required',
            'categoria'     => 'required'
        ]);
        
        $bank = Bank::where('id_user',Auth::id())->first();
        if (!$bank) {
            return redirect()->back()->with('error', 'No tienes un Bankroll activo');
        }
        //Guardamos en la DB
        $apuesta = Apuesta::create([
            'id_bank'       => $bank->id,
            'evento'        => $request->evento,
            'descripcion'   => $request->descripcion,
            'tipo_apuesta'  => $request->tipo_apuesta,
            'monto_apuesta' => $request->monto_apuesta,
            'cuota'         => $request->cuota,
            'categoria'     => $request->categoria,
            'estado'        => 'pendiente'
        ]);

        if ($apuesta) {
            return redirect()->back()->with('success', 'Apuesta colocada Exitosamente');
        } else {
            return redirect()->back()->with('error', 'No se pudo colocar la apuesta. Intenta nuevamente.');
        }    
    }
}
