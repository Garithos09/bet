<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\bet\ApuestaController;
use App\Http\Controllers\bet\BankrollController;
use App\Http\Controllers\bet\DashboardController;
use App\Http\Controllers\bet\PerfilController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/',[LoginController::class, 'store']);

Route::get('/home',[DashboardController::class,'index'])->name('dashboard');

Route::get('/bankroll', [BankrollController::class, 'index'])->name('bankroll');
Route::post('/bankroll', [BankrollController::class, 'store']);

Route::get('/apuestas',[ApuestaController::class, 'index'])->name('apuestas');
Route::post('/apuestas', [ApuestaController::class, 'store']);

Route::get('/perfil',[PerfilController::class, 'index'])->name('perfil');

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');
