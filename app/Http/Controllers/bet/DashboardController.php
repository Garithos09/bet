<?php

namespace App\Http\Controllers\bet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('bets.dashboard');
    }
}
