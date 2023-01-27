@extends('layouts.app');

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ttitle</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th>{{ $elem['id'] }}</th>
                <td>{{ $elem['title'] }}</td>
                <td>{{ $elem['content'] }}</td>
                <td>{{ $elem['likes'] }}</td>
            </tr>

        </tbody>
    </table>
@endsection
