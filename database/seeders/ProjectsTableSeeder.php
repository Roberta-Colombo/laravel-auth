<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->slug = Str::slug($project->name, '-');
            $project->description = $faker->text(500);
            $project->image_1 = $faker->imageUrl(640, 480);
            $project->image_2 = $faker->imageUrl(640, 480);
            $project->github_link = $faker->url();
            $project->save();
        }
    }
}