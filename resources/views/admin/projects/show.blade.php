@extends('layouts.admin')

@section('content')
<main>
    <h1>{{$project->name}}</h1>
    <div class="show-img my-5">
        <img src="{{ asset('storage/' . $project->image_1) }}">
    </div>

    <div class="mb-3">
        <strong>Type:</strong> {{$project->projectType ? $project->projectType->type : 'No category'}}
    </div>

    <div class="mb-3">
        {{-- per togliere la formattazione html proveniente dalla casella editor aggiunta con script --}}
        {!! $project->description !!}
    </div>

    @if($project->technologies && count($project->technologies) > 0)
    <span><strong>Technologies used:</strong></span>
       @foreach ($project->technologies as $technology)
        <span>{{$technology->name}}</span>
       @endforeach
    @endif

    <div class="show-link my-4">
        <strong>See more at:</strong> <a href="#">{{$project->github_link}}</a>
    </div>


    <div class="d-flex justify-content-end align-items-center">
        <a href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><button class="show-btn edit-btn"><i class="fa-solid fa-pen"></i></button></a>
        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="show-btn delete-btn ms-3" data-item-title="{{$project->name}}"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
</main>
@include('partials.admin.modal-delete')
@endsection