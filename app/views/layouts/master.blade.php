<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css')}}
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav navbar-left">
				<li>{{ link_to_route('home', 'home') }}</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>{{ link_to_route('users.index', 'Alle gebruikers') }}</li>
				<li>{{ link_to_route('users.create', 'Registreer')}}</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="col-md12">
			@yield('content')
		</div>
	</div>
</body>
</html>