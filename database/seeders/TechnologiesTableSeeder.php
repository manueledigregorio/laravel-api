<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Tecnology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $technology = new Tecnology();
            $technology->name = $faker->name();
            $technology->description = $faker->word();
            $technology->version = $faker->word();
            $technology->slug = Helper::generateSlug($technology->name, Tecnology::class);

            $technology->save();

        }
    }
}
