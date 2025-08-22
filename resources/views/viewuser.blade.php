@extends('layout')
@section('title')
    View User
@endsection

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->age }}</td>
                <td>{{ $users->city }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('users.index') }}" class="btn btn-info btn-sm mt-3">Back</a>
@endsection
