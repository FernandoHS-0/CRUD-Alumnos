<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body>
        <div class="background__pattern">
            <div class="flex justify-center">
                <div class="bg-white py-36 px-20 mt-10 shadow-lg">
                    @if (Route::has('login'))
                        <div class="flex justify-center">
                            <img src="{{ asset('img/logo.png') }}" alt="school-logo" width="300px" height="600px">
                        </div>
                            @auth
                            <div class="flex justify-center">
                                <a href="{{ url('/home') }}" class="btn__login">Inicio</a>
                            </div>
                            @else
                            <div class="flex flex-col md:flex-row">
                                <a href="{{ route('login') }}" class="btn__login">Iniciar sesión</a>
                                <a href="{{ route('register') }}" class="btn__login">Registrarse</a>
                            </div>
                            @endauth
                    @endif
                </div>
            </div>
        </div>
        
    </body>
</html>
