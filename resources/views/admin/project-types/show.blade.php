@extends('layouts.admin')

@section('content')
<main>
    <h1>{{$projectType->type}}</h1>

    {{-- Aggiugere lista progetti 

         <div class="show-link mt-4">
        <strong>See more at:</strong> <a href="#">{{$project->github_link}}</a>
    </div> --}}


    <div class="d-flex justify-content-end align-items-center">
        <a href="{{route('admin.project-types.edit', $projectType->slug)}}" title="Edit Type"><button class="show-btn edit-btn"><i class="fa-solid fa-pen"></i></button></a>
        <form action="{{route('admin.project-types.destroy', $projectType->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="show-btn delete-btn ms-3" data-item-title="{{$projectType->type}}"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
</main>
@include('partials.admin.modal-delete')
@endsection