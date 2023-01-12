@extends('layouts.admin')

@section('content')
<header>
    <ul class="d-flex justify-content-end">
        <a href="{{route('admin.project-types.create')}}"><li class="me-5">Add new project type<i class="fa-solid fa-file-code ms-2"></i></li></a>
        <a href="#"><li>Notifications<i class="fa-solid fa-bell ms-2"></i></li></a>
    </ul>
</header>

<main>
    <h1>Available project types</h1>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>#id</th>
            <th>Type</th>
            <th>Number of projects</th>
        </tr>
        </thead>
    
        <tbody>
            @foreach ($projectTypes as $projectType)
            <tr>
                <td>
                    <a href="{{route('admin.project-types.show', $projectType->slug)}}" title="View Project Type">{{$projectType->id}}</a>
                </td>
                <td>
                    <a href="{{route('admin.project-types.show', $projectType->slug)}}" title="View Project Type">{{$projectType->type}}</a>
                </td>
                <td>{{count($projectType->projects)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end mt-5">
        <a class="add-btn" href="{{route('admin.project-types.create')}}">Add new type</a>
    </div>
</main>
@endsection