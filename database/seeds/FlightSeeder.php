<?php

use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('Flight')->insert([
          'nombre' => Str::random(10),
          'pais' => Str::random(10),
          'codigo_de_vuelo' => Hash::make('password'),
      ]);
    }
}
