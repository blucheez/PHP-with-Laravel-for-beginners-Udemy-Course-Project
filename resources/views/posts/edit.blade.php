@extends('layouts.app')

@section('content')
<h2>Edit</h2>
<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" id="title" placeholder="enter title" value="{{$post->title}}">
    <input type="submit" value="UPDATE">
</form>

<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">
</form>
@endsection