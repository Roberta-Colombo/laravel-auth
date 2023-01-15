@extends('layouts.admin')

@section('content')
<header>
    <ul class="d-flex justify-content-end">
        <a href="{{route('admin.projects.create')}}"><li class="me-5">Add new project<i class="fa-solid fa-file-code ms-2"></i></li></a>
        <a href="#"><li>Notifications<i class="fa-solid fa-bell ms-2"></i></li></a>
    </ul>
</header>

<main>
    {{-- <h1>Available technologies</h1>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>#id</th>
            <th>Technology</th>
            <th>Number of projects</th>
        </tr>
        </thead>
    
        <tbody>
            @foreach ($technologies as $technology)
            <tr>
                <td>
                   {{$technology->id}}
                </td>
                <td>
                {{$technology->name}}</a>
                </td>
                <td>{{count($technology->projects)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}

    <h1>Available technologies</h1>
    <p class="mt-3">Click on the technology name to change it or add a new one:</p>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif

    <table class="table table-striped mt-5">
        <thead>
        <tr>
            {{-- <th>#id</th> --}}
            <th>Technology</th>
            <th>Number of projects</th>
        </tr>   
        </thead>
    
        <tbody>
            @foreach($technologies as $technology)
            <tr>
                <td>
                    <form id="tag-{{$technology->id}}" action="{{route('admin.technologies.update', $technology->slug)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input class="border-0 bg-transparent" type="text" name="name" value="{{old('name', $technology->name)}}">
                    </form>
                </td>

                <td>
                    {{$technology->projects && count($technology->projects) > 0 ? count($technology->projects) : 'not in use'}}
                </td>

                <td>
                    <form action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn btn ms-3" data-item-title="{{$technology->name}}"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>
                    <form id="tag-{{$technology->id}}" action="{{route('admin.technologies.store', $technology->slug)}}" method="post">
                        @csrf
                        @method('POST')
                        <input class="border-0 bg-transparent" type="text" name="name" value="Add new technology">
                    </form>
                </td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</main>

@include('partials.admin.modal-delete')
@endsection