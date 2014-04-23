<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	{{ HTML::style('css/main.css') }}
	<title>Document</title>
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="container">
				<ul>
					<li>{{ link_to_route('home', 'Home', null, ['class' => 'active']) }}</li>
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
	</header>

	@yield('content')
</body>
</html>