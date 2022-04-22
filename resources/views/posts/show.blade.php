@extends('layouts.app')
@section('title')
    {{$post->title}}
@endsection
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    @endif
@endsection