@extends('layouts.layout')
@section('content')
<h3>{{$post->title}}</h3>
<p>{{$post->content}}</p>
<form method="POST" action="{{route('posts.destroy',['post'=>$post->id]) }}">
@method('DELETE')
@csrf
<button type="submit">Delete</button>
</form>
@endsection
