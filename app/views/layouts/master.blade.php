<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	{{ HTML::style('css/main.css') }}
	<title>Document</title>
</head>
<body class="@yield('background')">
	<header>
		<div class="container">
			<div class="row">
				<div class="column-12">
					<nav class="navbar">			
						<ul>
							<li>{{ link_to_route('home', 'Home') }}</li>
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
					</nav>
				</div><!-- end .column-12 -->
			</div><!-- end .row -->
		</div><!-- end .container -->
	</header>

	@yield('content')
</body>
</html>