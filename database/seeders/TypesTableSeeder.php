<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $type = new Type();
            $type->name = $faker->name();
            $type->description = $faker->word();
            $type->slug = Helper::generateSlug($type->name , Type::class);

            $type->save();

        }
    }
}
