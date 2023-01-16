<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get()->toQuery()->paginate(5);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $projectTypes = ProjectType::all();
        $technologies = Technology::all();
        return view('admin.projects.create', compact('projectTypes', 'technologies'));
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $slug = Project::generateSlug($request->name);
        $data['slug'] = $slug;
        if ($request->hasFile('image_1')) {
            $img_path = Storage::disk('public')->put('project_images', $request->image_1);
            $data['image_1'] = $img_path;
        }

        $new_project = Project::create($data);

        if ($request->has('technologies')) {
            $new_project->technologies()->attach($request->technologies);
        }

        return redirect()->route('admin.projects.show', $new_project->slug);
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $projectTypes = ProjectType::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'projectTypes', 'technologies'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $slug = Project::generateSlug($request->name);
        $data['slug'] = $slug;
        if ($request->hasFile('image_1')) {
            if ($project->image_1) {
                Storage::delete($project->image_1);
            }

            $path = Storage::disk('public')->put('project_images', $request->image_1);
            $data['image_1'] = $path;
        }

        $project->update($data);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        } else {
            $project->technologies()->sync([]);
        }
        return redirect()->route('admin.projects.show', $project->slug)->with('message', "$project->name updated successfully");
    }

    public function destroy(Project $project)
    {
        if ($project->image_1) {
            Storage::delete($project->image_1);
        }

        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "$project->name deleted successfully");
    }
}