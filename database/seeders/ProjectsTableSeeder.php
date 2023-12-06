<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
        {
            for ($i=0; $i < 50 ; $i++) {
                $project = new Project();
                $project->name = $faker->name();
                $project->description = $faker->word();
                $project->type_id = Type::inRandomOrder()->first()->id;
                $project->slug = Helper::generateSlug($project->name , Project::class);
                $project->save();

            }
        }
}
