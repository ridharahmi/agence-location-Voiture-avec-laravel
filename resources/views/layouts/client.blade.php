<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{ asset('images/icon-search.png') }}" type="image/png">
		<title>Client</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/compte.css') }}" rel="stylesheet">

		<style>
			body {
				font-family: 'Lato';
			}

			.fa-btn {
				margin-right: 6px;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="location"></a>

				</div>

				<ul class="nav navbar-right top-nav">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle profil" data-toggle="dropdown" role="button" aria-expanded="false"> 
							{{ Auth::user()->name }} <span class="caret"></span> </a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="SettingClient"><i class="fa fa-fw fa-user"></i> Edit Profile</a>
							</li>
							<li>
								<a href="PasswordClient"><i class="fa fa-fw fa-cog"></i> Change Password</a>
							</li>
							<li>
								<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Déconnexion</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
					
						<li>
							<a href="Client"><i class="fa fa-fw fa-cog"></i> Compte</a>
						</li>
						<li>
							<a href="SettingClient"><i class="fa fa-fw fa-bars"></i> Paramètres</a>
						</li>
						<li>
							<a href="PasswordClient"><i class="fa fa-fw fa-unlock-alt"></i> Mot de passe</a>
						</li>
						<li>
							<a href="ListDemande"><i class="fa fa-fw fa-user-plus"></i> Demande</a>
						</li>
						<li>
							<a href="ListVoiture"><i class="fa fa-fw fa-car"></i> Voiture</a>
						</li>					
					</ul>
				</div>
			</nav>
			<div id="page-wrapper">
				<div class=" well">
					@include('pages.message')
					<br />
					@yield('content')
					
				</div>
			</div>
		</div>

		@include('pages.js')

	</body>
</html>
