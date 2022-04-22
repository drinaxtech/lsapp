@extends('layouts.app')
@section('title')
{{ $title }}
@endsection
@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel</h1>
        <p>Welcome To Laravel</p>
        <p>
           <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
           <a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
        </p>
    </div>
@endsection

