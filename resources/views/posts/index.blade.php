@extends('layouts.layout')
@section('content')
@forelse($posts as $post)
<p>
    <h3>
<a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a>
    </h3>
<a href="{{route('posts.edit',['post'=>$post->id])}}">Edit</a>
</p>
@empty
<p>No posts</p>
@endforelse
@endsection
