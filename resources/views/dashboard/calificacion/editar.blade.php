@extends('layouts.app')

@section('content')
    <div class="bg-white p-10">
        <h1 class="text-2xl font-bold mb-5">Editar calificación</h1>
         @foreach ($detalles_cal as $val)
            <form method="POST" action="{{route('calificacion.update', ['calificacion' => $val->id_calificacion])}}">
                @csrf
                @method('PUT')
                <div class="flex flex-col text-lg">
                    <div class="flex gap-4">
                        <p><span class="font-bold">Alumno:</span> {{$val->alumno_nombre}} {{$val->alumno_apellido_paterno}} {{$val->alumno_apellido_materno}}</p>
                        <p><span class="font-bold">Profesor:</span> {{$val->profesor_nombre}} {{$val->profesor_apellido_paterno}} {{$val->profesor_apellido_materno}}</p>
                    </div>
                    <div class="flex gap-4">
                        <p><span class="font-bold">Materia:</span> {{$val->materia_nombre}}</p>
                        <p><span class="font-bold">Semestre:</span> {{$val->periodo}}</p>
                    </div>
                    <div class="flex gap-4">
                        <p><span class="font-bold">Calificación actual:</span> {{$val->calificacion}}</p>
                        <div class="flex gap-4 text-lg">
                            <label for="calificacion" class="font-bold">Calificación nueva:</label>
                            <input type="number" name="calificacion" class="input__auth" min="0" max="10" step="0.01">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn__login">Guardar</button>
            </form>
        @endforeach
    </div>
@endsection