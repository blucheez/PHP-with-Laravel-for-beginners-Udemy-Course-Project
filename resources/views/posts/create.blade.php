@extends('layouts.app')

@section('content')
<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title" id="title" placeholder="enter title">
    <input type="submit" value="submit">
</form>
@endsection