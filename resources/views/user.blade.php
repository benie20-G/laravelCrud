@extends('layout')
@section('content')
<h1>Welcome To you account {{$user->username}}</h1>
<p><small>{{$user->email}}</small></p>

@endsection