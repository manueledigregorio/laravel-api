<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTecnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ad ogni ciclo estraggo random un project e un tecnology li metto in relazione
        for ($i=0; $i < 50; $i++) {
            // estraggo un post

            //estraggo id del tag random
            $project = Project::inRandomOrder()->first();

            $tecnology_id = Tecnology::inRandomOrder()->first()->id;

            $project->tecnologies()->attach($tecnology_id);

        }
    }
}
