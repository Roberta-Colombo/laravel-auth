@extends('layouts.admin')

@section('content')
<main>
    <h2 class="mb-5">{{$projectType->type}} projects:</h2>

    @if($projectType->projects && count($projectType->projects) > 0)
    @foreach($projectType->projects as $project)
    <div class="d-flex justify-content-between align-items-center my-4">
        <div>{{ $project->name }}</div>
    </div>
    <hr>
    @endforeach
    <div class="d-flex justify-content-end align-items-center mt-3">
        <a href="{{route('admin.project-types.edit', $projectType->slug)}}" title="Edit Type"><button class="show-btn edit-btn"><i class="fa-solid fa-pen"></i></button></a>
        <form action="{{route('admin.project-types.destroy', $projectType->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="show-btn delete-btn ms-3" data-item-title="{{$projectType->type}}"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
    @else 
    <div>No project associated with this type.</div>
    @endif 

</main>
@include('partials.admin.modal-delete')
@endsection