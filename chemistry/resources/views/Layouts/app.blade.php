<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Welcome to HackerPair</title>
Welcome to HackerPair, {!! \Session::has('id') ? \Session::get('id') : 'Guest' !!}
</head>

<body>

@yield('content')

<div>
@section('advertisement')
<p>Score some HackerPair swag in our store!</p>
@show
</div>

@yield('jscontent')

</body>

</html>