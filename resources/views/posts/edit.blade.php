@extends('layouts.layout')
@section('content')
<form method="POST" action="{{route('posts.update',['post'=>$post->id]) }}">
@method('PUT')
@csrf
    <p>
    <label>Title</label>
    <input type="text" name="title" value="{{old('title',$post->title)}}"/>
    </p>

    <p>
    <label>Content</label>
    <input type="text" name="content" value="{{old('content',$post->content)}}"/>
    </p>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <button type="submit">Update</button>
</form>
@endsection
