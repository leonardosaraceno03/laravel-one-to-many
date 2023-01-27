@extends('layouts.app');

@section('content')
    <a href="{{ route('admin.posts.create') }}">Create New Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ttitle</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($var as $elem)
                <tr>
                    <th>{{ $elem['id'] }}</th>
                    <td>
                        <a href="{{ route('admin.posts.show', $elem['id']) }}">{{ $elem['title'] }}</a>
                    </td>
                    <td>{{ $elem['content'] }}</td>
                    <td>{{ $elem['likes'] }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $elem['id']) }}">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.posts.destroy', $elem['id']) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Destroy
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $var->links() }}
@endsection
