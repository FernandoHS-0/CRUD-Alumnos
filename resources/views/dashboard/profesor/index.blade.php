@extends('layouts.app')

@section('content')
    <div class="bg-white p-10">
        <h1 class="text-2xl font-bold mb-5">Lista de profesores</h1>
        <div class="grid grid-cols-4 gap-4 mb-2 text-lg font-bold text-center">
            <div><p>Nombre</p></div>
            <div><p>Correo electrónico</p></div>
            <div><p>Teléfono</p></div>
            <div><p>Dirección</p></div>
        </div>
        <div class="grid grid-cols-4 gap-2 xl:gap-4 text-center">
            @foreach ($profesores as $profesor)
            <div>
                <p>{{$profesor->nombre}} {{$profesor->apellido_paterno}} {{$profesor->apellido_materno}}</p>
            </div>
            <div>
                <p>{{$profesor->correo_electronico}}</p>
            </div>
            <div>
                <p>{{$profesor->telefono}}</p>
            </div>
            <div>
                <p>{{$profesor->direccion}}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection