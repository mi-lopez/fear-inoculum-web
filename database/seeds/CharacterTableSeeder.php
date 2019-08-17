<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $character = \App\Character::create([
            'name' => 'Chryso',
            'class_id' => 1,
            'race_id' => 7,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Valrak',
            'class_id' => 1,
            'race_id' => 7,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Layla',
            'class_id' => 6,
            'race_id' => 6,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Caliste',
            'class_id' => 6,
            'race_id' => 5,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Huevito',
            'class_id' => 6,
            'race_id' => 5,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Rille',
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Colt',
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Neggro',
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Hayley',
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Adnia',
            'class_id' => 5,
            'race_id' => 4,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Halrhiot',
            'class_id' => 5,
            'race_id' => 3,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Sokjad',
            'class_id' => 2,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Prototype',
            'class_id' => 2,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Arkaether',
            'class_id' => 2,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 3]);

        $character = \App\Character::create([
            'name' => 'Aenima',
            'class_id' => 4,
            'race_id' => 5,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Akashax',
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Cirilo',
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Jovovich',
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);


        $character = \App\Character::create([
            'name' => 'Thomen',
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Cotito',
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Caoimghin',
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Bolas De Toro',
            'class_id' => 8,
            'race_id' => 7,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

        $character = \App\Character::create([
            'name' => 'Destroyer',
            'class_id' => 8,
            'race_id' => 1,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

        $character = \App\Character::create([
            'name' => 'Mapiz',
            'class_id' => 8,
            'race_id' => 1,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

    }
}
