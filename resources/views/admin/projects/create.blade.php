@extends('layouts.admin')

@section('content')
      {{-- <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
    <h1>Create Post</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                      <div class="mb-3">
                        <label for="title" class="form-label">Progetto</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="image_1" class="form-label">Image</label>
                        <input type="text" class="form-control @error('image_1') is-invalid @enderror" id="image_1" name="image_1">
                        @error('image_1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="github_link" class="form-label">Github link</label>
                        <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link">
                        @error('github_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      {{-- <div class="mb-3">
                        <label for="cover_image" class="form-label">Image</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                        @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div> --}}
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>


@endsection