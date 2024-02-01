@extends('layouts.app')

@section('content')
    <div class="mt-20 flex justify-center">
        <div class="bg-white w-full md:w-2/3 lg:w-1/2 2xl:w-1/3 p-5">
            <div class="text-2xl font-bold mb-5">{{ __('Iniciar sesión') }}</div>
            <form method="POST" action="{{ route('login') }}" class="p-5">
                @csrf
                <div class="flex flex-col mb-5">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="input__auth @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mb-5">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="input__auth @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex flex-col mb-5">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recuerdame') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mb-5">
                    <div class="flex justify-center items-center">
                        <button type="submit" class="btn__login">
                            {{ __('Iniciar sesión') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
