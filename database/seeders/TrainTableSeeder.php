<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) { 
            $new_train_object = new Train();
            $new_train_object->Azienda = $faker->sentence(5,true);
            $new_train_object->Stazione_di_partenza= $faker->sentence(5,true);
            $new_train_object->Orario_di_partenza= $faker->dateTime();
            $new_train_object->Orario_di_arrivo= $faker->dateTime();
            $new_train_object->Codice_Treno= $faker->ean8();
            $new_train_object->Numero_Carrozze= $faker->randomDigit();
            $new_train_object->In_orario= $faker->boolean();
            $new_train_object->Cancellato= $faker->boolean();
            $new_train_object->save();
        }
    }
}
