<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Welcome to HackerPair</title>

<div>Welcome to HackerPair, {!! \Session::has('id') ? \Session::get('id') : 'Guest' !!}</div>

@if (Session::has('id'))
<a href="{{ route('main.index') }}">Search</a>	
<a href="{{ route('main.settings') }}">Your settings</a>
<a href="{{ route('main.about') }}">About</a>
@endif

</head>

<body>

@yield('content')

@yield('jscontent')

</body>

</html>