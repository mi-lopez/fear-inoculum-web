@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Nick</th>
                            <th>Race</th>
                            <th>Class</th>
                            <th colspan="2">Professions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>Chryso</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_tauren_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_druid.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_alchemy.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Layla</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_female.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_hunter.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_misc_skinningknife.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_leatherworking.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Huevito</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_hunter.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_misc_skinningknife.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_leatherworking.jpg"></td>
                        </tr>
                       <tr class="text-center">
                            <td>Caliste</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_hunter.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Rille</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Colt</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Neggro</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Valrak</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Hailey</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_mage.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Karli</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_female.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_priest.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Halrhiot</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_priest.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Sokjad</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_rogue.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_alchemy.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Prototype</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_rogue.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Arkaether</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_rogue.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Aenima</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_troll_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_shaman.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_alchemy.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Akashax</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_shaman.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Cirilo</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_shaman.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_herbalism.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_alchemy.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Jovovich</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_shaman.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Thomen</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warlock.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Cotito</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warlock.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_engineering.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Caoimghin</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_undead_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warlock.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_tailoring.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/inv_enchant_disenchant.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Bolas de Toro</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_tauren_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warrior.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_blacksmithing.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Destroyer</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warrior.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_blacksmithing.jpg"></td>
                        </tr>
                        <tr class="text-center">
                            <td>Mapiz</td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/achievement_character_orc_male.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/classicon_warrior.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_mining.jpg"></td>
                            <td><img src="https://wow.zamimg.com/images/wow/icons/large/trade_blacksmithing.jpg"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
