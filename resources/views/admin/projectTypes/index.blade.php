@extends('layouts.admin')

@section('content')
<header>
    <ul class="d-flex justify-content-end">
        <a href="{{route('admin.projects.create')}}"><li class="me-5">Add new project<i class="fa-solid fa-file-code ms-2"></i></li></a>
        <a href="#"><li>Notifications<i class="fa-solid fa-bell ms-2"></i></li></a>
    </ul>
</header>

<main>
    <h1>Published projects</h1>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>#id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Publishing date</th>
        </tr>
        </thead>
    
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>
                    <a href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->id}}</a>
                </td>
                <td>
                    <a href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->name}}</a>
                </td>
                <td>
                    {{Str::limit($project->description, 80)}}
                </td>
                <td>{{$project->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end mt-5">
        <a class="add-btn" href="{{route('admin.projects.create')}}">Add new project</a>
    </div>
</main>
@endsection