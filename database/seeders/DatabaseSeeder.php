<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {

            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Frecciarossa', 'Italo', 'Ntv']);
            $new_train->stazione_partenza = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Napoli Centrale', 'Bologna Centrale', 'Firenze Centrale']);
            $new_train->stazione_arrivo = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Napoli Centrale', 'Bologna Centrale', 'Firenze Centrale']);
            $new_train->orario_partenza = $faker->dateTimeBetween('-1 year', '+1 year');
            $new_train->orario_arrivo = $faker->dateTimeBetween('-1 year', '+1 year');
            $new_train->codice_treno = $faker->bothify('??-#########');
            $new_train->numero_carrozze = $faker->numberBetween(1, 20);
            $new_train->puntuale = $faker->randomElement([0, 1]);
            $new_train->binario_partenza = $faker->bothify('??-#########');

            $new_train->save();
        }
    }
}
