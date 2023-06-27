@extends('layout')

@section('content')
    <h1>Create User</h1>
    <form action="/users" method="POST">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
