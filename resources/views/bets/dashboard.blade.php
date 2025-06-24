@extends('app')

@section('titulo')
    DashBoard
@endsection

@section('contenido')
    
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
        <!-- Ganancias -->
        <div class="bg-green-600 text-white rounded-2xl p-4 shadow-lg">
            <h2 class="text-lg font-semibold">Ganancias</h2>
            <p class="text-2xl font-bold mt-2">S/ 0.00</p>
        </div>

        <!-- Pérdidas -->
        <div class="bg-red-600 text-white rounded-2xl p-4 shadow-lg">
            <h2 class="text-lg font-semibold">Pérdidas</h2>
            <p class="text-2xl font-bold mt-2">S/ 0.00</p>
        </div>

        <!-- Bank Inicial -->
        <div class="bg-blue-600 text-white rounded-2xl p-4 shadow-lg">
            <h2 class="text-lg font-semibold">Bank Inicial</h2>
            <p class="text-2xl font-bold mt-2">S/ 0.00</p>
        </div>

        <!-- Total de Apuestas -->
        <div class="bg-gray-800 text-white rounded-2xl p-4 shadow-lg">
            <h2 class="text-lg font-semibold">Total de Apuestas</h2>
            <p class="text-2xl font-bold mt-2">0</p>
        </div>
    </section>
    
    
@endsection