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
						@guest
						<li><a href="/login">Entrar</li>
						<li><a href="/register">Cadastrar</a></li>
						@endguest
						<li><a href="/inicio">Gerenciamento Tickets</a></li>
						<li><a href="/create">Criar ticket</a></li>
						<li><a href="/tickets">Dashboard</a></li>
						@auth
						<li><form action="/logout" method="POST">
						@csrf
						<a href="/logout"
						onclick="event.preventDefault();
						this.closest('form').submit();">Sair</a>
						</form></li>
						@endauth
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<main>
		<div class="content">
			<div class="row">
				@if (session('msg'))
					<p class="msg">{{session('msg')}}</p>
				@endif
				@yield('content')
			</div>
		</div>
	</main>
	<footer id="footer" class="content">
		
			<p>Tickets @@</p>
			
	</footer>
</body>

</html>