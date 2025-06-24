@extends('app')

@section('titulo')
    Mis Apuestas
@endsection

@section('contenido')
    <h3 class="text-3xl font-bold text-white text-center">Mis Apuestas</h3>
    <div class="flex justify-between items-center flex-wrap gap-2 pt-3 sm:pl-4 sm:pr-4 pl-3 pr-3">
        
        <form class="flex items-center max-w-sm">
            <label for="simple-search" class="sr-only">Buscar</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar Apuesta" required />
            </div>
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Buscar</span>
            </button>
        </form>
        <!-- BOTON DEL MODAL -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" type="button">
        Nuevo
        </button>

        <!-- CUERPO DEL MODAL -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Product
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{route('apuestas')}}" method="POST" class="p-4 md:p-5">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="evento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Evento</label>
                                <input type="text" name="evento" id="evento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escriba el Evento" required>
                                @error('evento')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                                <textarea id="descripcion" name="descripcion" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Detalles de la apuesta"></textarea>   
                                @error('descripcion')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror                 
                            </div>
                            <div class="col-span-1">
                                <label for="tipo_apuesta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Apuesta</label>
                                <select id="tipo_apuesta" name="tipo_apuesta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Fija">Fija</option>
                                    <option value="Normal" selected>Normal</option>
                                    <option value="Riesgosa">Riesgosa</option>
                                </select>
                                @error('tipo_apuesta')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="monto_apuesta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Monto de apuesta</label>
                                <input type="number" name="monto_apuesta" id="monto_apuesta" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Monto sugerido" required>
                                @error('monto_apuesta')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="cuota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cuota</label>
                                <input type="number" name="cuota" id="cuota" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="x1.5" required>
                                @error('cuota')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                                <select id="categoria" name="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Deportes" selected>Deportes</option>
                                    <option value="Esports">Esports</option>
                                </select>
                                @error('categoria')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <input type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Crear Apuesta">
                        </input>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
    <section class="overflow-x-auto grid gap-4 p-4">
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
                
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3">
                        N°
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Evento
                    </th>
                    <th scope="col" class="px-6 py-3 hidden md:table-cell">
                        Apuesta
                    </th>
                    <th scope="col" class="px-6 py-3 hidden md:table-cell">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3 hidden md:table-cell">
                        Tipo
                    </th>
                    <th scope="col" class="px-2 sm:px-6 sm:py-3">
                        Monto
                    </th>
                    <th scope="col" class="px-2 sm:px-6 sm:py-3">
                        Cuota
                    </th>
                    <th scope="col" class="px-2 sm:px-6 sm:py-3">
                        Ganancia
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-1 sm:px-6 sm:py-4 text-center sm:text-leftl">
                        1
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Tundra vs liquid
                    </th>
                    <td class="px-6 py-4 hidden md:table-cell">
                        Tundra Gana mapa 1
                    </td>
                    <td class="px-6 py-4 hidden md:table-cell">
                        Esport
                    </td>
                    <td class="px-6 py-4 hidden md:table-cell">
                        Fija
                    </td>
                    <td class="px-1 sm:px-6 sm:py-4 text-center sm:text-left">
                        S/ 15
                    </td>
                    <td class="px-1 sm:px-6 sm:py-4 text-center sm:text-left">
                        x 1.8
                    </td>
                    <td class="px-2 sm:px-6 sm:py-4 text-center sm:text-left">
                        S/ 27
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection