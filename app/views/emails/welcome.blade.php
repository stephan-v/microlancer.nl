<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welkom</title>
</head>
<body>
	<h1>Welkom bij ontwerpwedstrijden!</h1>
	<p>Bedankt voor het aanmelden op de website.</p>
	<p>Gebruikersnaam: {{ $username }}</p>

	{{ link_to_route('users.activate', 'Activeer je account.', $confirmation) }}
</body>
</html>