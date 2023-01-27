@extends('layouts.app');

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
            @error('title')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" class="form-control" name="content">
            @error('content')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">likes</label>
            <input type="number"  class="form-control" name="likes">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
