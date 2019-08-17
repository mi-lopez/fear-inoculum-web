<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Classe::create([
            'name' => 'druid',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_druid.jpg'
        ]);

        \App\Classe::create([
            'name' => 'rogue',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_rogue.jpg'
        ]);

        \App\Classe::create([
            'name' => 'mage',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg'
        ]);

        \App\Classe::create([
            'name' => 'shaman',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_shaman.jpg'
        ]);

        \App\Classe::create([
            'name' => 'priest',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_priest.jpg'
        ]);

        \App\Classe::create([
            'name' => 'hunter',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_hunter.jpg'
        ]);

        \App\Classe::create([
            'name' => 'warlock',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_warlock.jpg'
        ]);

        \App\Classe::create([
            'name' => 'warrior',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/classicon_warrior.jpg'
        ]);
    }
}
