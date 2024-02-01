@extends('layouts.app')

@section('content')
    <div class="bg-white p-10">
        <h1 class="text-2xl font-bold mb-5">Regsitrar alumno</h1>
        <div class="flex justify-center">
            <form method="POST" action="{{route('alumno.store')}}" class="w-1/2">
                @csrf
                <div class="flex flex-col mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" required class="input__auth" name="nombre">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="apellido_p">Apellido paterno</label>
                    <input type="text" required class="input__auth" name="apellido_paterno">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="apellido_m">Apellido materno</label>
                    <input type="text" required class="input__auth" name="apellido_materno">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="direccion">Dirección</label>
                    <input type="text" required class="input__auth" name="direccion">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" required class="input__auth" name="correo_electronico">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="telefono">Télefono</label>
                    <input type="tel" required class="input__auth" name="telefono">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="btn__login">Registrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection