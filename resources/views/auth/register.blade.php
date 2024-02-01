@extends('layouts.app')

@section('content')
    <div class="mt-20 flex justify-center">
        <div class="bg-white w-full md:w-2/3 lg:w-1/2 2xl:w-1/3 p-5">
            <div class="text-2xl font-bold mb-5">{{ __('Registrate') }}</div>
            <form method="POST" action="{{ route('register') }}" class="p-5">
                @csrf
                <div class="flex flex-col mb-5">
                    <label for="name" class="mb-2">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="input__auth @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-2">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="input__auth @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mb-5">
                    <label for="password" class="mb-2">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="input__auth border-indigo-950 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mb-5">
                    <label for="password-confirm" class="mb-2">{{ __('Confirmar contraseña') }}</label>
                    <input id="password-confirm" type="password" class="input__auth" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="btn__login">
                        {{ __('Registrarse') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
