@extends('layouts.admin')

@section('content')
<ul>
    <li><h1>{{$project->name}}</h1></li>
    <img src="{{ asset('storage/' . $project->image_1) }}">

    <div class="d-flex align-items-center">
        <a class="link-secondary" href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><i class="fa-solid fa-pen"></i></a>
        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->name}}"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
</ul>
@include('partials.admin.modal-delete')
@endsection