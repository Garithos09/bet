<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('img/fondos/espacio.webp') }}')">
        
    
        <div class="w-full max-w-sm p-4 border rounded-2xl shadow-sm sm:p-6 md:p-8 backdrop-blur-md border-white">
            <form class="space-y-6" action="{{route('login')}}" method="POST">
                @csrf
                    @if(session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{session('mensaje')}}
                        </p>
                    @endif
                    
                <div>
                    <h5 class="text-2xl font-bold text-white text-center">INICIAR SESION</h5>
                    <img src="{{asset('img/identidad/logoname.png')}}" class="m-0 p-0 w-1xs items-center">
                </div>
                
                <div>
                    <label for="telefono" class="block mb-2 text-sm font-medium  text-white">Tu telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="952-999-555" required />
                    @error('whatsapp')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Tu Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" name="remember"  type="checkbox"class="w-4 h-4 border border-gray-300 rounded-sm focus:ring-3 focus:ring-blue-300 bg-gray-700 border-gray-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800"/>
                        </div>
                        <label for="remember" id="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mantener mi sesion abierta</label>
                    </div>
                </div>
                <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-400 hover:text-black focus:ring-blue-800">Iniciar sesion</button>    
            </form>
        </div>
    </div >
</body>
</html>