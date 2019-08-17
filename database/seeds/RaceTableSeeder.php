<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Race::create([
            'name' => 'orc',
            'gender' => 'male',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg',
        ]);

        \App\Race::create([
            'name' => 'orc',
            'gender' => 'female',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_female.jpg',
        ]);

        \App\Race::create([
            'name' => 'undead',
            'gender' => 'male',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg',
        ]);

        \App\Race::create([
            'name' => 'undead',
            'gender' => 'female',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_female.jpg',
        ]);

        \App\Race::create([
            'name' => 'troll',
            'gender' => 'male',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_male.jpg',
        ]);

        \App\Race::create([
            'name' => 'troll',
            'gender' => 'female',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_female.jpg',
        ]);

        \App\Race::create([
            'name' => 'tauren',
            'gender' => 'male',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_tauren_male.jpg',
        ]);

        \App\Race::create([
            'name' => 'tauren',
            'gender' => 'female',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/achievement_character_tauren_female.jpg',
        ]);
    }
}
