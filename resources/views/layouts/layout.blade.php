<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Базовая разметка HTML</title>
</head>
<body>
<ul>
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('contact')}}">Contact</a></li>
    <li><a href="{{route('posts.index')}}">BlogPosts</a></li>
    <li><a href="{{route('posts.create')}}">CreatePosts</a></li>
</ul>
@if(session()->has('status'))
<p style="color: green">
{{session()->get('status')}}
</p>
@endif
  @yield('content')
</body>
</html>
