<!doctype html>
<html lang="ru-luna1918">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
	@include('partials.bootstrap')
	@stack('styles')
  </head>
  <body>
		<div class="container">
			<header class="row bg-success">
				<h1>Блог разработчика</h1>
			</header>
			<div class="row bg-warning">
				<nav class="col-lg-3 col-xs-12 bg-primary">Меню</nav>
				<main class="col-lg-9 col-xs-12">@yield('content')</main>
			</div>
			<footer class="row bg-secondary">Леонов И.В., 2019</footer>
		</div>
  </body>
</html>