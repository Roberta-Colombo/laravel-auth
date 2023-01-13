<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use App\Http\Requests\StoreTechnologyRequest;
use App\Http\Requests\UpdateTechnologyRequest;

class TechnologyController extends Controller
{

    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }


    public function create()
    {
        //
    }

    public function store(StoreTechnologyRequest $request)
    {
        //
    }


    public function show(Technology $technology)
    {
        //
    }

    public function edit(Technology $technology)
    {
        //
    }

    public function update(UpdateTechnologyRequest $request, Technology $technology)
    {
        //
    }

    public function destroy(Technology $technology)
    {
        //
    }
}