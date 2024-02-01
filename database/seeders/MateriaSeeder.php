<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Español', 'creditos' => 8],
            ['nombre' => 'Matematicas', 'creditos' => 8],
            ['nombre' => 'Inglés', 'creditos' => 8],
            ['nombre' => 'Biología', 'creditos' => 8],
            ['nombre' => 'Ética', 'creditos' => 6],
            ['nombre' => 'Geografía', 'creditos' => 8],
        ];

        DB::table('materias')->insert($data);
    }
}
