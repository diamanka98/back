<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(bovinTableSeeder::class); 
        $this->call(raceTableSeeder::class); 
        $this->call(utilisateurTableSeeder::class); 
        $this->call(periodeTableSeeder::class); 
        // \App\Models\User::factory(10)->create();
    }
}
