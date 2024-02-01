<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['periodo' => 'Primavera 2023', 'fecha_inicio' => '2023-01-06', 'fecha_fin' => '2023-05-06'],
            ['periodo' => 'Otoño 2023', 'fecha_inicio' => '2023-06-07', 'fecha_fin' => '2023-12-06'],
            ['periodo' => 'Primavera 2024', 'fecha_inicio' => '2024-01-06', 'fecha_fin' => '2024-05-06'],
        ];

        DB::table('semestres')->insert($data);
    }
}
