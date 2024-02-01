<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['idAlumno' => 1, 'idMateria' => 1, 'idProfesor' => 1, 'idSemestre' => 1, 'calificacion' => 9.3],
            ['idAlumno' => 1, 'idMateria' => 2, 'idProfesor' => 2, 'idSemestre' => 1, 'calificacion' => 5.6],
            ['idAlumno' => 1, 'idMateria' => 3, 'idProfesor' => 3, 'idSemestre' => 1, 'calificacion' => 6.5],
            ['idAlumno' => 1, 'idMateria' => 4, 'idProfesor' => 4, 'idSemestre' => 1, 'calificacion' => 7.5],
            ['idAlumno' => 1, 'idMateria' => 5, 'idProfesor' => 5, 'idSemestre' => 2, 'calificacion' => 7.8],
            ['idAlumno' => 1, 'idMateria' => 6, 'idProfesor' => 4, 'idSemestre' => 2, 'calificacion' => 8.5],
            ['idAlumno' => 2, 'idMateria' => 1, 'idProfesor' => 1, 'idSemestre' => 1, 'calificacion' => 6.0],
            ['idAlumno' => 2, 'idMateria' => 2, 'idProfesor' => 2, 'idSemestre' => 3, 'calificacion' => 7.6],
            ['idAlumno' => 2, 'idMateria' => 3, 'idProfesor' => 3, 'idSemestre' => 1, 'calificacion' => 4.5],
            ['idAlumno' => 2, 'idMateria' => 4, 'idProfesor' => 4, 'idSemestre' => 2, 'calificacion' => 8.6],
            ['idAlumno' => 2, 'idMateria' => 5, 'idProfesor' => 5, 'idSemestre' => 3, 'calificacion' => 9.0],
            ['idAlumno' => 2, 'idMateria' => 6, 'idProfesor' => 4, 'idSemestre' => 1, 'calificacion' => 10.0],
            ['idAlumno' => 3, 'idMateria' => 1, 'idProfesor' => 1, 'idSemestre' => 2, 'calificacion' => 5.6],
            ['idAlumno' => 3, 'idMateria' => 2, 'idProfesor' => 2, 'idSemestre' => 3, 'calificacion' => 7.8],
            ['idAlumno' => 3, 'idMateria' => 3, 'idProfesor' => 3, 'idSemestre' => 1, 'calificacion' => 9.5],
            ['idAlumno' => 3, 'idMateria' => 4, 'idProfesor' => 4, 'idSemestre' => 2, 'calificacion' => 9.4],
            ['idAlumno' => 3, 'idMateria' => 5, 'idProfesor' => 5, 'idSemestre' => 3, 'calificacion' => 9.6],
            ['idAlumno' => 3, 'idMateria' => 6, 'idProfesor' => 2, 'idSemestre' => 1, 'calificacion' => 8.4],
            ['idAlumno' => 4, 'idMateria' => 1, 'idProfesor' => 1, 'idSemestre' => 2, 'calificacion' => 7.6],
            ['idAlumno' => 4, 'idMateria' => 2, 'idProfesor' => 2, 'idSemestre' => 2, 'calificacion' => 9.7],
            ['idAlumno' => 4, 'idMateria' => 3, 'idProfesor' => 3, 'idSemestre' => 1, 'calificacion' => 8.9],
        ];

        DB::table('calificaciones')->insert($data);
    }
}
