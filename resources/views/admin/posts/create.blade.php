@extends('layouts.app');

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
            @error('title')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" class="form-control" name="content">
            @error('content')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- Category --}}
        <div class="my-3">
            <label for="">Categories</label>
            <select class="form-control" name="category_id" id="">
                <option value="">Seleziona la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
