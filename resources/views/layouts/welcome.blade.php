<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
    <title>@yield('title')</title>
</head>
<body>
	<div class="container">
		<div id="sidebar">
			<div class="sidebar-container">
				<h1>Menu principal</h1>
				<nav>
					<ul>
						<li><a href="/login">Entrar</li>
						<li><a href="/cadastrar">Cadastrar</a></li>
						<li><a href="/inicio">Inicio</a></li>
						<li><a href="/create">Criar ticket</a></li>
						<li><a href="/dashboard">Dashboard</a></li>
						<li><a href="/usuarios">Users</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="content">
		@yield('content')
	</div>
	<footer>
			
			<p>Tickets @@</p>
			
	</footer>
</body>

</html>