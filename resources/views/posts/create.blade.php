@extends('layouts.layout')
@section('content')
<form method="POST" action="{{route('posts.store')}}">
@csrf
    <p>
    <label>Title</label>
    <input type="text" name="title" value="{{old('title')}}"/>
    </p>

    <p>
    <label>Content</label>
    <input type="text" name="content" value="{{old('content')}}"/>
    </p>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <button type="submit">Create</button>
</form>
@endsection
