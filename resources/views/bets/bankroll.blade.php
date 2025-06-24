@extends('app')

@section('titulo')
    BankRoll
@endsection

@section('contenido')

    <div class="min-h-screen max-w-screen-auto p-4 rounded-2xl">
        <div class=" mx-auto space-y-6 text-white">
            <h3 class="text-3xl font-bold pl-3">Bankroll</h3>

            <!-- Configuración -->
            <div class="bg-gray-800 p-4 rounded-lg space-y-4">
                @if (session('success'))
                    <div class="bg-green-600 text-center text-white p-3 rounded mb-4 auto-hide">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-600 text-center text-white p-3 rounded mb-4 auto-hide">
                        {{ session('error') }}
                    </div>
                @endif
                
                <form action="{{route('bankroll')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <div>
                        <label class="block mb-1" for="bank_inicial">Bankroll Inicial (S/)</label>
                        <input type="number" id="bank_inicial" name="bank_inicial" class="w-full rounded p-2 bg-gray-700 border border-gray-600" placeholder="Ej. S/.1000">
                        
                    </div>
                    <div>
                        <label class="block mb-1" for="n_partes">Dividir en partes</label>
                        <input type="number" name="n_partes" id="n_partes" class="w-full rounded p-2 bg-gray-700 border border-gray-600" placeholder="Ej. 10">
                    </div>
                    <input type="submit" class="bg-blue-600 max-w-sm hover:bg-blue-700 rounded px-4 py-2 text-white w-full sm:w-auto" value="Guardar Configuración">
                </form>
            
                <div class="flex flex-wrap gap-2">
                    <button class="bg-yellow-600 hover:bg-yellow-700 rounded px-4 py-2 text-white flex-1 sm:flex-none sm:w-auto">
                        Resetear
                    </button>

                    <button class="bg-green-600 hover:bg-green-700 rounded px-4 py-2 text-white flex-1 sm:flex-none sm:w-auto">
                        Movimiento
                    </button>
                </div>
            </div>
              
            <!-- Movimientos -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <h2 class="text-lg font-semibold mb-2">Movimientos del Bankroll</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                    <thead class="text-gray-400 border-b border-gray-700">
                        <tr>
                        <th class="py-2">Fecha</th>
                        <th class="py-2">Tipo</th>
                        <th class="py-2">Monto</th>
                        <th class="py-2">Descripcion</th>
                        </tr>
                    </thead>
                    
                    <tbody class="divide-y divide-gray-700">
                        @foreach ($movimientos as $movimiento)
                        <tr>
                            <td class="py-2">{{$movimiento->created_at->isoFormat('D MMMM')}}</td>
                            <td class="py-2">{{$movimiento->tipo}}</td>
                            <td class="py-2 text-{{$movimiento->color}}-400">{{$movimiento->cantidad}}</td>
                            <td class="py-2">{{$movimiento->descripcion}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

@endsection