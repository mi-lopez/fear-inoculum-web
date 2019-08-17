<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Profession::create([
            'name' => 'herbalism',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg',
        ]);

        \App\Profession::create([
            'name' => 'skinning',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/inv_misc_skinningknife.jpg',
        ]);

        \App\Profession::create([
            'name' => 'mining',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg',
        ]);

        \App\Profession::create([
            'name' => 'alchemy',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_alchemy.jpg',
        ]);

        \App\Profession::create([
            'name' => 'leatherworking',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_leatherworking.jpg',
        ]);

        \App\Profession::create([
            'name' => 'engineering',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg',
        ]);

        \App\Profession::create([
            'name' => 'tailoring',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg',
        ]);

        \App\Profession::create([
            'name' => 'enchanting',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg',
        ]);

        \App\Profession::create([
            'name' => 'blacksmitning',
            'avatar' => 'https://wow.zamimg.com/images/wow/icons/large/trade_blacksmithing.jpg',
        ]);
    }
}
