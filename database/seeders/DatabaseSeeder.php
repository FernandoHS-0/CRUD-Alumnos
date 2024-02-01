<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AlumnoSeeder::class);
        $this->call(CalificacionSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(SemestreSeeder::class);
    }
}
