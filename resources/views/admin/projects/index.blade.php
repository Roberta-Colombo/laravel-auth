@extends('layouts.admin')

@section('content')
<h1>Projects</h1>
<a class="btn btn-success" href="{{route('admin.projects.create')}}">Add new project</a>
@if(session()->has('message'))
<div class="alert alert-success mb-3 mt-3">
    {{ session()->get('message') }}
</div>
@endif

<ul>
    @foreach ($projects as $project)
    <li>
        <a href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->name}}</a>
    </li>
    @endforeach
</ul>

@endsection