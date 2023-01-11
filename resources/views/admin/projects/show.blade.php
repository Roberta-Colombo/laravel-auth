@extends('layouts.app')

@section('content')
<ul>
    <li><h1>{{$project->name}}</h1></li>
    <a class="link-secondary" href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><i class="fa-solid fa-pen"></i></a>
    <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->title}}"><i class="fa-solid fa-trash-can"></i></button>
     </form>
</ul>
@endsection