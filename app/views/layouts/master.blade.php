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
				<li>{{ link_to_route('contests.index', 'Wedstrijden') }}</li>
				<li>{{ link_to_route('users.index', 'Alle gebruikers') }}</li>
				
				@if( Auth::check() )
					<li>{{ link_to_route('users.logout', Auth::user()->email) }}</li>
				@else
					<li>{{ link_to_route('users.login', 'Log in') }}</li>
				@endif
				
				@if( !Auth::check() )
					<li>{{ link_to_route('users.create', 'Registreer') }}</li>
				@endif
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