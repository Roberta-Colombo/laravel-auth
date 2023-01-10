@extends('layouts.app')

@section('content')
<ul>
    @foreach ($projects as $project)
    <li>
        <a href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->name}}</a>
    </li>
    @endforeach
</ul>
@endsection