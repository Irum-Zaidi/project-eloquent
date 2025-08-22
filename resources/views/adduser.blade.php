@extends('layout')
@section('title')
    Add New User
@endsection

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
    @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <a href="" class="btn btn-info btn-sm mt-3">Back</a>
@endsection
