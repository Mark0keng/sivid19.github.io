<!DOCTYPE html>
<html>
<head>
	<title>Latihan membuat website</title>
	<link rel="stylesheet" href="../css/layout.css">
</head>
<body>
	<header>
		<nav>
			@include('layout.navbar')
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