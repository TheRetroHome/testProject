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
</ul>
  @yield('content')
</body>
</html>
