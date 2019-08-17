<?php

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
        $this->call([
            RaceTableSeeder::class,
            ClassTableSeeder::class,
            ProfessionTableSeeder::class,
            CharacterTableSeeder::class,
            SpecTableSeeder::class
        ]);
    }
}
