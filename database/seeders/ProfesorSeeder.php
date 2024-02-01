<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Dolores', 'apellido_paterno' => 'Toriz', 'apellido_materno' => 'Zuñiga', 'direccion' => 'Dummy Direction 1', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '1245326578'],
            ['nombre' => 'Juan', 'apellido_paterno' => 'Perez', 'apellido_materno' => 'Ortiz', 'direccion' => 'Dummy Direction 2', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '3265452598'],
            ['nombre' => 'Roberto', 'apellido_paterno' => 'Snachez', 'apellido_materno' => 'Ávila', 'direccion' => 'Dummy Direction 3', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '4825361575'],
            ['nombre' => 'Miguel', 'apellido_paterno' => 'Galvez', 'apellido_materno' => 'Medel', 'direccion' => 'Dummy Direction 4', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '2365988546'],
            ['nombre' => 'Carmen', 'apellido_paterno' => 'Quiroga', 'apellido_materno' => 'Castro', 'direccion' => 'Dummy Direction 5', 'correo_electronico' => 'correo.example@correo.com', 'telefono' => '5468451342'],
        ];

        DB::table('profesors')->insert($data);
    }
}
