<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaucesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sauces')->insert([
            [
                'name' => 'Hellfire Fear',
                'manufacturer' => 'Hellfire',
                'description' => 'Cette sauce de Hellfire est composée à 60% de purée de piment Carolina Reaper, le piment le plus fort du monde !',
                'mainPepper' => 'Carolina Reaper',
                'imageUrl' => 'https://www.sauce-piquante.fr/1713-large_default/hellfire-fear-this-sauce.jpg',
                'heat' => 9,
            ],
            [
                'name' => 'Hellfire Elixir',
                'manufacturer' => 'Hellfire',
                'description' => 'Description2',
                'mainPepper' => '7pod & Moruga Scorpion',
                'imageUrl' => 'https://www.sauce-piquante.fr/1693-large_default/hellfire-elixir-sauce.jpg',
                'heat' => 9,
            ],
            [
                'name' => 'Jalapeno Fumé',
                'manufacturer' => 'Seed Ranch',
                'description' => 'Description3',
                'mainPepper' => 'Piment Chipotle',
                'imageUrl' => 'https://www.sauce-piquante.fr/2360-large_default/seed-ranch-jalapeno-fume.jpg',
                'heat' => 3,
            ],
            [
                'name' => 'Sauce Ail Noir Jolokia',
                'manufacturer' => 'CaJohns',
                'description' => 'Description4',
                'mainPepper' => 'Piment Fresno',
                'imageUrl' => 'https://www.sauce-piquante.fr/826-large_default/sauce-jolokia-ail-noir-cajohns.jpg',
                'heat' => 7,
            ]
        ]);
    }
}
