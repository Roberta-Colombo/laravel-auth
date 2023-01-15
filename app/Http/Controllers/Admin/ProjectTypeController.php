<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectType;
use App\Models\Project;
use App\Http\Requests\StoreProjectTypeRequest;
use App\Http\Requests\UpdateProjectTypeRequest;

class ProjectTypeController extends Controller
{
    public function index()
    {
        $projectTypes = ProjectType::all();
        return view('admin.project-types.index', compact('projectTypes'));
    }

    public function create()
    {
        return view('admin.project-types.create');
    }


    public function store(StoreProjectTypeRequest $request)
    {

        $data = $request->validated();
        $slug = ProjectType::generateSlug($request->type);
        $data['slug'] = $slug;
        $newProjectType = ProjectType::create($data);
        return redirect()->route('admin.project-types.show', $newProjectType->slug);
    }

    public function show(ProjectType $projectType)
    {
        $projects = Project::all();
        return view('admin.project-types.show', compact('projectType', 'projects'));
    }

    public function edit(ProjectType $projectType)
    {
        return view('admin.project-types.edit', compact('projectType'));
    }

    public function update(UpdateProjectTypeRequest $request, ProjectType $projectType)
    {
        $data = $request->validated();
        $slug = ProjectType::generateSlug($request->type);
        $data['slug'] = $slug;
        $projectType->update($data);
        return redirect()->route('admin.project-types.show')->with('message', "$projectType->type updated successfully");
    }


    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();
        return redirect()->route('admin.project-types.index')->with('message', "$projectType->type deleted successfully");
    }
}