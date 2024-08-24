<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HabitacionSeeder extends Seeder
{
    /**
     * Ejecuta los seeds para la tabla 'habitaciones'.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitaciones')->insert([
            [
                'numero' => Str::random(10),
                'precio' => '100.00',
                'tipo' => 'Single',
            ],
            [
                'numero' => Str::random(10),
                'precio' => '150.00',
                'tipo' => 'Double',
            ],
            [
                'numero' => Str::random(10),
                'precio' => '200.00',
                'tipo' => 'Suite',
            ],
        ]);
    }
}
