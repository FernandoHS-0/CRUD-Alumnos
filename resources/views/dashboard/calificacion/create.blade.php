@extends('layouts.app')

@section('content')
    <div class="bg-white p-10">
        <h1 class="text-2xl font-bold mb-5">Registrar calificación</h1>
        <form method="POST" action="{{route('calificacion.store')}}" class="xl:w-1/2 flex flex-col justify-center mx-auto">
            @csrf
            <div class="mb-3 flex flex-col">
                <label for="alumno" class="font-bold text-lg mb-2">Alumno</label>
                <select name="select_alumno" class="p-2">
                    @foreach ($alumnos as $alumno)
                        <option value="{{$alumno->id}}">{{$alumno->nombre}} {{$alumno->apellido_paterno}} {{$alumno->apellido_materno}}</option>                        
                    @endforeach
                </select>
            </div>
            <div class="mb-3 flex flex-col">
                <label for="profesor" class="font-bold text-lg mb-2">Profesor</label>
                <select name="select_profesor" class="p-2">
                    @foreach ($profesores as $profesor)
                        <option value="{{$profesor->id}}">{{$profesor->nombre}} {{$profesor->apellido_paterno}} {{$profesor->apellido_materno}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex gap-5 justify-center">
                <div class="mb-3 flex flex-col">
                    <label for="materia" class="font-bold text-lg mb-2">Materia</label>
                    <select name="select_materia" class="p-2">
                        @foreach ($materias as $materia)
                            <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="semestre" class="font-bold text-lg mb-2">Periodo</label>
                    <select name="select_periodo" class="p-2">
                        @foreach ($semestres as $semestre)
                            <option value="{{$semestre->id}}">{{$semestre->periodo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="calificacion" class="font-bold text-lg mb-2">Calificacion</label>
                    <input type="number" name="calificacion" class="input__auth" min="0" max="10" step="0.01">
                </div>
            </div>
            <button type="submit" class="btn__login">Registrar</button>
        </form>
    </div>
@endsection