<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calificaciones = DB::table('calificaciones')
        ->join('alumnos', 'calificaciones.idAlumno', '=', 'alumnos.id')
        ->join('materias', 'calificaciones.idMateria', '=', 'materias.id')
        ->join('profesors', 'calificaciones.idProfesor', '=', 'profesors.id')
        ->join('semestres', 'calificaciones.idSemestre', '=', 'semestres.id')
        ->select(
            'calificaciones.id as id_calificacion',
            'calificaciones.calificacion',
            'alumnos.nombre as alumno_nombre',
            'alumnos.apellido_paterno as alumno_apellido_paterno',
            'alumnos.apellido_materno as alumno_apellido_materno',
            'materias.nombre as materia_nombre',
            'profesors.nombre as profesor_nombre',
            'profesors.apellido_paterno as profesor_apellido_paterno',
            'profesors.apellido_materno as profesor_apellido_materno',
            'semestres.periodo',
        )->get();
        return view('dashboard.calificacion.index', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesores = DB::table('profesors')->select('id', 'nombre', 'apellido_paterno', 'apellido_materno')->get();
        $alumnos = DB::table('alumnos')->select('id', 'nombre', 'apellido_paterno', 'apellido_materno')->get();
        $materias = DB::table('materias')->select('id', 'nombre')->get();
        $semestres = DB::table('semestres')->select('id', 'periodo')->get();
        return view('dashboard.calificacion.create', compact('profesores', 'alumnos', 'materias', 'semestres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_alumno = $request->input('select_alumno');
        $id_profesor = $request->input('select_profesor');
        $id_materia = $request->input('select_materia');
        $id_semestre = $request->input('select_periodo');
        $calif = $request->input('calificacion');
        DB::table('calificaciones')->insert([
            'idAlumno' => $id_alumno,
            'idMateria' => $id_materia,
            'idProfesor' => $id_profesor,
            'idSemestre' => $id_semestre,
            'calificacion' => $calif,
        ]);
        return redirect()->route('calificacion.index');        
    }

    /**
     * Display the specified resource.
     */
    public function show(int $calificacion)
    {
        $detalles_cal = DB::table('calificaciones')
        ->join('alumnos', 'calificaciones.idAlumno', '=', 'alumnos.id')
        ->join('materias', 'calificaciones.idMateria', '=', 'materias.id')
        ->join('profesors', 'calificaciones.idProfesor', '=', 'profesors.id')
        ->join('semestres', 'calificaciones.idSemestre', '=', 'semestres.id')
        ->select(
            'calificaciones.id as id_calificacion',
            'calificaciones.calificacion',
            'alumnos.nombre as alumno_nombre',
            'alumnos.apellido_paterno as alumno_apellido_paterno',
            'alumnos.apellido_materno as alumno_apellido_materno',
            'materias.nombre as materia_nombre',
            'profesors.nombre as profesor_nombre',
            'profesors.apellido_paterno as profesor_apellido_paterno',
            'profesors.apellido_materno as profesor_apellido_materno',
            'semestres.periodo',
        )->where('calificaciones.id', '=', $calificacion)->get();
        return view('dashboard.calificacion.editar', compact('detalles_cal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calificacion $calificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $calificacion)
    {
        $nueva_cal = $request->input('calificacion');
        DB::table('calificaciones')->where('id', $calificacion)->update(['calificacion' => $nueva_cal]);
        return redirect()->route('calificacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calificacion $calificacion)
    {
        //
    }
}
