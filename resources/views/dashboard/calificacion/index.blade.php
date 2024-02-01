@extends('layouts.app')

@section('content')
    <div class="bg-white p-10">
        <h1 class="text-2xl font-bold mb-2">Lista de calificaciones</h1>
        <p class="mb-5">Haga clic en una calificación para editarla</p>
        <div class="flex text-center font-bold text-lg mb-3">
            <div class="basis-1/5">Calificación</div>
            <div class="basis-1/5">Alumno</div>
            <div class="basis-1/5">Profesor</div>
            <div class="basis-1/5">Materia</div>
            <div class="basis-1/5">Periodo</div>
        </div>
        @foreach ($calificaciones as $cal)
            <a href="{{route('calificacion.show', ['calificacion' => $cal->id_calificacion])}}">
                <div class="flex hover:bg-gray-300 p-2 text-center">
                    <div class="basis-1/5">{{$cal->calificacion}}</div>
                    <div class="basis-1/5">{{$cal->alumno_nombre}} {{$cal->alumno_apellido_paterno}} {{$cal->alumno_apellido_materno}}</div>
                    <div class="basis-1/5">{{$cal->profesor_nombre}} {{$cal->profesor_apellido_paterno}} {{$cal->profesor_apellido_materno}}</div>
                    <div class="basis-1/5">{{$cal->materia_nombre}}</div>
                    <div class="basis-1/5">{{$cal->periodo}}</div>
                </div>   
            </a>
        @endforeach
    </div>
@endsection