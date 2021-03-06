@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Post Title</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                    name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                   <label for="image" class="col-md-4 col-form-label">Upload Image</label>
                   <input type="file" name="image" id="image" class="form-control-file">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row  pt-3">
                <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection