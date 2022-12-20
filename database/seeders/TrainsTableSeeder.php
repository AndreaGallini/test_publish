<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newtrain = new Train();
            $newtrain->company = $faker->company();
            $newtrain->stazione_partenza = $faker->city();
            $newtrain->stazione_arrivo = $faker->city();
            $newtrain->ora_partenza = $faker->time();
            $newtrain->ora_arrivo = $faker->time();
            $newtrain->codice_treno = $faker->ean8();
            $newtrain->n_carrozze = $faker->randomDigit();
            $newtrain->status = $faker->boolean();
            $newtrain->img = $faker->imageUrl(640, 480, 'train', true);

            $newtrain->save();
        }

    }
}
