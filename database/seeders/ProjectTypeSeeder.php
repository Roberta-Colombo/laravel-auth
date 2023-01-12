<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectTypes = ['Frontend', 'Backend', 'Full Stack'];
        foreach ($projectTypes as $projectType) {
            $newProjectType = new ProjectType();
            $newProjectType->type = $projectType;
            $newProjectType->slug = Str::slug($newProjectType->type, '-');
            $newProjectType->save();
        }
    }
}