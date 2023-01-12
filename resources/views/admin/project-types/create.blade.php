@extends('layouts.admin')

@section('content')
      <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{-- @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
            @endif --}}
        </div>
    <h1>Create new project type</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.project-types.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                      <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="type" name="type">
                        @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>


@endsection