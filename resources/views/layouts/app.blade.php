<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRUD Alumnos</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app" class="background__pattern flex">
        <nav class="bg-indigo-950 shadow-lg w-2/6 xl:w-1/6 h-full">
            <div class="flex justify-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" alt="logo" width="100" height="200">
                </a>
            </div>
            <div>
                @guest
                    <div class="flex flex-col text-center">
                        @if (Route::has('login')) 
                            <a href="{{ route('login') }}" class="text-white text-md mt-2 hover:text-indigo-500 hover:duration-300">
                                {{ __('Iniciar sesión') }}
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white text-md mt-2 hover:text-indigo-500 hover:duration-300">
                                {{ __('Registrarse') }}
                            </a>
                        @endif
                    </div>
                @else
                    <p class="text-white text-xl font-bold text-center mt-2">{{ Auth::user()->name }}</p>
                    <ul class="text-white text-md my-10">
                        <a href="{{route('calificacion.index')}}">
                            <li class="menu__item">Lista de calificaciones</li>
                        </a>
                        <a href="{{route('alumno.index')}}">
                            <li class="menu__item">Lista de alumnos</li>
                        </a>
                        <a href="{{route('profesor.index')}}">
                            <li class="menu__item">Lista de profesores</li>
                        </a>
                        <a href="{{route('alumno.create')}}">
                            <li class="menu__item">Registrar alumno</li>
                        </a>
                        <a href="{{route('calificacion.create')}}">
                            <li class="menu__item">Registrar calificación</li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('logout') }}" class="text-white text-md mt-2 hover:text-indigo-500 hover:duration-300"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="w-full">
            @yield('content')
        </main>
    </div>
</body>
</html>
