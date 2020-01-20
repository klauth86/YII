<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Welcome to HackerPair</title>
Welcome to HackerPair, {!! \Session::has('id') ? \Session::get('id') : 'Guest' !!}
</head>

<body>

@yield('content')

@yield('jscontent')

</body>

</html>