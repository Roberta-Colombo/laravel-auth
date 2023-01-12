@extends('layouts.admin')

@section('content')
<main>
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
        </div>
        <h1>Edit Project: {{$project->name}}</h1>
        <div class="row my-5">
            <div class="col-12">
                <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="name" class="form-label">Project</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $project->name)}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{old('description', $project->description)}}</textarea>
                      </div>

                      <div class="mb-3">
                        <label for="github_link" class="form-label">Github link</label>
                        <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link" value="{{old('github_link', $project->github_link)}}">
                        @error('github_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="image_1" class="form-label">Upload new image</label>
                        <input type="file" id="image_1" name="image_1" class="form-control @error('image_1') is-invalid @enderror">
                        @error('image_1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <button type="submit" class="btn submit-btn mt-4 me-2">Submit</button>
                      <button type="reset" class="btn reset-btn mt-4">Reset</button>
                </form>
            </div>
        </div>
</main>
@endsection