<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{ asset('images/icon-search.png') }}" type="image/png">
		<title>Location</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<style>
			body {
				font-family: 'Lato';
			}

			.fa-btn {
				margin-right: 6px;
			}
		</style>
	</head>
	<body id="app-layout">

		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="location"></a>

				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="{{ url('/') }}"><i class="fa fa-home"></i> Accueil</a>
						</li>
						<li>
							<a href="Contact"><i class="fa fa-comment"></i> Contact</a>
						</li>
						@if (Auth::guest())
						<li>
							<a href="login"><i class="fa fa-lock"></i> Login</a>
						</li>
						<li>
							<a href="register"><i class="fa fa-user"></i> Inscription</a>
						</li>
				        @else
				        <li class="profil">
							<a href="{{ url('/home') }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
						</li>
						@endif
						
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')

		@include('pages.footer')

	</body>
</html>
