<?php

use Illuminate\Database\Seeder;

class SpecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Spec::create([
            'name' => 'tank',
            'avatar' => 'https://fragmentedthought.com/sites/default/files/Tank.png',
        ]);

        \App\Spec::create([
            'name' => 'heal',
            'avatar' => 'https://fragmentedthought.com/sites/default/files/Healer.png',
        ]);

        \App\Spec::create([
            'name' => 'dps',
            'avatar' => 'https://fragmentedthought.com/sites/default/files/Damage.png',
        ]);
    }
}
