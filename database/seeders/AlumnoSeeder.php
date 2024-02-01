<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Juan', 'apellido_paterno' => 'Quiroz', 'apellido_materno' => 'Zuñiga', 'direccion' => 'Dummy Direction 1', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '1245326578'],
            ['nombre' => 'Luis', 'apellido_paterno' => 'López', 'apellido_materno' => 'Ortiz', 'direccion' => 'Dummy Direction 2', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '3265452598'],
            ['nombre' => 'Pedro', 'apellido_paterno' => 'Carranza', 'apellido_materno' => 'Ávila', 'direccion' => 'Dummy Direction 3', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '4825361575'],
            ['nombre' => 'Carlos', 'apellido_paterno' => 'Carreón', 'apellido_materno' => 'Medel', 'direccion' => 'Dummy Direction 4', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '2365988546'],
            ['nombre' => 'Guadalupe', 'apellido_paterno' => 'Alvarez', 'apellido_materno' => 'Castro', 'direccion' => 'Dummy Direction 5', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '5468451342'],
            ['nombre' => 'Sofia', 'apellido_paterno' => 'Pineda', 'apellido_materno' => 'Garcia', 'direccion' => 'Dummy Direction 6', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '3211512154'],
            ['nombre' => 'Tomas', 'apellido_paterno' => 'Alvarado', 'apellido_materno' => 'Muñoz', 'direccion' => 'Dummy Direction 7', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '2123546721'],
            ['nombre' => 'Patricia', 'apellido_paterno' => 'Galicia', 'apellido_materno' => 'Armenta', 'direccion' => 'Dummy Direction 8', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '2115210156'],
            ['nombre' => 'Diana', 'apellido_paterno' => 'Hernández', 'apellido_materno' => 'Calderon', 'direccion' => 'Dummy Direction 9', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '3124123445'],
            ['nombre' => 'Joaquin', 'apellido_paterno' => 'Sánchez', 'apellido_materno' => 'Vazquez', 'direccion' => 'Dummy Direction 10', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '3215123512'],
        ];

        DB::table('alumnos')->insert($data);
    }
}
