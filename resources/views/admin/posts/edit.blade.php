@extends('layouts.app');

@section('content')
    <form method="POST" action="{{ route('admin.posts.update', $elem['id']) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input value="{{ $elem['title'] }}" type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input value="{{ $elem['content'] }}" type="text" class="form-control" name="content">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">likes</label>
            <input value="{{ $elem['likes'] }}" type="number" class="form-control" name="likes">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
