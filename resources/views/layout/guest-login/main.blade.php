<!DOCTYPE html>
<html>
<head>
	<title>SIVID-19</title>
	<link rel="stylesheet" href="../css/layout.css">
</head>
<body>
	<header>
		<nav>
			@include('layout.guest-login.navbar')
		</nav>
	</header>
	<div class="container">
		@yield('content')

	</div>
	<footer>
		@include('layout.footer')
	</footer>
</body>
</html>