<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
    <title>@yield('titulo')</title>
    
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
</head>
<body">
    <nav class="fixed top-0 z-50 w-full border-b bg-gray-800 border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-smrounded-lg sm:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="https://flowbite.com" class="flex ms-2 md:me-24">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Flowbite</span>
            </a>
        </div>
    </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:translate-x-0 bg-gray-800 border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('dashboard')}}" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700 group">
                <svg class="w-5 h-5 ransition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('bankroll')}}" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700 group">
                
                <svg class="shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">BankRoll</span>
                </a>
            </li>
            <li>
                <a href="{{route('apuestas')}}" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                <svg class="shrink-0 w-7 h-7 transition duration-75 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Dice" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M255.999,445.614l164.211-94.813h-0.001V161.19l-164.21-94.804L91.79,161.19v189.611L255.999,445.614 M128.877,346.508 c-9.264-3.693-16.789-14.32-16.789-23.745c0.027-9.424,7.525-14.07,16.789-10.405c9.265,3.693,16.79,14.321,16.79,23.773 C145.667,345.527,138.142,350.201,128.877,346.508z M111.642,274.072c0-9.424,7.498-14.07,16.79-10.404 c9.236,3.693,16.762,14.32,16.762,23.744c0,9.432-7.525,14.078-16.79,10.405C119.14,294.124,111.642,283.476,111.642,274.072z M128.877,247.856c-9.264-3.693-16.762-14.314-16.762-23.745c0-9.424,7.498-14.07,16.789-10.377 c9.265,3.672,16.763,14.32,16.763,23.717C145.667,246.91,138.142,251.556,128.877,247.856z M217.438,397.359 c-9.265-3.693-16.79-14.321-16.79-23.746c0.027-9.424,7.525-14.069,16.79-10.404c9.264,3.693,16.789,14.32,16.789,23.773 C234.228,396.378,226.702,401.052,217.438,397.359z M200.203,324.924c0-9.424,7.497-14.07,16.789-10.405 c9.236,3.693,16.762,14.321,16.762,23.745c0,9.432-7.525,14.077-16.789,10.404C207.7,344.975,200.203,334.327,200.203,324.924z M217.438,298.707c-9.265-3.693-16.763-14.314-16.763-23.744c0-9.425,7.498-14.07,16.79-10.378 c9.265,3.673,16.762,14.321,16.762,23.718C234.228,297.762,226.702,302.407,217.438,298.707z M186.718,153.972 c4.331-6.964,18.194-11.841,31.008-10.868c12.778,0.938,19.629,7.376,15.305,14.333c-4.352,6.992-18.215,11.869-31,10.896 C189.217,167.367,182.366,160.929,186.718,153.972z M278.257,160.851c4.323-6.992,18.216-11.841,31.001-10.904 c12.785,0.973,19.663,7.404,15.305,14.368c-4.323,6.985-18.216,11.841-31,10.897C280.756,174.239,273.905,167.808,278.257,160.851z M358.289,313.607c-7.692,9.564-18.612,11.518-24.371,4.424c-5.814-7.115-4.27-20.615,3.423-30.15 c7.685-9.563,18.611-11.525,24.398-4.402C367.525,290.565,365.975,304.072,358.289,313.607z"></path></g></svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Apuestas</span>
                </a>
            </li>
            <li>
                <a href="{{route('perfil')}}" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700 group">
                <svg class="shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Mi Perfil</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                        <button class="flex text-left p-2 rounded-lg text-white hover:bg-gray-700 group w-full">
                            <svg class="shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Salir</span>
                        </button>
                </form>
            </li>
        </ul>
    </div>
    </aside>
    
    <div class="p-3 sm:ml-64 mt-14 bg-slate-600 h-screen">
        @yield('contenido')
    </div>

</body>
</html>
