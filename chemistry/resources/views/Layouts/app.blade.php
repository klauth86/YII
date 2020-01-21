<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Химия</title>

<div>Добро пожаловать на Химию, {!! \Session::has('id') ? \Session::get('id') : 'Гость' !!}</div>

@if (Session::has('id'))
<a href="{{ route('main.index') }}">Основная</a>	
<a href="{{ route('main.settings') }}">Настройки</a>
<a href="{{ route('welcome.about') }}">О приложении</a>
@endif

</head>

<body>

@yield('content')

@yield('jscontent')

</body>

</html>