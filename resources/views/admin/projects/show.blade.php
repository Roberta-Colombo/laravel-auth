@extends('layouts.admin')

@section('content')
<main>
    <h1>{{$project->name}}</h1>
    <div class="show-img my-5">
        <img src="{{ asset('storage/' . $project->image_1) }}">
    </div>

    <div>
        {{$project->description}}
    </div>

    <div class="show-link mt-4">
        <strong>See more at:</strong> <a href="#">{{$project->github_link}}</a>
    </div>


    <div class="d-flex justify-content-end align-items-center">
        <a href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><button class="edit-btn"><i class="fa-solid fa-pen"></i></button></a>
        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->name}}"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
</main>
@include('partials.admin.modal-delete')
@endsection