@extends('layout')

@section('content')
    <h1>Edit User</h1>
    <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="{{ $user->country }}">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $user->age }}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
