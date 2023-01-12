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
        <h1>Edit project type: {{$projectType->type}}</h1>
        <div class="row my-5">
            <div class="col-12">
                <form action="{{route('admin.project-types.update', $projectType->slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type', $projectType->type)}}">
                        @error('type')
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