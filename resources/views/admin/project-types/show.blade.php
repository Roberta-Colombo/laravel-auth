@extends('layouts.admin')

@section('content')
<main>
    <h1>{{$projectType->type}}</h1>

    {{-- Aggiugere lista progetti 

    <div>
        {{$projectType->projects}}
    </div>
    --}}

    {{-- @foreach($projectTypes as $projectType){
       {{ $projectType->projects->name }};
    }
    @endforeach --}}

    @if($projectType->projects && count($projectType->projects) > 0)
    @foreach($projectTypes as $projectType){
        {{ $projectType->projects->name }};
     }
    @endforeach

    @else 
    <div>No projects</div>
    @endif
    

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