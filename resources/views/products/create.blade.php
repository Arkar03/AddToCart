@extends('layout.master')

@section('title', 'Create Product')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="p-5">
            {{-- Form Start --}}
            <form method="POST" enctype="multipart/form-data">
                <fieldset>
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger text-white">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                        <p class="alert alert-secondary">
                            {{ session('status') }}
                        </p>
                    @endif

                    <legend class="text-center h1">Insert New Post</legend>
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label mt-4">Title</label>
                        <input type="text" class="form-control focus-ring focus-ring-secondary" id="title"
                            placeholder="Enter title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label mt-4">Price</label>
                        <input type="number" class="form-control focus-ring focus-ring-secondary" id="price"
                            placeholder="Enter price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label mt-4">Description</label>
                        <textarea class="form-control focus-ring focus-ring-secondary" id="description" rows="3" name="description"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="file" class="form-label mt-4">Image</label>
                        <input class="form-control focus-ring focus-ring-secondary" type="file" id="file"
                            name="file[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </fieldset>
            </form>
            {{-- Form End --}}
        </div>
    </div>
@endsection
