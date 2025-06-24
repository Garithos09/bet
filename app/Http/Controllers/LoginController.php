<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    
    public function store(Request $request){
        $request->validate([
            'telefono'  => 'required',
            'password'  => 'required'
        ]);
        
        $remember = $request->filled('remember');
        // 🔧 Limpiamos los espacios del teléfono antes de autenticar
        $telefono = str_replace(' ', '', $request->telefono);
        $password = $request->password;
        
        // Autenticacion de telefono y password y se guarda token para inicio de sesion
        if(!auth::attempt(['telefono' =>$telefono, 'password' =>$password], $remember)){
            return back()->with('mensaje', 'credenciales Incorretas');
        }
        
        // redireccionamos segun el roll
        return redirect()->route('dashboard');
    }
}
