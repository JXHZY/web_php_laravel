<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<!-- normally style -->
	<!-- <link rel="stylesheet" href="/css/style.css"> -->
	<!-- after change the "gulpfilr.js" with ".version" -->
	<!-- <link rel="stylesheet" href="{{elixir('css/app.css')}}"> -->
	@yield('header')
</head>

<body>
	@yield('content')

	@yield('footer')
</body>
	
</html>