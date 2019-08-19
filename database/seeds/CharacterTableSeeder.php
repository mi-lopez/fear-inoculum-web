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
            'alt' => false,
            'class_id' => 1,
            'race_id' => 7,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Valrak',
            'alt' => false,
            'class_id' => 1,
            'race_id' => 7,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Layla',
            'alt' => false,
            'class_id' => 6,
            'race_id' => 6,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Caliste',
            'alt' => false,
            'class_id' => 6,
            'race_id' => 5,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Huevito',
            'alt' => false,
            'class_id' => 6,
            'race_id' => 5,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Rille',
            'alt' => false,
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Claudiocolt',
            'alt' => false,
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Neggro',
            'alt' => false,
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Hayley',
            'alt' => false,
            'class_id' => 3,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Adnia',
            'alt' => false,
            'class_id' => 5,
            'race_id' => 4,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Halrhiot',
            'alt' => false,
            'class_id' => 5,
            'race_id' => 3,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Sokjad',
            'alt' => false,
            'class_id' => 2,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Prototype',
            'alt' => false,
            'class_id' => 2,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Arkaether',
            'alt' => false,
            'class_id' => 2,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([1, 3]);

        $character = \App\Character::create([
            'name' => 'Aenima',
            'alt' => false,
            'class_id' => 4,
            'race_id' => 5,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Akashax',
            'alt' => false,
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([2, 5]);

        $character = \App\Character::create([
            'name' => 'Cirilo',
            'alt' => false,
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 2,
        ]);

        $character->professions()->sync([1, 4]);

        $character = \App\Character::create([
            'name' => 'Blazysm',
            'alt' => true,
            'class_id' => 4,
            'race_id' => 1,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);


        $character = \App\Character::create([
            'name' => 'Thomen',
            'alt' => false,
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Cotito',
            'alt' => false,
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([3, 6]);

        $character = \App\Character::create([
            'name' => 'Caoimghin',
            'alt' => false,
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Jovovich',
            'alt' => false,
            'class_id' => 7,
            'race_id' => 3,
            'spec_id' => 3,
        ]);

        $character->professions()->sync([7, 8]);

        $character = \App\Character::create([
            'name' => 'Bolas De Toro',
            'alt' => false,
            'class_id' => 8,
            'race_id' => 7,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

        $character = \App\Character::create([
            'name' => 'Destroyer',
            'alt' => false,
            'class_id' => 8,
            'race_id' => 1,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

        $character = \App\Character::create([
            'name' => 'Mapiz',
            'alt' => false,
            'class_id' => 8,
            'race_id' => 1,
            'spec_id' => 1,
        ]);

        $character->professions()->sync([3, 9]);

    }
}
